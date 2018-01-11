<?php 

include('connect.php');
include('header.php');
$sql_query = mysqli_query($connection,"SELECT * from reservation");

?>
 <div class="table-responsive">
    <table class="table" border=" 2px solid blue">
	 <thead>
	  <tr>
	   <th>name</th>
	   <th>email</th>
	   <th>phone</th>
	   <th>type</th>
	   <th>capacity</th>
	   <th>adult</th>
	   <th>children</th>
	   <th>in</th>
	   <th>out</th>
	   <th>days</th>
	   <th>bed</th>
	   <th>amount</th>
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
		echo"<td>".$row[7]."</td>";
		echo"<td>".$row[10]."</td>";
		echo"<td>".$row[11]."</td>";
		echo"<td>".$row[12]."</td>";
		echo"<td>".$row[13]."</td>";
		echo"<td>".$row[14]."</td>";
		echo '<td><button type="button" class="btn btn-primary"><a  href="reservationdlt.php?res_id='.$row[0].'" style="color:#fff;">DELETE</a></button>
		<button type="button" class="btn btn-primary"><a  href="reservationedit.php?res_id='.$row[0].'" style="color:#fff;">EDIT</a></button>
			</td>';
		echo"</tr>";
	}
	?>
	<a href="reservation.php" class="btn btn-primary btn-md" type="button">Add reservation</a>
	</tbody>
	</table>
</div>	



   