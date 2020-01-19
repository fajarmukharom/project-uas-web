<?php
include('../element/connection.php');

$nama_admin = $_POST['nama_admin'];
$username_admin = $_POST['username_admin'];
$email_admin = $_POST['email_admin'];
$password_admin = $_POST['password_admin'];

$query = "INSERT into data_admin (id_admin, username, email, password_admin, nama_admin)
          values (NULL,'$username_admin','$email_admin', password('$password_admin'), '$nama_admin')";

$runquery = mysqli_query($connect,$query);

header("Location:../../data-admin.php");
?>