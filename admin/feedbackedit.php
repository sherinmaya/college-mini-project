<?php 
include('connect.php');
include('index.php');
$id=$_GET['id'];
$sql_query = mysqli_query($connection,"select * from feedback where id = $id");
$rowdata = mysqli_fetch_row($sql_query);

//print_r($rowdata);
?>

<form method="POST" action="feedbackeditdb.php?id=<?php echo $id;?>">   
<div style="border: 2px solid blue" class="container">
<div class="row">
<h2>Feedback</h2>
</div>
<br>
<div class="row">
  <label class="col-sm-3" id="basic-addon1">Name</label>
  <div class="col-sm-6">
    <input type="text" class="form-control" name="name" value="<?php echo $rowdata[2];?>">
	</div>
</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">Email</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?php echo $rowdata[3];?>">
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">Comments</label>
    <div class="col-sm-6">
<textarea rows="4" cols="50" type="comments" placeholder="Comments" name="comments" value="<?php echo $rowdata[4];?>">
</textarea>
</div>
</div>
<br>
<br>
<div class="row">
  <label class="col-sm-3" id="basic-addon1">Rating</label>
<div class="col-sm-6">  
	<div class="radio">
	  <label><input type="radio" value="1" name="rating" value="<?php echo $rowdata[5];?>"></label>
	  <label><input type="radio" value="2" name="rating" value="<?php echo $rowdata[5];?>"></label>
	  <label><input type="radio" value="3" name="rating" value="<?php echo $rowdata[5];?>"></label>
	  <label><input type="radio" value="4" name="rating" value="<?php echo $rowdata[5];?>"></label>
	  <label><input type="radio" value="5" name="rating" value="<?php echo $rowdata[5];?>"></label>
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
