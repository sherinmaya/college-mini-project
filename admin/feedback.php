<?php 
include('connect.php');
include('index.php');
?>
<form method="POST" action="feedbackdb.php">  
<div style="border: 2px solid blue" class="container">
<div class="row">
<h2>Feedback</h2>
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
    <label class="control-label col-sm-3">Email</label>
    <div class="col-sm-3  col-md-3 col-lg-3">
      <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">Comments</label>
    <div class="col-sm-3  col-md-3 col-lg-3">
<textarea rows="4" cols="50" type="comments" placeholder="Comments" name="comments">
</textarea>
</div>
</div>
<br>
<br>
<div class="row">
  <label class="col-sm-3" id="basic-addon1">Rating</label>
<div class="col-sm-3  col-md-3 col-lg-3">  
	<div class="radio">
	  <label><input type="radio" value="1" name="rating"></label>
	  <label><input type="radio" value="2" name="rating"></label>
	  <label><input type="radio" value="3" name="rating"></label>
	  <label><input type="radio" value="4" name="rating"></label>
	  <label><input type="radio" value="5" name="rating"></label>
	</div>
	</div>
	</div>
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
