<?php 
// koneksi database
include ('../element/connection.php');

// menangkap data id yang di kirim dari url
$id_ponsel = $_GET['id'];


// menghapus data dari database
$query = "DELETE from data_ponsel where id_ponsel='$id_ponsel'";

$runquery = mysqli_query($connect, $query);

// mengalihkan halaman kembali ke index.php
header("Location:../../data-ponsel.php");

?>