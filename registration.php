<?php
$db_username = '';
$db_password = '';
$db_name = '';
$db_host = '';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);

$name="{$_POST['user']}";
$pass="{$_POST['password']}";
$ar=$mysqli->query("SELECT * from users WHERE username = '$name'");
if($ar->num_rows) {
    $message = "User already exists.";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
else {
    $iq=$mysqli->prepare("INSERT INTO users (username, passcode) VALUES(?,?)");
    $iq->bind_param('ss', $name, $hashed_password);
    $iq->execute();
    header('location:login.php');
}
?>
