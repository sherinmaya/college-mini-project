<?php 

include('connect.php');
include('header.php');
$sql_query = mysqli_query($connection,"SELECT * from features");

?>
 <div class="table-responsive">
    <table class="table" border=" 2px solid blue">
	 <thead>
	  <tr>
	   <th>feature_name</th>
	   <th>modify</th>
	  </tr>
	 </thead>
	 <tbody>
	<?php
	while($row=mysqli_fetch_row($sql_query)){
		echo"<tr>";
		echo"<td>".$row[1]."</td>";
		echo '<td><button type="button" class="btn btn-primary"><a  href="featuredlt.php?feature_id='.$row[0].'" style="color:#fff;">DELETE</a></button>
				  <button type="button" class="btn btn-primary"><a  href="featureedit.php?feature_id='.$row[0].'" style="color:#fff;">EDIT</a></button>
			</td>';
		echo"</tr>";
	}
	?>
	<a href="feature.php" class="btn btn-primary btn-md" type="button">Add features</a>
	</tbody>
	</table>

</div>	


   