<?php
    function cekBilanganTerbesar($a, $b)
    {
        if ($a > $b) {
            echo $a;
        } else {
            echo $b;
        }
    };
    echo cekBilanganTerbesar(100, 150);
?>