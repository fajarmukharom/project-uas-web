<?php
include('../element/connection.php');

$username_admin = $_POST['username_admin'];
$password_admin = $_POST['password_admin'];


$query = "SELECT * FROM data_admin WHERE username='$username_admin' and password_admin=password('$password_admin')";
$runquery = mysqli_query($connect,$query);

$wrong = 'username/password yang anda masukkan salah. Silahkan ulang kembali';

if(mysqli_num_rows($runquery) == 1) {
    header("Location:../../index.php");
}
else {
    echo $wrong;	
}

?>