<?php
include('../element/connection.php');

$kode_brand = $_POST['kode_brand'];
$nama_brand = $_POST['nama_brand'];
$perusahaan_brand = $_POST['perusahaan_brand'];

$query = "INSERT into data_brand (id_brand, kode_brand, nama_brand, perusahaan_brand)
          values (NULL,'$kode_brand','$nama_brand', '$perusahaan_brand')";

$runquery = mysqli_query($connect,$query);

header("Location:../../data-brand.php");
?>
