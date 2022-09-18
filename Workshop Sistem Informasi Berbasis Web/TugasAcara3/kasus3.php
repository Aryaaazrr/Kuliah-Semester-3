<?php
    echo "\nSelamat Datang di Dashboard\n";
    echo "1. Login\n";
    echo "2. Pemesanan\n";
    echo "3. Logout\n";
    $pilihmenu = readline("Pilih : ");
    if ($pilihmenu == 1) {
        include("kasus1.php");
    } else if ($pilihmenu == 2) {
        include("kasus4.php");
    } else {
        include("kasus5.php");
    }
?>