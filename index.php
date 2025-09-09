<?php

$bool = true && false;
$bool = true || false;
$bool = !true;
$bool = (true && false || false) && !(true || false && true); //false
$bool = 10 > 5;
$bool = 10 < 5;
$bool = 10 > 10;
$bool = 10 < 10;
$bool = 10 == 10;
$bool = 10 >= 10;
$bool = 10 <= 10;
var_dump($bool);