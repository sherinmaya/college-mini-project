<?php 
include('headertemp.php');
include('connect.php');
//print_r($_POST);
$Room_Id=$_GET['Room_Id'];
$Rating=$_GET['Rating'];
$no_rooms = $_GET['no_rooms'];
$sql_query2 = mysqli_query($connection,"select * from rooms where Room_Id = $Room_Id");
$row = mysqli_fetch_row($sql_query2);



$name = $_POST['name'];
$email = $_POST['email'];
$room_type = $_POST['room_type'];
$Number_Of_Adult = $_POST['adult'];
$Number_Of_Children = $_POST['children'];
$Check_In = $_POST['in'];
$Check_Out=$_POST['out'];
 $sql = "INSERT INTO booking (name,email,room_type,adult,children,check_in,check_out)VALUES ('$name','$email','$room_type','$Number_Of_Adult','$Number_Of_Children','$Check_In','$Check_Out')";

 $result = mysqli_query($connection,$sql);
 if($result){?>

<form method="POST" action="">  
<div style="border: 3px solid black;width:40%;text-align:center;" class="container">
<div align="center">

 <h1 align="center">Please confirm booking</h1>
<hr>
 <div class="row">
 
    <label class="col-sm-6" id="basic-addon1">Name:</label>
    <div class="col-sm-6 col-md-6 col-lg-6">
	<label class="col-sm-6" id="basic-addon1"><?php echo $name; ?></label>
    </div>
	</div>
	<br>
 <div class="row">
    <label class="col-sm-6" id="basic-addon1"> email:</label>
    <div class="col-sm-6 col-md-6 col-lg-6">
     <label class="col-sm-6" id="basic-addon1"><?php echo $email; ?></label>
    </div>
	</div>
<br>
<br>
<div class="row">
  <label class="col-sm-6" id="basic-addon1">Room Type:</label>
   <div class="col-sm-6 col-md-6 col-lg-6"> 
   <label class="" id="basic-addon1"><?php echo $room_type; ?></label>
</div>
</div>
<br>
<br>
<div class="row">
  <label class="col-sm-6" id="basic-addon1">Room Rate:</label>
   <div class="col-sm-6 col-md-6 col-lg-6"> 
   <label class="" id="basic-addon1"><?php echo $Rating."/-"; ?></label>
</div>
</div>
<br>
<br>
<div class="row">
  <label class="col-sm-6" id="basic-addon1">no. of rooms:</label>
   <div class="col-sm-6 col-md-6 col-lg-6"> 
   <label class="" id="basic-addon1"><?php echo $no_rooms; ?></label>
</div>
</div>
<br>
<br>
<?php 
$total=$no_rooms*$Rating;
?>
<div class="row">
  <label class="col-sm-6" id="basic-addon1">Total:</label>
   <div class="col-sm-6 col-md-6 col-lg-6"> 
   <label class="" id="basic-addon1">Rs: <?php echo $total."/-"; ?></label>
</div>
</div>
<br>
<br>
  <div class="row">
  <label class="col-sm-6" id="basic-addon1">Number Of Adult:</label>
  <div class="col-sm-6">
  <label class="col-sm-6" id="basic-addon1"><?php echo $Number_Of_Adult; ?></label>
  </div>
  </div>
  <br>
  <div class="row">
  <label class="col-sm-6" id="basic-addon1">Number Of Children:</label>
     <div class="col-sm-6">
  <label class="col-sm-6" id="basic-addon1"><?php echo $Number_Of_Children; ?></label>
  </div>
  </div>
  <br>
<div class="row">
  <label class="col-sm-6" id="basic-addon1">Check In:</label>
   <div class="col-sm-6">
   <label class="col-sm-6" id="basic-addon1"><?php echo $Check_In; ?></label>
  </div>
</div>
<br>
<div class="row">
  <label class="col-sm-6" id="basic-addon1">Check Out:</label>
   <div class="col-sm-6">
   <label class="col-sm-6" id="basic-addon1"><?php echo $Check_Out; ?></label>
  </div>
</div>
<br>
<br>
</div>	
<br>
</div>
</form>
<br>


 <?php }else{
	
	 echo "error";
 }

?>
<!--print code-->
<div style="margin-left:800px">
<button onclick="myFunction()">Print this page</button>
<script>
function myFunction() {
    window.print();
}
</script>
</div>
<br>
<?php 
include('footer.php')
?>
 