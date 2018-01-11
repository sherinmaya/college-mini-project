<?php 
include('connect.php');
include('header.php');
$feature_id=$_GET['feature_id'];
$sql_query = mysqli_query($connection,"select * from features where feature_id = $feature_id");
$rowdata = mysqli_fetch_row($sql_query);

//print_r($rowdata);
?>

<form method="POST" action="featureeditdb.php?feature_id=<?php echo $feature_id;?>">   
<div style="border: 2px solid blue" class="container">
<div class="row">
<h2>Features</h2>
</div>
<br>
<div class="row">
  <label class="control-label col-sm-3">Features</label>
 <div class="col-sm-6">
  <input type="text" class="form-control" name="feature" value="<?php echo $rowdata[1];?>"/>
	</div>
</div>
<br>
<div class="row">
	<div class="col-sm-offset-10 col-sm-2">
<input type="submit" value="submit" class="btn btn-primary">
    </div>
</div>
<br>
</form>
