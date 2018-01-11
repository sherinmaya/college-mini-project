<div class="col-sm-3 sidenav">
		<br>
		<br>
<?php
include('connect.php');
?>
<h4>PEEK ROOMS:</h4>
	<?php 
	$sql_query = mysqli_query($connection,"SELECT * from peekroom");
	
	while($row=mysqli_fetch_row($sql_query)){
		//print_r($row);
	?>
		<br>
		<br>

<div>
		<a href="sidenavdetail.php?peek_id=<?php echo $row[0]; ?>">
		<img src="<?php echo $row[2]; ?>" class="img-thumbnail" width="75%"></a>
		<div>Rs:<?php echo $row[3]; ?></div>
		<div class="col-sm-offset-6 col-sm-6 btnclrside">
		<a href="booknow.php" class="btn btn-default btnclrside1" type="button">Book Now</a>
		<br>
		<br>
		</div>
</div>
 <?php } ?>
 </div>