<?php
$connection = mysqli_connect('localhost','easyfood_paullete','easyfoods$Ramona','easyfood_grocery');
if(!$connection){
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>
