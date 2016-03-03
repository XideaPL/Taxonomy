<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Taxonomy;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
abstract class AbstractTaxonomy implements TaxonomyInterface
{
    /*
     * @var int
     */
    protected $id;
    
    /*
     * @var string
     */
    protected $code;
    
    /*
     * @var string
     */
    protected $name;
    
    /*
     * @var TermInterface[] 
     */
    protected $terms = array();
    
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setCode($code)
    {
        $this->code = $code;
        
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        return $this->code;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setTerms($terms)
    {
        $this->terms = $terms;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getTerms()
    {
        return $this->terms;
    }
    
    /**
     * {@inheritDoc}
     */
    public function hasTerm(TermInterface $term)
    {
        if(!in_array($term, $this->terms)) {
            return true;
        }
        
        return false;
    }
    
    /**
     * {@inheritDoc}
     */
    public function addTerm(TermInterface $term)
    {
        if(!in_array($term, $this->terms)) {
            $this->terms[] = $term;
        }
        
        return $this;
    }
    
    /**
     * {@inheritDoc}
     */
    public function removeTerm(TermInterface $term)
    {
        foreach($this->terms as $key => $av) {
            if($av == $term) {
                unset($this->terms[$key]);
                
                return true;
            }
        }
        
        return false;
    }
}
