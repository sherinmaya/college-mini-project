<?php 
include('connect.php');
include('header.php');

?>
<form method="POST" action="roomdb.php" enctype="multipart/form-data">  
<div style="border: 2px solid blue" class="container">
<div class="row">
<h2>Add Room info</h2>
</div>
<br>
<div class="row">
  <label class="control-label col-sm-3">Room No</label>
 <div class="col-sm-6">
    <input type="text" class="form-control" name="room_no" required>
	</div>
</div>
<br>
<div class="row">
  <label class="control-label col-sm-3">Room Picture</label>
 <div class="col-sm-6">
    <input type="file" id="result_img" name="imageUpload" >
	</div>
</div>
<br>
<div class="row">
  <label class="control-label col-sm-3" >Floor</label> 
  <div class="col-sm-6">
    <input type="text" class="form-control" name="floor" aria-describedby="basic-addon1">
	</div>
</div>
<br>
<div class="row">
  <label class="control-label col-sm-3">People</label>
  <div class="col-sm-6">
    <input type="text" class="form-control" name="people" aria-describedby="basic-addon1">
	</div>
</div>
<br>
<div class="row">
  <label class="control-label col-sm-3">Rating</label>
  <div class="col-sm-6">
    <input type="text" class="form-control" name="rating" aria-describedby="basic-addon1">
	</div>
</div>
<br>
<div class="row">
  <label class="control-label col-sm-3">Room Type</label>
   <div class="col-sm-6">
  <select class="form-control" name="room_type" aria-describedby="basic-addon1">
  <option>Single Room</option>
  <option>Double Room</option>
  <option>Twin Room</option>
  <option>King BedRoom</option>
  </select>
  </div>
</div>
<br>
<div class="row">
  <label class="control-label col-sm-3">Room Available</label>
  <div class="col-sm-6">
    <select class="form-control" name="room_availabe" aria-describedby="basic-addon1">
	  <option>Yes</option>
      <option>No</option>
    </select>
	</div>
</div>
	<br>
	 <div class="row">
    <label class="control-label col-sm-3">Description</label>
    <div class="col-sm-6">
<textarea rows="4" cols="50" type="description" name="description">
</textarea>
</div>
</div>
<br>
<!--select a data from another html page-->
	<?php

$sql_query = mysqli_query($connection,"SELECT feature_id,feature_name from features");

?>
	<div class="row">
  <label class="col-sm-3" id="basic-addon1">Features</label>
<div class="col-sm-6"> 

        <div class="checkbox "> 
	<?php
while($row = mysqli_fetch_row($sql_query)){
	echo '<label><input type="checkbox" value="'.$row[0].'" name="features[]" >'.$row[1].'</label> ';
	//echo '<option value="'.$row[0].'">'.$row[1].'</option>';
}
?>
<!--end-->
</div>
	 </div>
	 </div>
	<br>
    <div class="row">
		<div class="col-sm-offset-10 col-sm-2">
<input type="submit" value="submit" class="btn btn-primary">
        </div>
    </div>
	<br>
</div>
</form>
