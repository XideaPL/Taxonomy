<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license intypeion, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Taxonomy\Tests\Unit;

use Xidea\Taxonomy\Taxonomy;
use Xidea\Taxonomy\Term;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
class TaxonomyTest extends \PHPUnit_Framework_TestCase
{
    public function testSetAndGetCode()
    {
        $code = 'taxonomy1';
        $taxonomy = $this->createTaxonomy($code, 'Taxonomy 1');
        $this->assertEquals($code, $taxonomy->getCode());

        $code = 'taxonomy2';
        $taxonomy->setCode($code);
        $this->assertEquals($code, $taxonomy->getCode());
    }
    
    public function testSetAndGetName()
    {
        $name = 'Taxonomy 1';
        $taxonomy = $this->createTaxonomy('taxonomy1', $name);
        $this->assertEquals($name, $taxonomy->getName());
        
        $name = 'Taxonomy 2';
        $taxonomy->setName($name);
        $this->assertEquals($name, $taxonomy->getName());
    }
    
    public function testSetAndGetTerms()
    {
        $taxonomy = $this->createTaxonomy('taxonomy1', 'Taxonomy 1');

        $taxonomy->setTerms([
            new Term('Term 1'),
            new Term('Term 2')
        ]);
        
        $this->assertEquals(2, count($taxonomy->getTerms()));
    }
    
    public function testAddTerm()
    {
        $taxonomy = $this->createTaxonomy('taxonomy1', 'Taxonomy 1');

        $taxonomy->setTerms([
            new Term('Term 1'),
            new Term('Term 2')
        ]);
        
        $this->assertEquals(2, count($taxonomy->getTerms()));
        
        $term3 = new Term('Term 3');
        $taxonomy->addTerm($term3);
        
        $this->assertEquals(3, count($taxonomy->getTerms()));
    }
    
    public function testRemoveTerm()
    {
        $taxonomy = $this->createTaxonomy('taxonomy1', 'Taxonomy 1');

        $taxonomy->setTerms([
            new Term('Term 1'),
            $term2 = new Term('Term 2')
        ]);
        
        $this->assertEquals(2, count($taxonomy->getTerms()));
        
        $taxonomy->removeTerm($term2);
        
        $this->assertEquals(1, count($taxonomy->getTerms()));
        
        $term3 = new Term('Term 3');
        
        $this->assertFalse($taxonomy->removeTerm($term3));
        $this->assertEquals(1, count($taxonomy->getTerms()));
    }
    
    protected function createTaxonomy($code, $name)
    {
        return new Taxonomy($code, $name);
    }
}