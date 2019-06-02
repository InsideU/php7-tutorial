// establishing a connection with the sql server 

<?php
$host="localhost";
$username="root";
$password="XXXXXXXXXX";

//create a connection 
$conn= new mysqli($host,$username,$password);

//check the established connection

if($conn->connect_error){
	die("conncetion failed ". $conn->connect_error);  // if not established kill the connetion with the error message

}
echo "Connection established";   // if established display the message theat connection is established
?>
