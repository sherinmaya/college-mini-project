  <?php
include('connect.php');
$id=$_GET['id'];
$sql = "DELETE FROM booking where id=".$id;
if (mysqli_query($connection, $sql)) {
	Header("Location:roombookinglist.php");
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
?>




