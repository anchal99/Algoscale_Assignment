<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:signup.php');
}

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "assignment";
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query="SELECT * FROM signin";
$result1 = mysqli_query($connect,$query);

?>

<!Doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap.css">
        <meta charset=UTF-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <div class="container">
        <div class="welcome">
        <h2 class="text-center text-success"> Welcome <?php echo $_SESSION['username']; ?>  </h2>
        </div>
        <ul>
        <li><a href="logout.php"> Logout </a></li>
          <li><a>Existing User ID</a>
           <ul>
            <?php while($row = mysqli_fetch_array($result1)):;?>
            <li><a><?php echo $row[1];?> <button href="delete.php?"> DELETE </button> </a></li>
            <?php endwhile;?>
           </ul> 
           </li>
          
        </ul> 
</div>
</body>
</html>  
<style>
    body{
      background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(image.jpg);
      background-size: cover;
      background-position: center;
      font-family: Arial;
      color: white;
  }
  .welcome{
      text-align: center;
      margin-top:150px
  }
 ul{
     margin:0px;
     padding: 0px;
     list-style:none;
 }
 ul li{
     float: right;
     margin-top:0px;
     width: 200px;
     height:50px;
     background-color:black;
     opacity: .8;
     line-height: 40px;
     text-align:center;
     font-size:20px;
 }
 ul li a{
color:white;
display:block;
opacity:.8;
 }
ul li a:hover{
    background-color:green;

}
ul li ul li{
    display:none;
}
ul li:hover ul li{
    display:block;
    background-color:black;

}
</style>        

