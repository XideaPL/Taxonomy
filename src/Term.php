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
class Term extends AbstractTerm
{
    /**
     * 
     * @param string $name
     * @param \Xidea\Taxonomy\TermInterface $parent
     */
    public function __construct($name, TermInterface $parent = null)
    {
        $this->name = $name;
        $this->parent = $parent;
    }
}
