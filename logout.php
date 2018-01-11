<?php 
session_start(); 

	//if a email id is did not login 
	$_SESSION['login_user'] = '';
	header("Location:index.php");
  
?>