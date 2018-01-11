<?php 

include('header.php');
?>
<form method="POST" action="customerdb.php">  
<div style="border: 2px solid blue" class="container">
<div class="row">
<h2>Customer Details</h2>
</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3" >Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="name" required>
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">Address</label>
	  <div class="col-sm-6">
      <input type="text" class="form-control" name="address" required>
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">City</label>
	  <div class="col-sm-6">
      <input type="text" class="form-control" name="city" required>
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">State</label>
	  <div class="col-sm-6">
      <input type="text" class="form-control" name="state" required>
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">Country</label>
	  <div class="col-sm-6">
      <input type="text" class="form-control" name="country" required>
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3" >Email</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" placeholder="Enter email" name="email" required>
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" placeholder="Password" name="password" required>
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">Phone</label>
	  <div class="col-sm-6">
      <input type="text" class="form-control" placeholder="Phone" name="phone" required>
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
