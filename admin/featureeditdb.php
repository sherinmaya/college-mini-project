<?php 

include('connect.php');
//print_r($_POST);
$feature_id=$_GET['feature_id'];
$Features = $_POST['feature'];
echo $sql = "UPDATE features SET feature_name='$Features' where feature_id=$feature_id";
 $result = mysqli_query($connection,$sql);
 if($result){
	header("Location: featurelist.php");
 }

?>

