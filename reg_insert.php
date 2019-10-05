<?php
include 'db.php';

$name=$_POST['name'];
$gender=$_POST['gender'];
$year=$_POST['year'];
$college=$_POST['college'];
$department=$_POST['department'];
$email=$_POST['email'];

 $sql= "INSERT INTO registration (name,gender,year,college,department,email) VALUES ('$name' , '$gender' , '$year' , '$college' , '$department' , '$email')";
if (mysqli_query($conn, $sql)) {
	$_SESSION['login'] = 'success';
    header('location:reg_table.php');
} else {
    header('location:reg_table.php');
}
?>
