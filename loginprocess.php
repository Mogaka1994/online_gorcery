<?php 
session_start();
require_once 'config/connect.php'; 
if(isset($_POST) & !empty($_POST)){
	$email    = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$password = md5($_POST['password']);
	$sql    = "SELECT * FROM users WHERE email='$email'";
	file_put_contents("log.txt","$sql"."\n",FILE_APPEND);
	$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	$count  = mysqli_num_rows($result);
	$row    = mysqli_fetch_assoc($result);
	$rs     = $row['password'];
		if($count == 1){
		if($password == $row['password']){
			//echo "User exits, create session";
			$_SESSION['customer']   = $email;
			$_SESSION['customerid'] = $row['id'];
			header("location: checkout.php");
		}else{
			//$fmsg = "Invalid Login Credentials";
			header("location: login.php?message=1");
		}
	}else{
		header("location: login.php?message=1");
	}
}
?>
