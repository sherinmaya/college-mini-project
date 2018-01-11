<?php 
include('connect.php');
echo $Room_Id=$_GET['Room_Id'];
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

	
echo $sql = "UPDATE rooms SET Room_No='$Room_No',Room_Picture='$target_file',Floor='$Floor',People='$People',Rating='$Rating',
 Room_Type='$Room_Type',Room_Available='$Room_Available',description='$Description',Features='$Features' where Room_Id=$Room_Id";
 $result = mysqli_query($connection,$sql);
 //print_r($result);
 if($result){
	header("Location: roomlisting.php");
 }
?>
