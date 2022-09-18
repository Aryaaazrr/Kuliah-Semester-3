<?php
    // Program Login sederhana
    echo "Silahkan Login  terlebih dahulu\n";
    echo "================================\n";
    $Username = readline("Masukkan Username : ");
    $Password = readline("Masukkan Password : ");
    if ($Username and $Password != null) {
        echo "Selamat Datang " . "$Username". "\n";
        $pilihan = readline("Apakah anda ingin melanjutkan pemesanan ? ");
        if ($pilihan == "y") {
            include("kasus4.php");
        } else {
            include("kasus5.php");
        }
    } else if ($Username != null and $Password == null) {
        echo "Masukkan Password terlebih dahulu";
    } else if ($Username == null and $Password != null){
        echo "Username Username terlebih dahulu";
    }else {
        echo "Username dan Password tidak boleh kosong";
    }
?>