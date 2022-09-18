<?php
    // Pemesanan Cuci Sepatu
    echo "Silahkan pilih metode cuci sepatu anda\n";
    echo "======================================\n";
    $metode1 = "Cuci Kering";
    $metode2 = "Cuci Basah";
    echo "- $metode1\n";
    echo "- $metode2\n";
    $pilihanmetode = readline("Pilih Metode [1/2]: ");
    if ($pilihanmetode == 1) {
        echo "Masukkan data diri anda\n";
        $namacostumer = readline("Nama Costumer : ");
        $alamatcostumer = readline("Alamat Costumer : ");
        $nowhatsapp = readline("No. Whatsapp : ");
        $jenissepatu = readline("Jenis Sepatu : ");
        if ($namacostumer and $alamatcostumer and $nowhatsapp and $jenissepatu != null) {
            echo "=================================\n";
            echo "Selamat Pesanan anda terkirim dengan metode $metode1\n";
            echo "Silahkan lihat update pengerjaan cuci sepatu anda\n";
        } else if ($namacostumer == null and $alamatcostumer != null and $nowhatsapp != null and $jenissepatu != null) {
            echo "Masukkan Nama anda";
        } else if ($namacostumer != null and $alamatcostumer == null and $nowhatsapp != null and $jenissepatu != null) {
            echo "Masukkan Alamat anda";
        } else if ($namacostumer != null and $alamatcostumer != null and $nowhatsapp == null and $jenissepatu != null) {
            echo "Masukkan No. Whatsapp anda";
        } else if ($namacostumer != null and $alamatcostumer != null and $nowhatsapp != null and $jenissepatu == null) {
            echo "Masukkan merk sepatu anda";
        } else {
            echo "Masukkan data diri anda dengan benar";
        }    
    } else if ($pilihanmetode == 2) {
        echo "Masukkan data diri anda\n";
        $namacostumer = readline("Nama Costumer : ");
        $alamatcostumer = readline("Alamat Costumer : ");
        $nowhatsapp = readline("No. Whatsapp : ");
        $jenissepatu = readline("Jenis Sepatu : ");
        if ($namacostumer and $nowhatsapp and $merksepatu and $jenissepatu != null) {
            echo "=================================\n";
            echo "Selamat Pesanan anda terkirim dengan metode $metode2\n";
            echo "Silahkan lihat update pengerjaan cuci sepatu anda";
        } else if ($namacostumer == null and $alamatcostumer != null and $nowhatsapp != null and $jenissepatu != null) {
            echo "Masukkan Nama anda";
        } else if ($namacostumer != null and $alamatcostumer == null and $nowhatsapp != null and $jenissepatu != null) {
            echo "Masukkan Alamat anda";
        } else if ($namacostumer != null and $alamatcostumer != null and $nowhatsapp == null and $jenissepatu != null) {
            echo "Masukkan No. Whatsapp anda";
        } else if ($namacostumer != null and $alamatcostumer != null and $nowhatsapp != null and $jenissepatu == null) {
            echo "Masukkan merk sepatu anda";
        } else {
            echo "Masukkan data diri anda dengan benar";
        }       
    } else {
        echo "Pilih Metode dengan benar";
    }
?>