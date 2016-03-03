<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Taxonomy\Term;

use Xidea\Taxonomy\TaxonomyInterface;
use Xidea\Taxonomy\TermInterface;

/**
 *
 * @author Artur Pszczółka <artur.pszczolka@xidea.pl>
 */
interface BuilderInterface
{
    /**
     * Sets the name.
     *
     * @param string $name
     * 
     * @return self
     */
    function setName($name);
    
    /**
     * Sets the taxonomy.
     * 
     * @param TaxonomyInterface $taxonomy
     * 
     * @return self
     */
    function setTaxonomy(TaxonomyInterface $taxonomy);
    
    /**
     * @param TermInterface|null $parent
     * 
     * @return self
     */
    function setParent(TermInterface $parent = null);
    
    /**
     * @param TermInterface $child
     * 
     * @return self
     */
    function addChild(TermInterface $child);
    
    /*
     * @return TermInterface
     */
    function getTerm();
}
