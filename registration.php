<?php
//this file is to register the user take to the login page
session_start();
header('location:login.php');
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'assignment');
$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];

echo "hello";
$q="select * from signin where user = '$name' && password = '$pass'";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num==1){
    echo "already registered";
}
else{
    $qy="insert into signin(name,password,email) values ('$name','$pass',$email)";
    mysqli_query($con,$qy);
}
?>