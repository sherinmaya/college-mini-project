<?php
include('connect.php');
include('headertemp.php');
$peek_id=$_GET['peek_id'];
$sql = "SELECT * FROM peekroom where peek_id=$peek_id";
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
  <h2 style="text-align:center">Peek Room Details</h2>
  <hr class="soft"/>
    <div class="row" style="text-align:center ">

<img src="<?php echo $row[2]; ?>" class="img-thumbnail" width="50%">  

				</div>
				<div class="">
				<h5 style="text-align:center;font-size:25px">Description</h5>
				<p style="font-size:17px"><?php echo $row[4]; ?></p>	
<br>				
<div class="col-sm-offset-6">
	<label class="control-label"><span style="font-size:20px">RS:<?php echo $row[3]; ?></span></label>
</div>		
<div class="col-sm-offset-6 btnclrside">
<?php echo '<form method="POST" Action="roombookingdetail.php?Room_Id='.$row[0].'">' ?>
<button type="submit" class="btn btn-default btnclrside1" type="button">Reserve</button>
</div>
						
</form>					

	</div>
	</div>
	</div>
 <?php } ?>
	</div>		
  

</div>
</div>

<?php 
include('footer.php');
?>