<html>
    <head>
        <title> user login </title>
        <link rel = "stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> <!-- this link is to use the bootstarp-->
</head>
<body>
    <div class="container">
        <div class="login-box">
        <div class="row">
        <div class="col-md-6 login-left">
            <h2> LOGIN </h2>
            <!-- redirecting the page to validation.php page-->
            <form action="validation.php" method="post">
                <div class="form-group">
                    <label> Username</label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                    <label> Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">LOGIN</button>
            </form>
        </div>
        
</div>
</div>
</div>
</body>
</html>
<!-- Applying CSS on the login from-->
<style>
  body{
      background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(image.jpg);
      background-size: cover;
      background-position: center;
  }
  .login-box{
      max-width: 700px;
      float: none;
      margin: 200px;

  }
  
  .login-left{
     background: rgba(211,211,211,0.5);
     padding:30px;
  }
  
  .form-control{
      background-color: transparent !important;
  }
</style>
    


