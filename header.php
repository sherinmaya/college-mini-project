<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BOOKING.COM</title>
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
   <div class="top-text">BOOKING.COM</div>
  </div>
   <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6"> 
 <ul class="topbar-links">
      <!--login id is automatically stored in session-->
	  <?php 
	  
	  if($_SESSION && $_SESSION['login_user']){ ?>
		  
		  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
		  
	 <?php }else{ ?>
	 
		  <li><a href="sign.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	 <?php }
	  ?>
      <!--end-->
    </ul>
   </div>   
  </div>
 </div>
</div>
<!--header-top-text end-->