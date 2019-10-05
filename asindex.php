
<html>
<html lang="en">
<head>
  <title>Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
   <body>
      <div class="container">
         <h1>information</h1>
         <table class="table table-dark"> 
         <form action="insert1.php" method="POST">
            <div class="form-group">     
               <label for="firstname">Firstname:</label>
               <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname" >
            </div>
            <div class="form-group">
              <label for="lastname">  Lastname:</label>
              <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname" >
           </div>
           <div class="form-group">
              <label for="gender">Gender:</label>
              <input type="radio" name="gender" value="male">male
              <input type="radio" name="gender" value="female">female
           </div>
           <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" >
           </div>
           <div class="form-group">
           <select name="language"  class="form-control">
            <option> value=</option>
           </select>
            </div>
            <input type="submit">
         </form>

      </div>
   </body>
</html> 