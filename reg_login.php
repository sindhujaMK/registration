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
         <form action="logincheck.php" method="POST">
          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" >
           </div>
           <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" >
           </div>
           <input type="submit">
         </form>

      </div>
   </body>
</html>