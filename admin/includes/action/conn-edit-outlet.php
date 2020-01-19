<?php
include('../element/connection.php');

$id_outlet = $_POST['id_outlet'];
$nama_outlet = $_POST['nama_outlet'];
$regional_outlet = $_POST['regional_outlet'];
$alamat_outlet = $_POST['alamat_outlet'];
$id_level = $_POST['id_level'];
$manager_outlet = $_POST['manager_outlet'];
$email_outlet = $_POST['email_outlet'];
$password_outlet = $_POST['password_outlet'];

$query = "UPDATE data_outlet set nama_outlet='$nama_outlet', regional_outlet='$regional_outlet', alamat_outlet='$alamat_outlet', id_level='$id_level', manager_outlet='$manager_outlet', email_outlet='$email_outlet', password_outlet=password('$password_outlet') where id_outlet='$id_outlet'";

$runquery = mysqli_query($connect,$query);

// echo $query;
header("Location:../../data-outlet.php");
?>
