<?php
include 'db.php';

$id=$_GET['id'];
// $id=$_POST['id'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$year=$_POST['year'];
$college=$_POST['college'];
$department=$_POST['department'];
$email=$_POST['email'];



 $sql = "UPDATE registration SET Name ='$name',Gender ='$gender',Year='$year',College='$college', Department='$department',Email ='$email' WHERE id=$id";
 if (mysqli_query($conn, $sql)) {
     header('location:reg_table.php');
} else {
    header('location:reg_table.php');
}
?>