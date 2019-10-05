<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sindhuja";
$conn =  mysqli_connect('localhost', 'root', '', 'sindhuja');
$id=$_GET['id'];
$sql = "select * from registration WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>

<html>
<html lang="en">
<head>
  <title>Example</title>
  <table class="table table-dark">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <body>
      <div class="container">
         <h1>information</h1>
         <form action="reg_update.php?id=<?php echo $id?>" method="POST">
               <input type="hidden"  class="form-control" name="id" value="<?php print_r($row['id']) ?>">
            <div class="form-group">     
               <label for="name">Name:</label>
               <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php print_r($row['Name']) ?>">
            </div>
           <div class="form-group">
              <label for="gender">Gender:</label>
              <input type="radio" name="gender" value="male" <?php echo ($row['Gender'] == 'male') ?  "checked" : "" ;  ?>>male
              <input type="radio" name="gender" value="female" <?php echo ($row['Gender'] == 'female') ?  "checked" : "" ;  ?>>female
           </div>
           <div class="form-group">
              <label for="year">Year:</label>
              <input type="text" class="form-control" id="year" placeholder="Enter year" name="year" value="<?php print_r($row['Year']) ?>">
           </div>
           <div class="form-group">
              <label for="college">College:</label>
              <input type="text" class="form-control" id="college" placeholder="Enter college" name="college" value="<?php print_r($row['College']) ?>">
           </div>
           <div class="form-group">
              <select name="department" class="form-control">
                <option value="ece"<?=$row['Department'] == 'ece' ? ' selected="selected"' : '';?>>Ece</option>
                <option value="cse"<?=$row['Department'] == 'cse' ? ' selected="selected"' : '';?>>Cse</option>
                <option value="agree"<?=$row['Department'] == 'agree' ? ' selected="selected"' : '';?>>Agree</option>
                <option value="civil"<?=$row['Department'] == 'civil' ? ' selected="selected"' : '';?>>Civil</option>
              </select>
           </div>
           <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php print_r($row['Email']) ?>" >
           </div>            
            <input type="submit">
         </form>

      </div>
   </body>
</html>