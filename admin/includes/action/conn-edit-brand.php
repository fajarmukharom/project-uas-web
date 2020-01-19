<?php
include('../element/connection.php');

$id_brand = $_POST['id_brand'];
$kode_brand = $_POST['kode_brand'];
$nama_brand = $_POST['nama_brand'];
$perusahaan_brand = $_POST['perusahaan_brand'];

$query = "UPDATE data_brand set kode_brand='$kode_brand', nama_brand='$nama_brand', perusahaan_brand='$perusahaan_brand' where id_brand='$id_brand'";

$runquery = mysqli_query($connect,$query);

// echo $runquery;
header("Location:../../data-brand.php");
?>
