<?php
namespace FunctionalPHP\Semigroup;

use FunctionalPHP\HKT\HKT;

/**
 * Interface Semigroup
 * @package FunctionalPHP\Semigroup
 * @template T
 * @template A
 * @extends HKT<T,A>
 */
interface Semigroup extends HKT
{
    /**
     * @param Semigroup<T, A> $other
     * @return Semigroup<T, A>
     */
    public function concat(Semigroup $other): Semigroup;
}