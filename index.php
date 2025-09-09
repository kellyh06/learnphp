<?php
 
 for ($i = 0; $i < 10; $i++) {
    if ($i == 3) {
        continue;
    }
    if( $i == 5) {
        break;
    }
    var_dump($i);
 }

 for($i = 0; $i < 10; $i++) {
    if ($j = 0; $j < 10; $j++) {
        break 2;
        var_dump($j);
    }
    var_dump($i);
 }