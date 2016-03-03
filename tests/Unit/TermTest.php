<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license intypeion, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Taxonomy\Tests\Unit;

use Xidea\Taxonomy\Term;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
class TermTest extends \PHPUnit_Framework_TestCase
{
    public function testSetAndGetName()
    {
        $name = 'Term 1';
        $term = $this->createTerm($name);
        $this->assertEquals($name, $term->getName());
        
        $name = 'Term 2';
        $term->setName($name);
        $this->assertEquals($name, $term->getName());
    }
    
    public function testSetAndGetParent()
    {
        $term = $this->createTerm('Term 1', new Term('Parent Term 1'));
        
        $this->assertInstanceOf('\Xidea\Taxonomy\TermInterface', $term->getParent());
        
        $term->setParent(NULL);
        $this->assertNull($term->getParent());
        
        $term->setParent(new Term('Parent Term 2'));
        $this->assertInstanceOf('\Xidea\Taxonomy\TermInterface', $term->getParent());
    }
    
    public function testAddChild()
    {
        $term = $this->createTerm('Term 1');

        $term->addChild(new Term('Term 2'))->addChild(new Term('Term 3'));
        
        $this->assertEquals(2, count($term->getChildren()));

        $term->addChild(new Term('Term 4'));
        
        $this->assertEquals(3, count($term->getChildren()));
    }
    
    public function testRemoveChild()
    {
        $term = $this->createTerm('Term 1');

        $term->addChild($term2 = new Term('Term 2'))->addChild(new Term('Term 3'));
        
        $this->assertEquals(2, count($term->getChildren()));
        
        $term->removeChild($term2);
        
        $this->assertEquals(1, count($term->getChildren()));
        
        $term4 = new Term('Term 4');
        
        $this->assertFalse($term->removeChild($term4));
        $this->assertEquals(1, count($term->getChildren()));
    }
    
    protected function createTerm($name, \Xidea\Taxonomy\TermInterface $parent = null)
    {
        return new Term($name, $parent);
    }
}