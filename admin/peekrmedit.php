<?php 
include('connect.php');
include('header.php');

$peek_id=$_GET['peek_id'];
$sql_query1 = mysqli_query($connection,"select * from peekroom where peek_id = $peek_id");
$rowdata = mysqli_fetch_row($sql_query1);

//print_r($rowdata);
?>

<form method="POST" action="peekrmedtdb.php?peek_id=<?php echo $peek_id;?>" enctype="multipart/form-data">  
<div style="border: 2px solid blue" class="container">
<div class="row">
<h2>Add Room info</h2>
</div>
<div class="container">
<div class="row">
  <label class="control-label col-sm-3">Room No</label>
 <div class="col-sm-6">
    <input type="text" class="form-control" name="room_no" value="<?php echo $rowdata[1];?>"/>
	</div>
</div>
<br>
<div class="row">
  <label class="control-label col-sm-3">Room Picture</label>
 <div class="col-sm-6">
    <input type="file"  name="imageUpload" value="<?php echo $rowdata[2];?>"/>
	</div>
</div>
<br>
<div class="row">
  <label class="control-label col-sm-3">Rating</label>
  <div class="col-sm-6">
    <input type="text" class="form-control" name="rating" aria-describedby="basic-addon1" value="<?php echo $rowdata[3];?>"/>
	</div>
</div>
	<br>
	 <div class="row">
    <label class="control-label col-sm-3">Description</label>
    <div class="col-sm-6">
<textarea rows="4" cols="50" type="description" name="description" value="<?php echo $rowdata[4];?>"/>
</textarea>
</div>
</div>
<br>
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

</div>
	 </div>
	 </div>
	<br>
    <div class="row">
		<div class="col-sm-offset-10 col-sm-2">
<input type="submit" value="submit" class="btn btn-primary">
        </div>
    </div>
	</div>
	<br>
</div>
</form>
