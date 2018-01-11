<?php 

include('connect.php');
//print_r($_POST);
$Room_No = $_POST['room_no'];
	//$Room_Picture = $_POST['room_picture'];
$Floor = $_POST['floor'];
$People = $_POST['people'];
$Rating = $_POST['rating'];
$Room_Type = $_POST['room_type'];
$Room_Available ="yes"; //$_POST['room_availabe'];
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

$sql = "INSERT INTO rooms (Room_No,Room_Picture,Floor,People,Rating,Room_Type,Room_Available,description,Features)VALUES ('$Room_No','$target_file',
'$Floor','$People','$Rating','$Room_Type','$Room_Available','$Description','$Features')";

 $result = mysqli_query($connection,$sql);
 if($result){
	header("Location: roomlisting.php");
 }else{
	
	 echo "error";
 }


?>