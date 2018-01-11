  <?php
include('connect.php');
$Room_Id=$_GET['Room_Id'];
$sql = "DELETE FROM rooms where Room_Id=".$Room_Id;
if (mysqli_query($connection, $sql)) {
	Header("Location:roomlisting.php");
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
?>




