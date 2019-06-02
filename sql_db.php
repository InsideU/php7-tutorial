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
//create database
else{
	echo "conncetion established";

}
$sql="CREATE DATABASE akshat";
if($conn->query($sql)===TRUE){
	echo "Database created successfully";
}
else{
	echo "unable to create database";
}
























