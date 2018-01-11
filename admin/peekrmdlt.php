  <?php
include('connect.php');
$peek_id=$_GET['peek_id'];
$sql = "DELETE FROM peekroom where peek_id=".$peek_id;
if (mysqli_query($connection, $sql)) {
	Header("Location:peekrmlist.php");
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
?>




