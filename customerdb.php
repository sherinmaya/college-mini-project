<?php 

include('connect.php');
//print_r($_POST);
$Name = $_POST['name'];
$Address = $_POST['address'];
$City = $_POST['city'];
$State = $_POST['state'];
$Country = $_POST['country'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Phone = $_POST['phone'];
$sql = "INSERT INTO customer (Cust_Name,Address,City,State,Country,Email,Password,Phone)VALUES ('$Name','$Address','$City','$State','$Country','$Email','$Password','$Phone')";

 $result = mysqli_query($connection,$sql);
 if($result){
	header("Location: customerlist.php");
 }else{
	
	 echo "error";
 }

?>