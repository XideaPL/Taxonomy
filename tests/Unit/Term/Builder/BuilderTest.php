<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license intypeion, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Taxonomy\Tests\Unit\Term\Builder;

use Xidea\Taxonomy\Term\Builder\Builder;
use Xidea\Taxonomy\Taxonomy;
use Xidea\Taxonomy\Term;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
class BuilderTest extends \PHPUnit_Framework_TestCase
{
    public function testSetName()
    {
        $name = 'Term 1';
        $builder = $this->createBuilder($name);
        
        $builder->setName($name);
        $this->assertEquals($name, $builder->getTerm()->getName());
    }
    
    public function testSetTaxonomy()
    {
        $builder = $this->createBuilder('Term 1');
        
        $builder->setTaxonomy($taxonomy = new Taxonomy('taxonomy1', 'Taxonomy 1'));
        $this->assertEquals($taxonomy, $builder->getTerm()->getTaxonomy());
    }
    
    public function testSetParent()
    {
        $builder = $this->createBuilder('Term 1');
        
        $builder->setParent($parent = new Term('Term 1'));
        $this->assertEquals($parent, $builder->getTerm()->getParent());
    }
    
    public function testAddChild()
    {
        $builder = $this->createBuilder('Term 1');
        
        $builder->addChild(new Term('Term 1'));
        $builder->addChild(new Term('Term 2'));
        $this->assertEquals(2, count($builder->getTerm()->getChildren()));
    }
    
    protected function createBuilder($name)
    {
        return new Builder($name);
    }
}