<?php
session_start();
if ($_SESSION['login'] != 'success') {
    header('location:index.php'); 
}
// include 'db.php';
include_once 'db.php';



$sql = "SELECT * FROM registration";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<body>

<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>            
<table class="table table-dark">
    <theadv class="table table-dark">

      <tr>
      	<th>Name</th>
        <th>Gender</th>
        <th>Year</th>
        <th>College</th>
        <th>Department</th>
        <th>Email</th>        
        
      </tr>
    </thead>
    <tbody>
<?php while($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?php print_r($row['Name']) ?></td>
        <td><?php print_r($row['Gender']) ?></td>
        <td><?php print_r($row['Year']) ?></td>
        <td><?php print_r($row['College']) ?></td>
        <td><?php print_r($row['Department']) ?></td>
        <td><?php print_r($row['Email']) ?></td>
        <td>
          <a href="reg_edit.php?id=<?php echo $row['Id']; ?>">edit</a>
          <a href="reg_delete.php?id=<?php print_r($row['Id']) ?>">Delete</a>
       </td>        
      </tr>
<?php } ?>
     
    </tbody>
  </table>
</div>

</body>
</html>

