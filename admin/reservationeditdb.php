<?php 

include('connect.php');
//print_r($_POST);
echo $res_id=$_GET['res_id'];
$Name = $_POST['name'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$Room_Type = $_POST['type'];
$Capacity = $_POST['capacity'];
$Number_Of_Adult = $_POST['adult'];
$Number_Of_Children = $_POST['children'];
$Check_In = $_POST['in'];
$Check_Out=$_POST['out'];
$Total_Day=$_POST['days'];
$Additional_Bed=$_POST['bed'];
$Total_Amount=$_POST['amount'];

echo $sql = "UPDATE reservation SET name='$Name',email='$Email',phone='$Phone',room_type='$Room_Type',capacity='$Capacity',
adult='$Number_Of_Adult',children='$Number_Of_Children',check_in='$Check_In',check_out='$Check_Out',total_days='$Total_Day',
additional_bed='$Additional_Bed',total_amount='$Total_Amount' where res_id=$res_id";

 $result = mysqli_query($connection,$sql);
 if($result){
	header("Location: reservationlist.php");
 }

?>
