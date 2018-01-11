<?php 

include('connect.php');
//print_r($_POST);
$id=$_GET['id'];
$Name = $_POST['name'];
$Email = $_POST['email'];

if(isset($_POST['comments'])){
$Comments = $_POST['comments'];
}else{
$Comments = "no comments";	
}
$Rating = $_POST['rating'];
echo $sql = "UPDATE feedback SET Name='$Name',Email_Id='$Email',Comments='$Comments',Rating='$Rating' where id=$id";
 $result = mysqli_query($connection,$sql);
 if($result){
	header("Location: feedbacklist.php");
 }


?>