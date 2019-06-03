<?php
$host="localhost";
$user="root";
$pass="XXXXXXX";
$db="newDB";

$conn= new mysqli($host,$user,$pass,$db);

if($conn->connect_error){   // never miss dollar sign with conn here
	die("Connection Failed");

}
else{
	echo "\r \nconnection established \r \n";
}
$auth_username=$_POST["username"];  // extract the username from the post request sent from the form created for input
$auth_password=$_POST["password"]; // extract the password from the post request send form the form careted for iput
$sql="select * from STUDENTS where firstname='$auth_username' and lastname='$auth_password'";
$result = $conn->query($sql);		
if ($result->num_rows > 0){		// if there is an entry then number of rows will always be greater than 0
	echo " \r\n User Verified and Access Granted \r\n"; // if there is a row then there is an entry thus user verified
}
else{
	die("Denied Access");
}
?>
