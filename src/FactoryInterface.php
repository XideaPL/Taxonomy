<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Taxonomy;

/**
 *
 * @author Artur Pszczółka <artur.pszczolka@xidea.pl>
 */
interface FactoryInterface
{
    /*
     * Returns a new taxonomy.
     */
    function create($code, $name);
}
