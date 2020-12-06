<?php

namespace FunctionalPHP\Group;

use FunctionalPHP\Monoid\Monoid;

/**
 * Interface Group
 * @package FunctionalPHP\Group
 * @template T
 * @template A
 * @extends Monoid<T, A>
 */
interface Group extends Monoid
{

    /**
     * @return Monoid<T, A>
     */
    public function invert(): Monoid;
}