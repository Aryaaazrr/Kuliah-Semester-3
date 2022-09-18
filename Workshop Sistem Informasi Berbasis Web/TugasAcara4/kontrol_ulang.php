<?php
    $nilai=90;
    echo "CONTOH IF ELSE \n";
        if  ($nilai > 80) { 
            echo "Selamat Anda mendapat grade A \n";
        } else { 
            echo "Maaf Anda belum dapat grade A \n";
        };
        echo "CONTOH SWITCH \n";
        switch ($nilai) {
            case 100 :echo "Nilai yang dipilih 100 \n";
            break;
            case 90 :echo "Nilai yang dipilih 90 \n";
            break;
        } 
        echo "CONTOH FOR \n";
        for($i = 1;$i <= 5;$i++) {
            echo "Looping FOR ke : ".$i."\n";
        }
        echo "CONTOH WHILE \n";
        $j = 1;
        while($j <= 5) {
            echo "Looping While ke : ".$j."\n";
            $j++;
        }
?>