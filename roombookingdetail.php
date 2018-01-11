<?php
include('connect.php');
include('headertemp.php');
$Room_Id=$_GET['Room_Id'];
$sql = "SELECT * FROM rooms where Room_Id=$Room_Id";
  
  $rowdata = mysqli_query($connection, $sql);
  ?>
  
<div class="container">    
  <div class="row content">

		<?php 

	while($row=mysqli_fetch_row($rowdata)) {
		//print_r($row);
	?>
	<div class="row content">
  <h2 style="text-align:center">Room Details</h2>
  <hr class="soft"/>
    <div class="row" style="text-align:center ">

<img class="img-thumbnail" width="600px" height="600px" src="<?php echo $row[2]; ?>" alt="11">	  

				</div>
				<div class="row">
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
<?php echo '<form method="POST" Action="roombooking.php?Room_Id='.$row[0].'&Rating='.$row[5].'">' ?>
<div class="col-sm-offset-6 col-sm-3">
  <label class="control-label" style="font-size:20px">number of rooms:</label>
  <select class="form-control" aria-describedby="basic-addon1" name="no_rooms">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
  <option>8</option>
  </select>
<br>
</div>	
<br>
<br>
<div class="col-sm-3 btnclrside">
	<button type="submit" class="btn btn-default btnclrside1" type="button">Reserve</button>	
</div>
						
	</div>
	</div>
 <?php } ?>

</div>
</div>
<br>
<?php 
include('footer.php');
?>