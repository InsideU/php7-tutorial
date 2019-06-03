<?php
$host="localhost";
$user="root";
$pass="iasumangsingh";
$db="newDB";

$conn= new mysqli($host,$user,$pass,$db);

if($conn->connect_error){   // never miss dollar sign with conn here
	die("Connection Failed");

}
else{
	echo "\r \nconnection established \r \n";
}
$auth_username=$_POST["username"];
$auth_password=$_POST["password"];
$sql="select * from STUDENTS where firstname='$auth_username' and lastname='$auth_password'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
	echo " \r\n User Verified and Access Granted \r\n";
}
else{
   echo	"\r\n Access Denied \r\n";
}
?>
