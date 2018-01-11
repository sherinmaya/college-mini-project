<?php
include('connect.php');
include('headertemp.php');
$Room_Id=$_GET['Room_Id'];
$sql = "SELECT * FROM rooms where Room_Id=$Room_Id";
  
  $rowdata = mysqli_query($connection, $sql);
  ?>
  
<div class="container">    
  <div class="row content">
	
    <div class="col-sm-9 col-xs-12">
		<?php 

	while($row=mysqli_fetch_row($rowdata)) {
		//print_r($row);
	?>
	<div class="row content">
	<div class="col-sm-12 col-xs-12">
  <h2 style="text-align:center">Room Details</h2>
  <hr class="soft"/>
    <div class="row" style="text-align:center ">

<img class="img-thumbnail" width="500px" height="500px" src="<?php echo $row[2]; ?>" alt="11">	  

				</div>
				<div class="">
				<h5 style="text-align:center;font-size:25px">Description</h5>
				<p style="font-size:17px"><?php echo $row[8]; ?></p>	
<br>
<h5 style="text-align:center;font-size:20px">Features:
	<?php
$sql_query1 = mysqli_query($connection,"SELECT * from features where feature_id in ($row[9])");
while($row1=mysqli_fetch_row($sql_query1)){ 
	
		echo $row1[1].","; 
}
?>
			</h5>	
<br>				
<div class="col-sm-offset-6">
	<label class="control-label"><span style="font-size:20px">RS:<?php echo $row[5]; ?></span></label>
</div>		
<div class="col-sm-offset-6 btnclrside">

<a href="roombookingdetail.php?Room_Id=<?php echo $row[0]; ?>" class="btn btn-default btnclrside1" type="button">Reserve</a>
</div>
						

	</div>
	</div>
	</div>
 <?php } ?>
	</div>		
  

<?php 
include('sidenav.php');
?>

</div>
</div>

<?php 
include('footer.php');
?>