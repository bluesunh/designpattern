<?php

namespace DesignPatterns\Creational\Prototype\Example01;

include __DIR__ . '/../../../../vendor/autoload.php';

$fooPrototype = new FooBookPrototype();
$barPrototype = new BarBookPrototype();

$books = [];

// now lets say we need 10,000 books of foo and 5,000 of bar
for ($i = 0; $i < 10000; $i++) {
    $books['foo'][$i] = clone $fooPrototype;
    $books['foo'][$i]->setTitle('Foo Book No' . $i);
}

for ($i = 0; $i < 5000; $i++) {
    $books['bar'][$i] = clone $barPrototype;
    $books['bar'][$i]->setTitle('Bar Book No' . $i);
}

// result
foreach ($books as $k => $v) {
    for ($i = 0; $i < 5; $i++) {
        print($v[$i]->getTitle() . PHP_EOL);
    }
}