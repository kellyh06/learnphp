<?php

$array = array(1, 2, 3, 4, 5);
$array = [6, 7, 8, 9, 10];
$array = [1, 'hello', true, [1, 2, 3]];
$array = [
    'name' => 'Kelly',
    'age' => 18,
    'gender' => 'woman',
    'isCool' => true
];
$array = [
    6 => 'lol',
    1,
    2,
    3,
    'name' => 'Kelly',
    'age' => 18,
    88,
    'hello world',
    'gender' => 'woman',
    'isCool' => true
];


var_dump($array[7]);
$array = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];
var_dump($array[1][2]);
$array = [1, 2, 3];
array_push($array, 4);
array_push($array, 5, 6, 7);
$array[] = 8;
var_dump($array);