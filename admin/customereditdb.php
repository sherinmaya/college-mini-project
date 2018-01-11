<?php 

include('connect.php');
//print_r($_POST);
echo $Cust_Id=$_GET['Cust_Id'];
$Name = $_POST['name'];
$Address = $_POST['address'];
$City = $_POST['city'];
$State = $_POST['state'];
$Country = $_POST['country'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Phone = $_POST['phone'];
echo $sql = "UPDATE customer SET Cust_Name='$Name',Address='$Address',City='$City',State='$State',Country='$Country',
Email='$Email',Password='$Password',Phone='$Phone' where Cust_Id=$Cust_Id";

 $result = mysqli_query($connection,$sql);
 if($result){
	header("Location: customerlist.php");
 }
?>