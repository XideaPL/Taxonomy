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
abstract class AbstractTerm implements TermInterface
{
    /*
     * @var int
     */
    protected $id;
    
    /*
     * @var string
     */
    protected $name;
    
    /*
     * @var TaxonomyInterface
     */
    protected $taxonomy = null;
    
    /*
     * @var boolean
     */
    protected $root = false;
    
    /*
     * @var TermInterface
     */
    protected $parent = null;
    
    /*
     * @var TermInterface[]
     */
    protected $children = array();
    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * {@inheritDoc}
     */
    public function setTaxonomy(TaxonomyInterface $taxonomy)
    {
        $this->taxonomy = $taxonomy;
        
        return $this;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getTaxonomy()
    {
        return $this->taxonomy;
    }
    
    /**
     * {@inheritDoc}
     */
    public function isRoot()
    {
        return $this->root;
    }
    
    /**
     * {@inheritDoc}
     */
    public function setParent(TermInterface $parent = null)
    {
        $this->parent = $parent;
        
        return $this;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        return $this->parent;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getChildren()
    {
        return $this->children;
    }
    
    /**
     * {@inheritDoc}
     */
    public function hasChild(TermInterface $child)
    {
        if(!in_array($child, $this->children)) {
            return true;
        }
        
        return false;
    }
    
    /**
     * {@inheritDoc}
     */
    public function addChild(TermInterface $child)
    {
        if(!in_array($child, $this->children)) {
            $this->children[] = $child;
        }
        
        return $this;
    }
    
    /**
     * {@inheritDoc}
     */
    public function removeChild(TermInterface $child)
    {
        foreach($this->children as $key => $term) {
            if($term == $child) {
                unset($this->children[$key]);
                
                return true;
            }
        }
        
        return false;
    }
}
