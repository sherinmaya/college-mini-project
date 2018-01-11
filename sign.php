<?php 
include('connect.php');
include('header.php');
?>
<br>
<br>
<br>
<form method="POST" action="signdb.php">  
<div style="border: 3px solid black;width:40%;background:#00afef;color:white;text-align:center;" class="container">
<div align="center">
 <h1 align="center">Log In</h1>
<hr>
 <div class="row">
    <label class="control-label col-sm-3" > email</label>
    <div class="col-sm-6 col-md-6 col-lg-6">
      <input type="text" class="form-control" name="email" required>
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">Password</label>
    <div class="col-sm-6 col-md-6 col-lg-6">
      <input type="password" class="form-control" name="password" required>
    </div>
	</div>
	<br>
    <div class="row">
		<div class="col-sm-offset-6 col-sm-6">
<input type="submit" value="Log In" class="btn btn-default">
        </div>
    </div>		
</div>	
<br>
</div>
</form>
