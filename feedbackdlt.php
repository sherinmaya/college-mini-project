<?php 

include('connect.php');
//print_r($_POST);
$id=$_GET['id'];
$sql = "DELETE FROM feedback where id=".$id;
if (mysqli_query($connection, $sql)) {
	Header("Location:feedbacklist.php");
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
?>

