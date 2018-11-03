<?php

namespace DesignPatterns\Creational\Prototype\Example01;

/*
 * class BookPrototype
 */


abstract class BookPrototype
{
    /*
     * @var string
     */
    protected $title;

    /*
     * @var string
     */
    protected $category;

    /*
     * @abstract
     * @return void
     */
    abstract public function _clone();

    /*
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /*
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
}