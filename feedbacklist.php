<?php 

include('connect.php');
include('index.php');
$sql_query = mysqli_query($connection,"SELECT * from feedback");

?>
 <div class="table-responsive">
    <table class="table" border=" 2px solid blue">
	 <thead>
	  <tr>
	   <th>Name</th>
	   <th>Email_Id</th>
	   <th>Comments</th>
	   <th>Rating</th>
	   <th>modify</th>
	  </tr>
	 </thead>
	 <tbody>
	<?php
	while($row=mysqli_fetch_row($sql_query)){
		echo"<tr>";
		echo"<td>".$row[2]."</td>";
		echo"<td>".$row[3]."</td>";
		echo"<td>".$row[4]."</td>";
		echo"<td>".$row[5]."</td>";
		echo '<td><button type="button" class="btn btn-primary"><a  href="feedbackdlt.php?id='.$row[0].'" style="color:#fff;">DELETE</a></button>
		<button type="button" class="btn btn-primary"><a  href="feedbackedit.php?id='.$row[0].'" style="color:#fff;">EDIT</a></button>
			</td>';
		echo"</tr>";
	}
	?>
	<a href="feedback.php" class="btn btn-primary btn-md" type="button">Add features</a>
	</tbody>
	</table>

</div>	


   