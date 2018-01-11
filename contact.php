<?php 
include('connect.php');
include('headertemp.php');
?>
<form method="POST" action="contactdb.php">  
<div class="container">
<div class="row">
<h2 style="text-align:center">Contact</h2>
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
    <label class="col-sm-3 col-md-3 col-lg-3 col-xs-3">Phone</label>
    <div class="col-sm-3 col-md-3 col-lg-3 col-xs-8">
      <input type="text" class="form-control" name="phone">
    </div>
	</div>
<br>
 <div class="row">
    <label class="col-sm-3 col-md-3 col-lg-3 col-xs-3">Email</label>
    <div class="col-sm-3 col-md-3 col-lg-3 col-xs-8">
      <input type="email" class="form-control" name="email">
    </div>
	</div>
<br>
 <div class="row">
    <label class="col-sm-3 col-md-3 col-lg-3 col-xs-3">Subject</label>
    <div class="col-sm-3 col-md-3 col-lg-3 col-xs-8">
      <input type="text" class="form-control" name="subject">
    </div>
	</div>
<br>
<br>
<br>
<br>
 <div class="row">
    <label class="col-sm-3 col-md-3 col-lg-3 col-xs-3">Message</label>
    <div class="col-sm-3 col-md-3 col-lg-3 col-xs-8">
<textarea rows="4" cols="28" type="text" name="message" placeholder="message">
</textarea>
</div>
</div>
<br>
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
