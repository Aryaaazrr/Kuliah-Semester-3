<?php
    $a = array(
        array(1,1,1),
        array(2,2,2),
        array(3,3,3));
    $b = array(
        array(3,3,3),
        array(2,2,2),
        array(1,1,1));
    for ($i = 0; $i < count($a); $i++) {   
        for ($j = 0; $j < count($b); $j++) { 
            echo $a[$i][$j] + $b[$i][$j];
            echo ',';        
        }
        echo "\n";
    }
