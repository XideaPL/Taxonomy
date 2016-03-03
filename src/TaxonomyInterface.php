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
interface TaxonomyInterface
{    
    /**
     * Sets the code.
     *
     * @param string $code
     * 
     * @return self
     */
    function setCode($code);
    
    /**
     * Returns the code.
     *
     * @return string
     */
    function getCode();
    
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
     * Sets terms.
     *
     * @param TermInterface[] $terms
     * 
     * @return self
     */
    function setTerms($terms);
    
    /**
     * Return terms.
     * 
     * @return TermInterface[]
     */
    function getTerms();
    
    /**
     * @param TermInterface $term
     *
     * @return bool
     */
    function hasTerm(TermInterface $term);
    
    /**
     * @param TermInterface $term
     * 
     * @return self
     */
    function addTerm(TermInterface $term);
    
    /**
     * @param TermInterface $term
     * 
     * @return self
     */
    function removeTerm(TermInterface $term);
}
