<?php
$host="localhost";
$username="root";
$password="XXXXXXXXXX";

//create a connection 
$conn= new mysqli($host,$username,$password);

//check the established connection

if($conn->connect_error){
	die("conncetion failed ". $conn->connect_error);

}
echo "Connection established";
?>
