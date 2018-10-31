<?php
namespace DesignPatterns\Creational\Prototype;

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