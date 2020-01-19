<?php
include('../element/connection.php');

$nama_outlet = $_POST['nama_outlet'];
$regional_outlet = $_POST['regional_outlet'];
$alamat_outlet = $_POST['alamat_outlet'];
$id_level = $_POST['id_level'];
$manager_outlet = $_POST['manager_outlet'];
$email_outlet = $_POST['email_outlet'];
$password_outlet = $_POST['password_outlet'];

$query = "INSERT into data_outlet (id_outlet, nama_outlet, regional_outlet, alamat_outlet, id_level, manager_outlet, email_outlet, password_outlet)
          values (NULL,'$nama_outlet','$regional_outlet','$alamat_outlet', '$id_level','$manager_outlet','$email_outlet',password('$password_outlet'))";

$runquery = mysqli_query($connect,$query);

// echo $query;
header("Location:../../data-outlet.php");
?>
