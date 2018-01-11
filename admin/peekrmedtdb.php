<?php 
include('connect.php');
echo $peek_id=$_GET['peek_id'];
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

	
echo $sql = "UPDATE peekroom SET Room_No='$Room_No',Room_Picture='$target_file',Rating='$Rating',description='$Description',
Features='$Features' where peek_id=$peek_id";
 $result = mysqli_query($connection,$sql);
 //print_r($result);
 if($result){
	header("Location: peekrmlist.php");
 }
?>
