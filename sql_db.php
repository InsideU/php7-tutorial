<?php
// creating a database after checking the valid connection through the sql server 

$host = "localhost";
$user = "root";
$pass = "XXXXXXXXXX";

//creating a connection 
$conn = new mysqli($host,$user,$pass);

if($conn->connect_error){
	die("Connection Failed" . $conn->connect_error);

}
//create database if the connection is established 
else{
	echo "conncetion established";

}
$sql="CREATE DATABASE newDB"; //creating a database named newDB(sql command)
if($conn->query($sql)===TRUE){
	echo "Database created successfully"; // echo if database created 
}
else{
	echo "unable to create database"; // if not throw an error message
}
























