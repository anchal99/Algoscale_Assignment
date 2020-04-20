<?php
//php code for the validation of username and password
session_start();
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'assignment');
$name = $_POST['user'];
$pass = $_POST['password'];

$q="select * from signin where name = '$name' && password = '$pass'";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
//if the user id exists then it will take you to the profile page othherwise to the signup page
if($num==1){
    $_SESSION['username']=$name;
    header('location:profile.php');
}
else{
    echo "incorrect username or password";
    header('location:signup.php');
}
?>