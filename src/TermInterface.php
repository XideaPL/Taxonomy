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
interface TermInterface
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
     * Returns the name.
     *
     * @return string
     */
    function getName();
    
    /**
     * Sets the taxonomy.
     * 
     * @param TaxonomyInterface $taxonomy
     * 
     * @return self
     */
    function setTaxonomy(TaxonomyInterface $taxonomy);
    
    /**
     * Returns the taxonomy.
     * 
     * @return TaxonomyInterface
     */
    function getTaxonomy();

    /**
     * @return bool
     */
    function isRoot();
    
    /**
     * @param TermInterface|null $parent
     * 
     * @return self
     */
    function setParent(TermInterface $parent = null);
    
    /**
     * @return TermInterface
     */
    function getParent();

    /**
     * @return TermInterface[]
     */
    function getChildren();
    
    /**
     * @param TermInterface $child
     *
     * @return bool
     */
    function hasChild(TermInterface $child);
    
    /**
     * @param TermInterface $child
     * 
     * @return self
     */
    function addChild(TermInterface $child);
    
    /**
     * @param TermInterface $child
     * 
     * @return self
     */
    function removeChild(TermInterface $child);
}
