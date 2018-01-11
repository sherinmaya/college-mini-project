<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
<link href="fonts/font-awesome.css" rel="stylesheet" type="text/css">
<script type="text/javascript">$('.carousel').carousel();</script>
</head>
<body>
<!--header-top-text start-->
<?php session_start();  ?>
<div class="header-top-text">
<div class="container">
 <div class="row">
  <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6"> 
   <div class="top-text">Admin</div>
  </div>
   <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6"> 
 <ul class="topbar-links">
      <!--login id is automatically stored in session-->
	  <!--end-->
    </ul>
   </div>   
  </div>
 </div>
</div>
<!--header-top-text end-->
<!--header start-->
 <div class="container">
  <div class="row">
  <div class="col-sm-3 col-xs-12 col-md-3 col-lg-3 logo1"> 
   <img src="image/maxresdefault.png" class="img-responsive"/>
  </div>
  <div class="col-sm-9 col-xs-12 col-md-9 col-lg-9"> 
   <div class="nevigationwrape">
   <div class="navbar navbar-default"  role="navigation">
    <div class="navbar-header">
	 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	    <span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	 </button>
	</div>
	 
	<div class="navbar-collapse collapse">
	 <ul class="nav navbar-nav">
	  <li><a href="roomlisting.php" class="active">Add Rooms</a></li>
	  <li><a href="featurelist.php">Features</a></li>
	  <li><a href="peekrmlist.php">Peek Rooms</a></li>
	  <li><a href="user.php"><span class="glyphicon glyphicon-user"></span> Add user</a></li>
	  <li><a href="../index.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
	 </ul>
	</div>
	<div class="clearfix"></div>  
</div>
</div>
 </div>
 </div>
</div>
<!--header end-->








