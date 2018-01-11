<?php 

include('connect.php');
include('header.php');
$sql_query = mysqli_query($connection,"SELECT * from peekroom");

?>

 <div class="table-responsive">
    <table class="table" border=" 2px solid blue">
	 <thead>
	  <tr>
	   <th>Room_No</th>
	   <th>Room_Picture</th>
	   <th>Rating</th>
	   <th>description</th>
	   <th>Features</th>
	   <th>modify</th>
	  </tr>
	 </thead>
	 <tbody>
	<?php
	while($row=mysqli_fetch_row($sql_query)){
		echo"<tr>";
		echo"<td>".$row[1]."</td>";
		echo"<td><img src='".$row[2]."' style='width:100px;height:100px'/></td>";
		echo"<td>".$row[3]."</td>";
		echo"<td>".$row[4]."</td>";
		echo"<td>".$row[5]."</td>";
		/*$sql_query = mysqli_query($connection,"SELECT feature_id,feature_name from features where feature_id=$feature_id");
		$feature_row = mysqli_fetch_row($sql_query);*/
		echo '<td><button type="button" class="btn btn-primary"><a  href="peekrmdlt.php?peek_id='.$row[0].'" style="color:#fff;">DELETE</a></button>
		          <button type="button" class="btn btn-primary"><a  href="peekrmedit.php?peek_id='.$row[0].'"  style="color:#fff;">EDIT</a></button>
			</td>';
		echo"</tr>";
	}
	?>
	<a href="peekroom.php" class="btn btn-primary btn-md" type="button">Add Room</a>
	</tbody>
	</table>

</div>	
