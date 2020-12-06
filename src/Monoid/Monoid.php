<?php
namespace FunctionalPHP\Monoid;

use FunctionalPHP\Semigroup\Semigroup;

/**
 * Interface Monoid
 * @package FunctionalPHP\Monoid
 * @template T
 * @template A
 * @extends Semigroup<T, A>
 */
interface Monoid extends Semigroup
{

    /**
     * @return A
     */
    public static function empty();
}