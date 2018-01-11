<?php 

include('connect.php');
include('header.php');
$sql_query = mysqli_query($connection,"SELECT * from customer");

?>
 <div class="table-responsive">
    <table class="table" border=" 2px solid blue">
	 <thead>
	  <tr>
	   <th>Cust_Name</th>
	   <th>Address</th>
	   <th>City</th>
	   <th>State</th>
	   <th>Country</th>
	   <th>Email</th>
	   <th>Password</th>
	   <th>Phone</th>
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
		echo"<td>".$row[8]."</td>";
		echo '<td><button type="button" class="btn btn-primary"><a  href="customerdlt.php?Cust_Id='.$row[0].'" style="color:#fff;">DELETE</a></button>
		<button type="button" class="btn btn-primary"><a  href="customeredit.php?Cust_Id='.$row[0].'" style="color:#fff;">EDIT</a></button>
			</td>';
		echo"</tr>";
	}
	?>
	<a href="customer.php" class="btn btn-primary btn-md" type="button">Add customer</a>
	</tbody>
	</table>
</div>	



   