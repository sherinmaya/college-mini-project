<?php 
include('connect.php');
include('header.php');
//print_r($_POST);
$email = $_POST['email'];
$Password = $_POST['password'];
$sql = "select * from users where Email='$email' and Password='$Password'";

$result = mysqli_query($connection,$sql);
$data = mysqli_fetch_row($result);
  if($result->num_rows){
	// // echo "Data inserted Sucess...";
	$_SESSION['login_user'] = $data[0];
	//print_r($_SESSION);
	 header("Location:Admin/index.php");
  }else{
	
	 echo "Login failed please try with correct username and password";
  }
?>