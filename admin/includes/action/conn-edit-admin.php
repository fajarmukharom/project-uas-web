<?php
include('../element/connection.php');

$id_admin = $_POST['id_admin'];
$nama_admin = $_POST['nama_admin'];
$username_admin = $_POST['username_admin'];
$email_admin = $_POST['email_admin'];
$password_admin = $_POST['password_admin'];

$query = "UPDATE data_admin set username='$username_admin', email='$email_admin', password_admin='$password_admin', nama_admin='$nama_admin' where id_admin='$id_admin'";

$runquery = mysqli_query($connect,$query);

// echo $runquery;
header("Location:../../data-admin.php");
?>
