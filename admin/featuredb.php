<?php 

include('connect.php');
//print_r($_POST);
$Features = $_POST['feature'];
$sql = "INSERT INTO features (feature_name)VALUES ('$Features')";
 $result = mysqli_query($connection,$sql);
 if($result){
	header("Location: featurelist.php");
 }else{
	
	 echo "error";
 }

?>