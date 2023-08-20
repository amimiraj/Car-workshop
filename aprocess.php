<?php
session_start();
require_once('db.php');

$email = $_POST['user_name'];
$password = $_POST['password'];


$sql = "SELECT * from `admin` WHERE user_name = '$email' AND password = '$password'";

$result = mysqli_query($conn, $sql);


if(mysqli_num_rows($result) == 1){

    $_SESSION['login']=TRUE;	
	header("Location:admin_dashboard.php");
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
?>