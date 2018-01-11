<?php
include('connect.php');
//print_r($_POST);
$User_name = $_POST['User_Name'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Role = $_POST['Role'];
$Phone_Num = $_POST['Phone_Number'];

echo $sql = "INSERT INTO users (User_Name,Email,Password,Role,Phone_Number) VALUES ('$User_name','$Email','$Password','$Role','$Phone_Num')";

 $result = mysqli_query($connection,$sql);
 if($result){
	 Header("Location:index.php");
 }else{
	
	// echo "error";
 }
?>
