<html>
<html lang="en">
<head>
  <title>Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <body>
      <div class="container">
         <h1>information</h1>
         <table class="table table-dark"> 
         <form action="reg_insert.php" method="POST">
            <div class="form-group">     
               <label for="name">Name:</label>
               <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" >
            </div>
           <div class="form-group">
              <label for="gender">Gender:</label>
              <input type="radio" name="gender" value="male">male
              <input type="radio" name="gender" value="female">female
           </div>
           <div class="form-group">
              <label for="year">Year:</label>
              <input type="text" class="form-control" id="year" placeholder="Enter year" name="year" >
           </div>
           <div class="form-group">
              <label for="college">College:</label>
              <input type="text" class="form-control" id="college" placeholder="Enter college" name="college" >
           </div>
            <div class="form-group">
              <select name="department"  class="form-control">
               <option value="ece" >Ece</option>
               <option value="cse">Cse</option>
               <option value="agree">Agree</option>
               <option value="civil">Civil</option>  
            </select>
           </div>
           <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" >
           </div>
            <input type="submit">
         </form>

      </div>
   </body>
</html>