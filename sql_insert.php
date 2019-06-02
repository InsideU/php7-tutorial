<?php 
$host="localhost";
$username="root";
$password="XXXXXXXX";
$db="newDB";

$conn=new mysqli($host,$username,$password,$db);

if($conn->connect_error){
	echo "Failed to connect";
}
else{
	echo "connection established";
}
$sql="INSERT INTO STUDENTS VALUES('Jason','Carter')";
if($conn->query($sql) === TRUE){
	echo "New record is created";
}
else{
	echo "Error creating a record";
}
$conn->close();
?>
