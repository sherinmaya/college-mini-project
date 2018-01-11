<?php 

include('connect.php');
//print_r($_POST);
$Room_No = $_POST['room_no'];
	//$Room_Picture = $_POST['room_picture'];
$Rating = $_POST['rating'];
$Description =$_POST['description'];
$Features = $_POST['features'];
$Features = implode(",",$Features);

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["imageUpload"]["name"]). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";}

$sql = "INSERT INTO peekroom (Room_No,Room_Picture,Rating,description,Features)VALUES ('$Room_No','$target_file',
'$Rating','$Description','$Features')";

 $result = mysqli_query($connection,$sql);
 if($result){
	header("Location: peekrmlist.php");
 }else{
	
	 echo "error";
 }


?>