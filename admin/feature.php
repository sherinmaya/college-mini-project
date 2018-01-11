<?php 
include('connect.php');
include('header.php');
?>
<form method="POST" action="featuredb.php">  
<div style="border: 2px solid blue" class="container">
<div class="row">
<h2>Features</h2>
</div>
<br>
<div class="row">
  <label class="control-label col-sm-3">Features</label>
 <div class="col-sm-6">
  <input type="text" class="form-control" name="feature" >
	</div>
</div>
<br>
<div class="row">
	<div class="col-sm-offset-10 col-sm-2">
<input type="submit" value="submit" class="btn btn-primary">
    </div>
</div>
<br>
</form>
