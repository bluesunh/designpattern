<?php

namespace DesignPatterns\Creational\Prototype\Example01;

/*
 * Class BarBookPrototype
 */


class BarBookPrototype extends BookPrototype
{
    /*
     * @var string
     */
    protected $category = 'Bar';

    /*
     * empty clone
     */
    public function _clone()
    {
    }
}