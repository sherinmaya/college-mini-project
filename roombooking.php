<?php 
include('connect.php');
include('headertemp.php');
$no_rooms = $_POST['no_rooms'];
//get already existing data
//$login_userid = $_SESSION['login_user'];
//if($login_userid){
	//$sql="select * from signup where signup_id=$login_userid";
	 //$result = mysqli_query($connection,$sql);
	 //$rowdata = mysqli_fetch_row($result);
	 //$name  = $rowdata[1];
	 //$email = $rowdata[2];
//}else{
	//$name = "";
	//$email = "";
//}
//end
 ?>


<?php
$Room_Id=$_GET['Room_Id']; 
$Rating=$_GET['Rating']; 
 echo '<form method="post" action="roombookingdb.php?Room_Id='.$Room_Id.'&no_rooms='.$no_rooms.'&Rating='.$Rating.'">' ?>
<div class="container">
<div align="center">
 <h1 align="center">Book Now</h1>
<hr>
 <div class="row">
 
    <label class="control-label col-sm-3">Name</label>
    <div class="col-sm-6 col-md-6 col-lg-6">
      <input type="text" class="form-control" name="name">
    </div>
	</div>
	<br>
 <div class="row">
    <label class="control-label col-sm-3" > email</label>
    <div class="col-sm-6 col-md-6 col-lg-6">
      <input type="text" class="form-control" name="email">
    </div>
	</div>
<br>
<br>
<div class="row">
  <label class="col-sm-3" id="basic-addon1">Room Type</label>
   <div class="col-sm-6">
  <select class="form-control" aria-describedby="basic-addon1" name="room_type">
  <option>Single Room</option>
  <option>Double Room</option>
  <option>Twin Room</option>
  <option>King BedRoom</option>
  </select>
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
		<div class="col-sm-offset-6 col-sm-6 btnclrside">
<input type="submit" value="submit" class="btn btn-default btnclrside1">
        </div>
    </div>		
</div>	
<br>
</div>
</form>

<br>
<?php 
include('footer.php')
?>