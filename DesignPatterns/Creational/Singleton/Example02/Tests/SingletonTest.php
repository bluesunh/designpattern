<?php

namespace DesignPatterns\Creational\Singleton\Example02\Tests;

include __DIR__ . '/../../../../../vendor/autoload.php';

use DesignPatterns\Creational\Singleton\Example02\Singleton;
use PHPUnit\Framework\TestCase;

/*
 * SingletonTest tests the sington pattern
 */


class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $this->assertInstanceOf('DesignPatterns\Creational\Singleton\Example02\Singleton', $firstCall);
        $secondCall = Singleton::getInstance();
        $this->assertSame($firstCall, $secondCall);
    }

    public function testNoConstructor()
    {
        $obj = Singleton::getInstance();

        $refl = new \ReflectionObject($obj);
        $meth = $refl->getMethod('__construct');
        $this->assertTrue($meth->isPrivate());
    }
}