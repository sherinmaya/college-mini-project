<?php
include('connect.php');
$Cust_Id=$_GET['Cust_Id'];
$sql = "DELETE FROM customer where Cust_Id=".$Cust_Id;
if (mysqli_query($connection, $sql)) {
	Header("Location:customerlist.php");
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
?>


