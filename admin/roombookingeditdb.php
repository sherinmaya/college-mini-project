<?php 

include('connect.php');
//print_r($_POST);
echo $id=$_GET['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$Number_Of_Adult = $_POST['adult'];
$Number_Of_Children = $_POST['children'];
$Check_In = $_POST['in'];
$Check_Out=$_POST['out'];
echo $sql = "UPDATE booking SET name='$name',email='$email',adult='$Number_Of_Adult',children='$Number_Of_Children',check_in='$Check_In',check_out='$Check_Out' where id=$id";

 $result = mysqli_query($connection,$sql);
 if($result){
	header("Location: roombookinglist.php");
 }

?>



