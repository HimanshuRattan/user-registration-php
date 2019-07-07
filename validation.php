<?php
session_start();
$db_username = 'epiz_24113595';
$db_password = 'Lam6azQtxB7X';
$db_name = 'epiz_24113595_registration';
$db_host = 'sql108.epizy.com';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);

$name="{$_POST['user']}";
$pass="{$_POST['password']}";
$ar=$mysqli->query("SELECT * from users WHERE username = '$name'");
if($ar->num_rows) {
    // $result = $mysqli->query("SELECT * FROM users WHERE username = '$name'");
    $row= mysqli_fetch_array( $ar);
    if(password_verify($pass, $row['passcode'])) {
     $_SESSION['username']=$name;
    header('location:home.php');
    }
    else {
        $message = "Incorrect Password";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
else {
   $message = "Incorrect Username or Password";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
