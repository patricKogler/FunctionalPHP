<?php

namespace FunctionalPHP\Ord;

use FunctionalPHP\Setoid\Setoid;

/**
 * Interface Ord
 * @package FunctionalPHP\Ord
 * @template T
 * @template A
 * @extends Setoid<T, A>
 */
interface Ord extends Setoid
{

    /**
     * @param Ord<T, A> $other
     * @return bool
     */
    public function lte(Ord $other): bool;

}