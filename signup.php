<?php 
include('connect.php');
include('header.php');
?>
<form method="POST" action="signupdb.php">  
<div style="border: 3px solid black;width:40%;background:#00afef;color:white;text-align:center;" class="container">
<div align="center">
 <h1 align="center">Sign Up</h1>
<hr>
<br>
 <div class="row">
    <label class="control-label col-sm-3">Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" placeholder="name" name="name" required>
    </div>
	</div>
	<br>
 <div class="row">
    <label class="control-label col-sm-3">Email</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email" placeholder="Enter email" required>
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
    <label class="control-label col-sm-3"> Confirm Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" placeholder="Confirm Password" name="cnfmpd" required>
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
		<div class="col-sm-offset-6 col-sm-6">
<input type="submit" value="Sign Up" class="btn btn-default">
        </div>
    </div>

</div>
<br>
</div>
</form>	
