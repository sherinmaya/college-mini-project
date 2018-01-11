<?php 

include('connect.php');
//print_r($_POST);
$Name = $_POST['name'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Confirm_Password = $_POST['cnfmpd'];
$Phone = $_POST['phone'];
echo $sql = "INSERT INTO signup (name,email,pswd,phone)VALUES ('$Name','$Email','$Password','$Phone')";

 $result = mysqli_query($connection,$sql);
 if($result){
	// echo "Data inserted Sucess...";
header("Location:sign.php");	
 }else{
	
	// echo "error";
	
 }


?>