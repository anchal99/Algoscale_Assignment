<?php
$con = mysqli_connect("localhost","root");
//makesure we connected successfully
if(mysqli_connect_errno())
{
    echo "connection failed:".mysqli_connect_error;
}
else{
    echo" Connection Status: Connected Successfully";
}
$name=$_POST['usrname'];
$q="DELETE FROM signin where username='$name'";
$result=mysqli_query($con,$q);
header('location:profile.php');
echo "$name";
?>