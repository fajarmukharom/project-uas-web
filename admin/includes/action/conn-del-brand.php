<?php 
// koneksi database
include ('../element/connection.php');

// menangkap data id yang di kirim dari url
$id_brand = $_GET['id'];


// menghapus data dari database
$query = "DELETE from data_brand where id_brand='$id_brand'";

$runquery = mysqli_query($connect, $query);

// mengalihkan halaman kembali ke index.php
header("Location:../../data-brand.php");

?>