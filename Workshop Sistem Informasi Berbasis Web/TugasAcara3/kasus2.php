<?php
    // Program Registrasi sederhana
    echo "Silahkan Daftar terlebih dahulu\n";
    echo "================================\n";
    $Username = readline("Masukkan Username : ");
    $Password = readline("Masukkan Password : ");
    if ($Username and $Password != null) {
        echo "Selamat akun anda sudah terdaftar";
        include("kasus1.php");
    } else if ($Username != null and $Password == null) {
        echo "Masukkan Password terlebih dahulu";
    } else if ($Username == null and $Password != null){
        echo "Username Username terlebih dahulu";
    }else {
        echo "Username dan Password tidak boleh kosong";
    }
?>