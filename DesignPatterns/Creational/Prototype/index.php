<?php
namespace DesignPatterns\Creational\Prototype;

include __DIR__ . '/../../../autoloader.php';
$fooPrototype = new FooBookPrototype();
$barPrototype = new BarBookPrototype();

$book = array();
for ($i = 0; $i < 10; $i++) {
    $book[$i] = clone $fooPrototype;
    $book[$i]->setTitle('Foo Book No' . $i);
    var_dump($book[$i]);
    echo '<br>';
}
echo $book[0]->getTitle() . '<br>';
echo $book[9]->getTitle() . '<br>';

$book = array();
for ($i = 0; $i < 5; $i++) {
    $book[$i] = clone $barPrototype;
    $book[$i]->setTitle('Bar Book No' . $i);
    var_dump($book[$i]);
    echo '<br>';
}
echo $book[0]->getTitle() . '<br>';
echo $book[4]->getTitle() . '<br>';