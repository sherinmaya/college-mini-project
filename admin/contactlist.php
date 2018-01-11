<?php 

include('connect.php');
include('index.php');
$sql_query = mysqli_query($connection,"SELECT * from contact");

?>
 <div class="table-responsive">
    <table class="table" border=" 2px solid blue">
	 <thead>
	  <tr>
	   <th>name</th>
	   <th>email</th>
	   <th>phone</th>
	   <th>subject</th>
	   <th>message</th>
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
		echo '<td><button type="button" class="btn btn-primary"><a  href="contactdlt.php?contact_id='.$row[0].'" style="color:#fff;">DELETE</a></button>
		<button type="button" class="btn btn-primary"><a  href="contactedit.php?contact_id='.$row[0].'" style="color:#fff;">EDIT</a></button>
			</td>';
		echo"</tr>";
	}
	?>
	<a href="contact.php" class="btn btn-primary btn-md" type="button">Add features</a>
	</tbody>
	</table>

</div>	


   