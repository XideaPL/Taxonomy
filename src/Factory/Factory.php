<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Taxonomy\Factory;

/**
 * Description of Factory
 *
 * @author Artur Pszczółka <artur.pszczolka@xidea.pl>
 */
class Factory implements \Xidea\Taxonomy\FactoryInterface
{
    /*
     * {@inheritdoc}
     */
    public function create($code, $name)
    {
        return new \Xidea\Taxonomy\Taxonomy($code, $name);
    }
}
