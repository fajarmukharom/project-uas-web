<?php
include('../element/connection.php');

$nama_ponsel = $_POST['nama_ponsel'];
$id_brand = $_POST['id_brand'];
$ram_ponsel = $_POST['ram_ponsel'];
$internal_ponsel = $_POST['internal_ponsel'];
$harga_ponsel = $_POST['harga_ponsel'];
$stok_ponsel = $_POST['stok_ponsel'];

$query = "INSERT into data_ponsel (id_ponsel, nama_ponsel, id_brand, ram_ponsel, internal_ponsel, harga_ponsel, stok_ponsel)
          values (NULL,'$nama_ponsel','$id_brand','$ram_ponsel', '$internal_ponsel','$harga_ponsel','$stok_ponsel')";

$runquery = mysqli_query($connect,$query);

// echo $query;
header("Location:../../data-ponsel.php");
?>

