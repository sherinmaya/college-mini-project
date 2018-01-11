<?php 
include('connect.php');
include('index.php');
?>
<form method="POST" action="contactdb.php">  
<div style="border: 2px solid blue" class="container">
<div class="row">
<h2>Contact</h2>
</div>
<br>
<div class="row">
  <label class="col-sm-3" id="basic-addon1">Name</label>
  <div class="col-sm-3  col-md-3 col-lg-3">
    <input type="text" class="form-control" name="name">
	</div>
</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">Phone</label>
    <div class="col-sm-3  col-md-3 col-lg-3">
      <input type="text" class="form-control" name="phone">
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">Email</label>
    <div class="col-sm-3  col-md-3 col-lg-3">
      <input type="email" class="form-control" name="email">
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">Subject</label>
    <div class="col-sm-3  col-md-3 col-lg-3">
      <input type="text" class="form-control" name="subject">
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">Message</label>
    <div class="col-sm-3  col-md-3 col-lg-3">
<textarea rows="4" cols="50" type="text" name="message" placeholder="message">
</textarea>
</div>
</div>
<br>
<br>

<br>
<div class="form-group"> 
	<div class="col-sm-offset-10 col-sm-2">
<input type="submit" value="submit" class="btn btn-primary">
    </div>
  </div>
  <br>
  <br>
</div>
</form>
