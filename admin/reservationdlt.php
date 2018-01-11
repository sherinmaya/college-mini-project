<?php
include('connect.php');
$res_id=$_GET['res_id'];
$sql = "DELETE FROM reservation where res_id=".$res_id;
if (mysqli_query($connection, $sql)) {
	Header("Location:reservationlist.php");
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
?>
