<?php 

include('connect.php');
include('header.php');
$sql_query = mysqli_query($connection,"SELECT * from booking");

?>

 <div class="table-responsive">
    <table class="table" border=" 2px solid blue">
	 <thead>
	  <tr>
	   <th>name</th>
	   <th>email</th>
	   <th>Number_Of_Adult</th>
	   <th>Number_Of_Children</th>
	   <th>Check_In</th>
	   <th>Check_Out</th>
	   <th>modify</th>
	  </tr>
	 </thead>
	 <tbody>
	<?php
	while($row=mysqli_fetch_row($sql_query)){
		echo"<tr>";
		echo"<td>".$row[1]."</td>";
		echo"<td>".$row[2]."</td>";
		echo"<td>".$row[3]."</td>";
		echo"<td>".$row[4]."</td>";
		echo"<td>".$row[5]."</td>";
		echo"<td>".$row[6]."</td>";
		/*$sql_query = mysqli_query($connection,"SELECT feature_id,feature_name from features where feature_id=$feature_id");
		$feature_row = mysqli_fetch_row($sql_query);*/
		echo '<td><button type="button" class="btn btn-primary"><a  href="roombookingdlt.php?id='.$row[0].'" style="color:#fff;">DELETE</a></button>
		          <button type="button" class="btn btn-primary"><a  href="roombookingedit.php?id='.$row[0].'"  style="color:#fff;">EDIT</a></button>
			</td>';
		echo"</tr>";
	}
	?>
	<a href="" class="btn btn-primary btn-md" type="button">Add Room</a>
	</tbody>
	</table>

</div>	
