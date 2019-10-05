<?php
include 'db.php';

$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];

 $sql= "INSERT INTO login (name,password,email) VALUES ('$name' , '$password' ,'$email')";
if (mysqli_query($conn, $sql)) {
    header('location:reg_login.php');
} else {
    header('location:reg_login.php');
}
?>
