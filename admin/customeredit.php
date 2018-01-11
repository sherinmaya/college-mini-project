<?php 
include('connect.php');
include('header.php');

$Cust_Id=$_GET['Cust_Id'];
$sql_query = mysqli_query($connection,"select * from customer where Cust_Id = $Cust_Id");
$rowdata = mysqli_fetch_row($sql_query);

//print_r($rowdata);
?>

<form method="POST" action="customereditdb.php?Cust_Id=<?php echo $Cust_Id;?>">  
<div style="border: 2px solid blue" class="container">
<div class="row">
<h2>Customer Details</h2>
</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3" >Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="name" required value="<?php echo $rowdata[1];?>"/>
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">Address</label>
	  <div class="col-sm-6">
      <input type="text" class="form-control" name="address" value="<?php echo $rowdata[2];?>" required>
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">City</label>
	  <div class="col-sm-6">
      <input type="text" class="form-control" name="city" required value="<?php echo $rowdata[3];?>"/>
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">State</label>
	  <div class="col-sm-6">
      <input type="text" class="form-control" name="state" required value="<?php echo $rowdata[4];?>"/>
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">Country</label>
	  <div class="col-sm-6">
      <input type="text" class="form-control" name="country" required value="<?php echo $rowdata[5];?>"/>
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3" >Email</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" placeholder="Enter email" name="email" required value="<?php echo $rowdata[6];?>"/>
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" placeholder="Password" name="password" required value="<?php echo $rowdata[7];?>"/>
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">Phone</label>
	  <div class="col-sm-6">
      <input type="text" class="form-control" placeholder="Phone" name="phone" required value="<?php echo $rowdata[8];?>"/>
    </div>
	</div>
<br>

<div class="row">
	<div class="col-sm-offset-10 col-sm-2">
<input type="submit" value="Log In" class="btn btn-primary">
	</div>
<br>
<br>
</div>
</form>
