<?php
 
 
function hello() {
    var_dumb( "Hello, World!");
}
 
hello();
 
function helloName($name='Unknown'){
    var_dump("Hello" . $name);
}
helloName("Kelly");
helloName("Nikita");
 
function helloNameAndAge($name='Unknown', $age){
    var_dump("Hello . $name and you are $age years old.");
}
 
helloNameAndAge("Nikita", 20);
 
function stuff(...$args){
    var_dump($args);
}
 
stuff(1,2,3,4,5);

function sum($a, $b){
    return $a + $b;
    var_dump('asdasdasd')
}

$answer = sum(1,5);
var_dump($answer);

function biggerOrSmaller($a){
    if($a > 10){
        return "Bigger";
    } else {
        return "Smaller";
    }
}
var_dump(biggerOrSmaller(5));
var_dump(biggerOrSmaller(15));

function recursive($i){
    if($i < 10){
        var_dump($i);
        recursive($i + 1);
    }
}
recursive(0);