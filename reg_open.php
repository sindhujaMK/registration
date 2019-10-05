<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h1>BIO_DATA</h1>
  <form action="">
  	<div class="form-group">
      <label for="Name">Name:</label>
      <input type="Name" class="form-control" id="Name" placeholder="Enter Name" name="Name">
    </div>
    <div class="form-group">
         <label for="gender">Gender:</label>
         <input type="radio" name="gender" value="male">male
         <input type="radio" name="gender" value="female">female
     </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div> 
    <div class="form-group">
    	<label for="Bloodgroup">Bloodgroup:</label>
        <select name="Bloodgroup" class="form-control">
            <option value="A+"<?=$row['Bloodgroup'] == 'A+' ? ' selected="selected"' : '';?>>A+</option>
            <option value="B+"<?=$row['Bloodgroup'] == 'B+' ? ' selected="selected"' : '';?>>B+</option>
            <option value="O+"<?=$row['Bloodgroup'] == 'O+' ? ' selected="selected"' : '';?>>O+</option>
            <option value="AB-"<?=$row['Bloodgroup'] == 'AB-' ? ' selected="selected"' : '';?>>AB-</option>
        </select>
     </div>
    <div class="form-group">
        <label for="Food">Food:</label>			
			<input type="checkbox" name="check_list[]" value="icecream"><label>icecream</label><br/>
			<input type="checkbox" name="check_list[]" value="choculates"><label>choculates</label><br/>
			<input type="checkbox" name="check_list[]" value="biscuits"><label>biscuits</label><br/>
			<input type="checkbox" name="check_list[]" value="coffee"><label>coffee</label><br/>
<?php
if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){
echo $selected."</br>";
}
}
}
?>
</div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>

