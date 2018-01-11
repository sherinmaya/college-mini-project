<?php 
include('connect.php');
include('header.php');

$id=$_GET['id'];
$sql_query = mysqli_query($connection,"select * from booking where id = $id");
$rowdata = mysqli_fetch_row($sql_query);

//print_r($rowdata);
?>
<form method="POST" action="roombookingeditdb.php?id=<?php echo $id;?>">  
<div style="border: 3px solid black;width:40%;background:#ff0066;color:white;text-align:center;" class="container">
<div align="center">
 <h1 align="center">Book Now</h1>
<hr>
 <div class="row">
 
    <label class="control-label col-sm-3">Name</label>
    <div class="col-sm-6 col-md-6 col-lg-6">
      <input type="text" class="form-control" name="name" value="<?php echo $rowdata[1];?>" required>
    </div>
	</div>
	<br>
 <div class="row">
    <label class="control-label col-sm-3" > email</label>
    <div class="col-sm-6 col-md-6 col-lg-6">
      <input type="text" class="form-control" name="email" value="<?php echo $rowdata[2];?>" required>
    </div>
	</div>
<br>
<br>
  <div class="row">
  <label class="col-sm-3" id="basic-addon1">Number Of Adult</label>
  <div class="col-sm-6">
  <input type="number" class="form-control" aria-describedby="basic-addon1" name="adult" value="<?php echo $rowdata[3];?>">
  </div>
  </div>
  <br>
  <div class="row">
  <label class="col-sm-3" id="basic-addon1">Number Of Children</label>
     <div class="col-sm-6">
  <input type="number" class="form-control" aria-describedby="basic-addon1" name="children" value="<?php echo $rowdata[4];?>">
  </div>
  </div>
  <br>
<div class="row">
  <label class="col-sm-3" id="basic-addon1">Check In</label>
   <div class="col-sm-6">
   <input type="date" class="form-control" aria-describedby="basic-addon1" name="in" value="<?php echo $rowdata[5];?>">
  </div>
</div>
<br>
<div class="row">
  <label class="col-sm-3" id="basic-addon1">Check Out</label>
   <div class="col-sm-6">
   <input type="date" class="form-control" aria-describedby="basic-addon1" name="out" value="<?php echo $rowdata[6];?>">
  </div>
</div>
<br>
    <div class="row">
		<div class="col-sm-offset-6 col-sm-6">
<input type="submit" value="submit" class="btn btn-default">
        </div>
    </div>		
</div>	
<br>
</div>
</form>

<?php 
include('footer.php')
?>