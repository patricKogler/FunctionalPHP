<?php


namespace FunctionalPHP\Functor;

use FunctionalPHP\HKT\HKT;

/**
 * Interface Functor
 * @package FunctionalPHP\Functor
 * @template T
 * @template A
 * @extends HKT<T, A>
 */
interface Functor extends HKT
{
    /**
     * @template B
     * @param callable(A): B $fun
     * @return Functor<T, B>
     */
    public function map(callable $fun): Functor;
}