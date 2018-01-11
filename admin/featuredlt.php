<?php 

include('connect.php');
//print_r($_POST);
$feature_id=$_GET['feature_id'];
$sql = "DELETE FROM features where feature_id=".$feature_id;
if (mysqli_query($connection, $sql)) {
	Header("Location:featurelist.php");
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
?>

