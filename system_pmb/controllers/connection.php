<?php
    // Membuat koneksi dengan MySQL
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "system_pmb";
    $koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    //periksa koneksi, tampilkan pesan kesalahan jika gagal
    if(!$koneksi){
        die ("Koneksi database gagal: ".mysqli_connect_errno().
        " - ".mysqli_connect_error());
    }
?>