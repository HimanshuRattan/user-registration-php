<?php
$db_username = 'epiz_24113595';
$db_password = 'Lam6azQtxB7X';
$db_name = 'epiz_24113595_registration';
$db_host = 'sql108.epizy.com';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);

$name="{$_POST['user']}";
$pass="{$_POST['password']}";
$ar=$mysqli->query("SELECT * from users WHERE username = '$name'");
if($ar->num_rows) {
    $message = "User Already exists.";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
else {
    $iq=$mysqli->prepare("INSERT INTO users (username, passcode) VALUES(?,?)");
    $iq->bind_param('ss', $name, $pass);
    $iq->execute();
    header('location:login.php');
}
?>
