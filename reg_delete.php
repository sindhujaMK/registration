<?php
include 'db.php';
echo $id=$_GET['id'];

echo $sql = "DELETE FROM  registration WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    header('location:reg_table.php');
} else {
    header('location:reg_table.php');
}
?>
