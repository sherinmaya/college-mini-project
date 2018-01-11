<?php 
include('connect.php');
include('headertemp.php');
?>
<div class="container">    
  <div class="row content">
	<?php
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page = 1;
	}
	if($page == '' || $page == 1){
		$page1 = 0;
	}else{
		$page1 = ($page*4)-8;
	}
	
	$sql_query = mysqli_query($connection,'SELECT * from rooms ORDER BY Room_Id Asc LIMIT '.$page1.',8'); 	
?>
	
    <div class="col-sm-9">
	<!--fetch a room data dinamically-->
	<?php 
	$sql_query = mysqli_query($connection,"SELECT * from rooms");
	
	while($row=mysqli_fetch_row($sql_query)){
		//print_r($row);
	?>
		<!-- List block start here -->
		 <div class="row content">
			  <div class="col-sm-4">   
			  <a href="roomdetail.php?Room_Id=<?php echo $row[0]; ?>">
				<img src="<?php echo $row[2]; ?>" class="img-thumbnail" alt="1"></a>
			  </div>   
			<div class="col-sm-5">
				<div class="col-sm-12">
				<a href="roomdetail.php?Room_Id=<?php echo $row[0]; ?>">
				<h4><?php echo $row[6]; ?></h4></a>
				<p>
			<?php echo $row[8]; ?>
				</p></div>
				<h3 style="text-align:center;font-size:17px">Features:
	<?php
	//fetch a single column from another table
$sql_query1 = mysqli_query($connection,"SELECT * from features where feature_id in ($row[9])");
while($row1=mysqli_fetch_row($sql_query1)){ 
	
		echo $row1[1].","; 
}
?>
			</h3>	
<br>
			</div>
			<div class="col-sm-3 btnclr1">
				<div>Rs : <?php echo  $row[5]; ?></div>
				<a href="booknow.php" class="btn btn-success btnclr" type="button">Book Now</a>
			</div>		
		</div>
		<br/>
	 <?php } ?>
		<!-- list block end here -->
	</div>
		
		
		
<?php 
include('sidenav.php')
?>

</div>
</div>

<div class="container">
<div class="row ">
<div class="col-sm-3 col-md-3 col-lg-3"> 
</div>
<div class="col-sm-9 col-md-9 col-lg-9">  

	<?php
	//pagination
	$sql_query = mysqli_query($connection,'SELECT * from rooms');
    $records = $sql_query->num_rows;
    $records_pages = $records/4;
	$records_pages = ceil($records_pages);
	$prev = $page-1;
	$next = $page+1;
	echo '<ul style="list-style:none;font-size:20px;">';
	
	if($prev >=1){
		echo '<li style="display:inline-block;"><a href="rooms.php?page='.$prev.'">prev</a><li>';
	}
	
	if($records_pages >= 2){
		for($r=1; $r <= $records_pages; $r++){
			$active = $r == $page ? 'class="active"' : '';
			echo '<li style="display:inline-block;padding-left:20px;"><a href="index.php?page='.$r.'">'.$r.'</a></li>';
		}
	}
	if($next <= $records_pages && $records_pages >= 2){
		echo '<li style="display:inline-block;padding-left:20px;"><a href="?page='.$next.'">Next</a><li>';
	}	
	
	echo '</ul>';
	
	
	?>
	
 </div>  
</div>
 </div>	

<?php 
include('footer.php')
?>