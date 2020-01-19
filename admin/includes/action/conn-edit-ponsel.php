<?php
include('../element/connection.php');

$id_ponsel = $_POST['id_ponsel'];
$nama_ponsel = $_POST['nama_ponsel'];
$id_brand = $_POST['id_brand'];
$ram_ponsel = $_POST['ram_ponsel'];
$internal_ponsel = $_POST['internal_ponsel'];
$harga_ponsel = $_POST['harga_ponsel'];

$query = "UPDATE data_ponsel set nama_ponsel='$nama_ponsel', id_brand='$id_brand', ram_ponsel='$ram_ponsel', internal_ponsel='$internal_ponsel' , harga_ponsel='$harga_ponsel'  where id_ponsel='$id_ponsel'";

$runquery = mysqli_query($connect,$query);

// echo $runquery;
header("Location:../../data-ponsel.php");
?>
