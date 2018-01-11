<?php 
include('connect.php');
include('header.php');

$res_id=$_GET['res_id'];
$sql_query = mysqli_query($connection,"select * from reservation where res_id = $res_id");
$rowdata = mysqli_fetch_row($sql_query);

//print_r($rowdata);
?>

<form method="POST" action="reservationeditdb.php?res_id=<?php echo $res_id;?>">  
<div style="border: 2px solid blue" class="container">
<div class="row">
<h2>Reservation</h2>
</div>
<br>

 <div class="row">
    <label class="control-label col-sm-3">Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="name" value="<?php echo $rowdata[1];?>"/>
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3 col-md-3 col-lg-3" >Email</label>
    <div class="col-sm-3 col-md-3 col-lg-6">
      <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?php echo $rowdata[2];?>"/>
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">Phone</label>
	  <div class="col-sm-6">
      <input type="text" class="form-control" placeholder="Phone" name="phone" value="<?php echo $rowdata[3];?>"/>
    </div>
	</div>
<br>
<div class="row">
  <label class="col-sm-3" id="basic-addon1">Room Type</label>
   <div class="col-sm-6">
  <select class="form-control" aria-describedby="basic-addon1" name="type" value="<?php echo $rowdata[4];?>"/>
  <option>Single Room</option>
  <option>Double Room</option>
  <option>Twin Room</option>
  <option>King BedRoom</option>
  </select>
  </div>
</div>
<br>
<div class="row">
  <label class="col-sm-3" id="basic-addon1">Capacity</label>
  <div class="col-sm-6">
    <input type="number" class="form-control" name="capacity"  aria-describedby="basic-addon1" value="<?php echo $rowdata[5];?>"/>
	</div>
</div>
<br>
  <div class="row">
  <label class="col-sm-3" id="basic-addon1">Number Of Adult</label>
  <div class="col-sm-6">
  <input type="number" class="form-control" aria-describedby="basic-addon1" name="adult" value="<?php echo $rowdata[6];?>"/>
  </div>
  </div>
  <br>
  <div class="row">
  <label class="col-sm-3" id="basic-addon1">Number Of Children</label>
     <div class="col-sm-6">
  <input type="number" class="form-control" aria-describedby="basic-addon1" name="children" value="<?php echo $rowdata[7];?>"/>
  </div>
  </div>
  <br>
<div class="row">
  <label class="col-sm-3" id="basic-addon1">Check In</label>
   <div class="col-sm-6">
   <input type="date" class="form-control" aria-describedby="basic-addon1" name="in" value="<?php echo $rowdata[10];?>"/>
  </div>
</div>
<br>
<div class="row">
  <label class="col-sm-3" id="basic-addon1">Check Out</label>
   <div class="col-sm-6">
   <input type="date" class="form-control" aria-describedby="basic-addon1" name="out" value="<?php echo $rowdata[11];?>"/>
  </div>
</div>
<br>
<div class="row">
  <label class="col-sm-3" id="basic-addon1">Total Days</label>
  <div class="col-sm-6">
    <input type="text" class="form-control" aria-describedby="basic-addon1" name="days" value="<?php echo $rowdata[12];?>"/>
	</div>
</div>
<br>
<div class="row">
  <label class="col-sm-3" id="basic-addon1">Additional Bed</label>
   <div class="col-sm-6">
  <input type="text" class="form-control" aria-describedby="basic-addon1" name="bed" value="<?php echo $rowdata[13];?>"/>
  </div>
</div>
<br>
<div class="row">
  <label class="col-sm-3" id="basic-addon1">Total Amount</label>
  <div class="col-sm-6">
    <input type="text" class="form-control" aria-describedby="basic-addon1" name="amount" value="<?php echo $rowdata[14];?>"/>
	</div>
</div>
<br>

<div class="row">
	<div class="col-sm-offset-10 col-sm-2">
<input type="submit" value="book" class="btn btn-primary">
	</div>
</div>
<br>
</div>
</form>
