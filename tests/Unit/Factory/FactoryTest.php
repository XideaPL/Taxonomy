<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license intypeion, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Taxonomy\Tests\Unit\Factory;

use Xidea\Taxonomy\Factory\Factory;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
class FactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCreate()
    {
        $factory = new Factory();
        
        $taxonomy = $factory->create('taxonomy1', 'Taxonomy 1');
        $this->assertInstanceOf('\Xidea\Taxonomy\TaxonomyInterface', $taxonomy);
    }
}