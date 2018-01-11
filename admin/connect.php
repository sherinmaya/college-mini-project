<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "hotel room booking system";
//class_name=new object_name
$connection = new mysqli($server,$user,$password,$dbname);

if($connection->connect_error){
	echo "Sorry, DB connection error : ". $connection->connect_error;
}else{
	//echo "connection Sucess";
}

?>
