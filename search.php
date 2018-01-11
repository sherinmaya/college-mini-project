<?php 
include('connect.php');
include('headertemp.php');
?>	
	
	
	<!-- search start here -->
<div class="container">    
  <div class="row">
	<form action="search.php" method="GET" enctype="multipart/form-data">

    <div class="col-sm-9 col-md- col-lg- search12"> 
	 <input type="text" class="form-control search1"  name="user_query" placeholder="search"   />	  
    </div>
    <div class="col-sm-1 col-md- col-lg-" > 
	<input type="submit" name="search" class="btn btn-primary" value="GO">
	 <!-- <button type="submit" class="btn btn-primary" >GO</button>!-->
    </div>
  </form>
 </div>
</div>
	<!-- search end here -->


<?php 
if(isset($_GET['search'])){
	$user_keyword = $_GET['user_query'];
	$get_products = "select * FROM rooms WHERE Room_Type like '%$user_keyword%'";
	
	$run_products = mysqli_query($connection, $get_products);
	while ($row_products=mysqli_fetch_array($run_products)){
		$Room_Id = $row_products['Room_Id'];
		$Room_Type = $row_products['Room_Type'];
		$target_file = $row_products['Room_Picture'];
		$description = $row_products['description'];
		$Rating = $row_products['Rating'];
		$Features = $row_products['Features'];
//print_r($run_products);	
		echo "<h3>$Room_Type</h3>
		<hr class='soft'/>
		<img  src=\"". $target_file . "\" style='width:25%'/>
		<h5>$description</h5>		
		<h3>Rs:$Rating</h3> ";
	}
}
  else{
	  echo "no records found";
  }
?>

