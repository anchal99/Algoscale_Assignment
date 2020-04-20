<html>
    <head>
        <title> registration</title>
        <link rel = "stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> <!-- Link to use bootstrap-->
</head>
<body>
    <div class="container">
        <div class="login-box">
        <div class="row">
        <div class="col-md-6 login-right">
            <h2> SIGN UP </h2>
            <!-- Redirecting to registration.php page-->
            <form action="registration.php" method="post">
                <div class="form-group">
                    <label> Username</label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                    <label> Email </label>
                    <input type="email" name="email" class="form-control" required>
                </div>
               
                <div class="form-group">
                    <label> Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

    
</br>
                <!--Submit button to complete the signup process .It will take you to login page so that you can login to go
                 to the profile page-->
                <button type="submit" class="btn btn-primary">SIGN UP</button>
            </form>
            </div>
</div>
</div>
</div>
</body>
</html>
<!--Applying CSS on the signup page--> 
<style>
  body{
      background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(image.jpg);
      background-size: cover;
      background-position: center;
  }
  .login-box{
      max-width: 700px;
      float: none;
      margin: 150px;
  }
  
  .login-right{
     background: #fff;
     padding: 30px;
  }
  .form-control{
      background-color: transparent !important;
  }
</style>
    


