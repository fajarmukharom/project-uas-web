<?php 
// koneksi database
include ('../element/connection.php');

// menangkap data id yang di kirim dari url
$id_admin = $_GET['id'];


// menghapus data dari database
$query = "DELETE from data_admin where id_admin='$id_admin'";

$runquery = mysqli_query($connect, $query);

// mengalihkan halaman kembali ke index.php
header("Location:../../data-admin.php");

?>