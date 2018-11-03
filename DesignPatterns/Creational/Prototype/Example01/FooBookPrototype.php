<?php

namespace DesignPatterns\Creational\Prototype\Example01;

/*
 * Class FooBookPrototype
 */


class FooBookPrototype extends BookPrototype
{
    /*
     * @var string
     */
    protected $category = 'Foo';

    /*
     * empty clone
     */
    public function _clone()
    {
    }
}