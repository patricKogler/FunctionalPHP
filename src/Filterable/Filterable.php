<?php


namespace FunctionalPHP\Filterable;


use FunctionalPHP\HKT\HKT;

/**
 * Interface Filterable
 * @package FunctionalPHP\Filterable
 * @template T
 * @template A
 * @extends HKT<T, A>
 */
interface Filterable extends HKT
{
    /**
     * @param callable(A): bool $filter
     * @return Filterable<T, A>
     */
    public function filter(callable $filter): Filterable;
}