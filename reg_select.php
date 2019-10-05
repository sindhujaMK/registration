<?php
include 'db.php';
//echo $id=$_GET['id'];

// Check connection

$name=$_POST['name'];
$gender=$_POST['gender'];
$year=$_POST['year'];
$college=$_POST['college'];
$department=$_POST['department'];
$email=$_POST['email'];




if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT name, gender, year, college, department, email FROM registration WHERE name=anjel ";
//$sql = "SELECT info_select (firstname,lastname) VALUES ('$firstname', '$lastname')";
//echo $sql = "SELECT FROM  info_select WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header('location:reg_table.php');
} else {
    header('location:reg_table.php');
}

mysqli_close($conn);
?>