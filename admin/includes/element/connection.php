<?php
    //Data Kredential DB
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "pw_ponselku";

    //Fungsi koneksi ke Database
    $connect = mysqli_connect($hostname,$username,$password,$dbname);

    //cek koneksi
    if(!$connect) {
        echo "<h2>Koneksi Database Gagal : " . mysqli_connect_error() . "</h2>";
    }
    // else{
    //     echo "<h2>Koneksi Berhasil</h2>"
    // }
?>