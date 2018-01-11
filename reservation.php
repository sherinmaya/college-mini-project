<?php 

include('header.php');
?>
<form method="POST" action="reservationdb.php">
<div style="border: 2px solid blue" class="container">
<div class="row">
<h2>Reservation</h2>
</div>
<br>

 <div class="row">
    <label class="control-label col-sm-3">Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="name">
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3 col-md-3 col-lg-3" >Email</label>
    <div class="col-sm-3 col-md-3 col-lg-6">
      <input type="email" class="form-control" name="email" placeholder="Enter email" >
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">Phone</label>
	  <div class="col-sm-6">
      <input type="text" class="form-control" placeholder="Phone" name="phone" >
    </div>
	</div>
<br>
<div class="row">
  <label class="col-sm-3" id="basic-addon1">Room Type</label>
   <div class="col-sm-6">
  <select class="form-control" aria-describedby="basic-addon1" name="type">
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
    <input type="number" class="form-control" name="capacity"  aria-describedby="basic-addon1">
	</div>
</div>
<br>
  <div class="row">
  <label class="col-sm-3" id="basic-addon1">Number Of Adult</label>
  <div class="col-sm-6">
  <input type="number" class="form-control" aria-describedby="basic-addon1" name="adult">
  </div>
  </div>
  <br>
  <div class="row">
  <label class="col-sm-3" id="basic-addon1">Number Of Children</label>
     <div class="col-sm-6">
  <input type="number" class="form-control" aria-describedby="basic-addon1" name="children">
  </div>
  </div>
  <br>
<div class="row">
  <label class="col-sm-3" id="basic-addon1">Check In</label>
   <div class="col-sm-6">
   <input type="date" class="form-control" aria-describedby="basic-addon1" name="in" >
  </div>
</div>
<br>
<div class="row">
  <label class="col-sm-3" id="basic-addon1">Check Out</label>
   <div class="col-sm-6">
   <input type="date" class="form-control" aria-describedby="basic-addon1" name="out" >
  </div>
</div>
<br>
<div class="row">
  <label class="col-sm-3" id="basic-addon1">Total Days</label>
  <div class="col-sm-6">
    <input type="text" class="form-control" aria-describedby="basic-addon1" name="days">
	</div>
</div>
<br>
<div class="row">
  <label class="col-sm-3" id="basic-addon1">Additional Bed</label>
   <div class="col-sm-6">
  <input type="text" class="form-control" aria-describedby="basic-addon1" name="bed">
  </div>
</div>
<br>
<div class="row">
  <label class="col-sm-3" id="basic-addon1">Total Amount</label>
  <div class="col-sm-6">
    <input type="text" class="form-control" aria-describedby="basic-addon1" name="amount" >
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
