<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Taxonomy\Term\Builder;

use Xidea\Taxonomy\TaxonomyInterface;
use Xidea\Taxonomy\TermInterface;
use Xidea\Taxonomy\Term;

/**
 * Description of Factory
 *
 * @author Artur Pszczółka <artur.pszczolka@xidea.pl>
 */
class Builder implements \Xidea\Taxonomy\Term\BuilderInterface
{
    /*
     * @var TermInterface
     */
    protected $term;
    
    /**
     * 
     * @param string $name
     */
    public function __construct($name)
    {
        $this->term = new Term($name);
    }
    
    /*
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $this->term->setName($name);
        
        return $this;
    }
    
    /*
     * {@inheritdoc}
     */
    public function setTaxonomy(TaxonomyInterface $taxonomy)
    {
        $this->term->setTaxonomy($taxonomy);
        
        return $this;
    }
    
    /*
     * {@inheritdoc}
     */
    public function setParent(TermInterface $parent = null)
    {
        $this->term->setParent($parent);
        
        return $this;
    }
    
    /*
     * {@inheritdoc}
     */
    public function addChild(TermInterface $child)
    {
        $this->term->addChild($child);
        
        return $this;
    }
    
    /*
     * {@inheritdoc}
     */
    public function getTerm()
    {
        return $this->term;
    }
}
