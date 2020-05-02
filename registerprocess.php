<?php 
session_start();
ini_set('display_errors', 'On');
error_reporting(E_ERROR);
require_once 'config/connect.php'; 
if(isset($_POST) & !empty($_POST)){

	$email     = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$password  = md5($_POST['password']);
	//$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$sql    = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
	file_put_contents("log.txt","$sql"."\n",FILE_APPEND);
	$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	if($result){
		$_SESSION['customer']   = $email;
		$_SESSION['customerid'] = mysqli_insert_id($connection);
		file_put_contents("log.txt","$password"."\n",FILE_APPEND);
		file_put_contents("log.txt","$sql"."\n",FILE_APPEND);
		header("location: checkout.php");
	}else{
		header("location: login.php?message=2");
	}
}

?>
