<?php
    // program logout akun
    echo "Anda masuk program logout\n";
    $logout = readline("Apakah anda yakin ingin logout ? ");
    if ($logout == "y") {
        echo "Anda telah logout";
    } else {
        include("kasus3.php");
    }
?>