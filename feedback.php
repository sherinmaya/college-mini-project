<?php 
include('connect.php');
include('headertemp.php');
?>
<form method="POST" action="feedbackdb.php">  
<div class="container">
<div class="row">
<h2 style="text-align:center">Feedback</h2>
</div>
<br>
<div class="row">
  <label class="col-sm-3 col-md-3 col-lg-3 col-xs-3" id="basic-addon1">Name</label>
  <div class="col-sm-3 col-md-3 col-lg-3 col-xs-8">
    <input type="text" class="form-control" name="name">
	</div>
</div>
<br>
 <div class="row">
    <label class="col-sm-3 col-md-3 col-lg-3 col-xs-3">Email</label>
    <div class="col-sm-3  col-md-3 col-lg-3 col-xs-8">
      <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>
	</div>
<br>
<br>
<br>
 <div class="row">
    <label class="col-sm-3 col-md-3 col-lg-3 col-xs-3">Comments</label>
    <div class="col-sm-3  col-md-3 col-lg-3 col-xs-8">
<textarea rows="4" cols="28" type="comments" placeholder="Comments" name="comments">
</textarea>
</div>
</div>
<br>
<br>
<div class="row">
  <label class="col-sm-3 col-md-3 col-lg-3 col-xs-3" id="basic-addon1">Rating</label>
<div class="col-sm-3  col-md-3 col-lg-3 col-xs-8">  
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
<div class="form-group btnclr1"> 
	<div class="col-sm-offset-10 col-sm-2">
<input type="submit" value="submit" class="btn btn-primary btnclr">
    </div>
  </div>
  <br>
  <br>
</div>
</form>
