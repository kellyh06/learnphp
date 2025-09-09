<?php

///// library

class Cat {
    public function __construct() {
        var_dump('Class was created');
    }

    public function __call($name, $args) {
        var_dump($name, $args);
    }

    public function __invoke($value) {
        var_dump($value);
    }

    public function __get($name) {
        var_dump($name);
        return 'Cool s*it';
    }

    public function __set($name, $value) {
        var_dump("Set $name to $value");
    }

    public function toString() {
        return 'Meowww';
    }

    public function __destruct() {
        var_dump('Class was destroyed');
    }
}

function makeCat() {
    $cat = new Cat();
}


$kitty = new Cat();
var_dump($kitty);
var_dump($kitty->mood);
$kitty->color = 'Rainbow';
$kitty->throwShit();
echo $kitty;
$kitty = 1;
var_dump('something');