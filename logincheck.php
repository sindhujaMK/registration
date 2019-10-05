<?php 
session_start();
include_once 'db.php';

$password=$_POST['password'];
$email=$_POST['email'];

print_r($_POST);

$sql = "SELECT * FROM login where email='$email' && password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	$_SESSION['login'] = 'success';
	header('location:reg_table.php');
}else{
	header('location:index.php');
}





 ?>