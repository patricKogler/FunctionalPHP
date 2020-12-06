<?php

namespace FunctionalPHP\Setoid;

use FunctionalPHP\HKT\HKT;

/**
 * Interface Setoid
 * @package FunctionalPHP\Setoid
 * @template T
 * @template A
 * @extends HKT<T, A>
 */
interface Setoid extends HKT
{
    /**
     * @param Setoid<T, A> $other
     * @return bool
     */
    public function equals(Setoid $other): bool;
}