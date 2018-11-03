<?php

namespace DesignPatterns\Creational\Singleton\Example02;

/**
 * class singleton
 */
class Singleton
{
    /**
     * @var Singleton reference to singleton instance
     */
    private static $instance;

    /**
     * gets the instance via lazy initialization (created on first usage)
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    /**
     * is not allowed to call from outside : pricate
     */
    private function __construct()
    {
    }

    /**
     * prevent the instance from being clone
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * prevent from being unserialized
     */
    private function __wakeup()
    {
    }
}