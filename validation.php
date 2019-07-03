<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'user-registration'); //conectiong to db
$name=$_POST['user'];
$pass=$_POST['password'];
$s="select * from usertable where name = '$name' && password ='$pass'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
//check if userame already exists
if($num==1){
    $_SESSION['username']=$name;
    header('location:home.php');
}
else {
    $message = "Incorrect Username or Password";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>