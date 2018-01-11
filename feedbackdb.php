<?php 

include('connect.php');
//print_r($_POST);
$Name = $_POST['name'];
$Email = $_POST['email'];

if(isset($_POST['comments'])){
$Comments = $_POST['comments'];
}else{
$Comments = "no comments";	
}
$Rating = $_POST['rating'];
echo $sql = "INSERT INTO feedback (Name,Email_Id,Comments,Rating)VALUES ('$Name','$Email','$Comments','$Rating')";

 $result = mysqli_query($connection,$sql);
 if($result){
	header("Location: feedbacklist.php");
 }else{
	
	 echo "error";
 }


?>