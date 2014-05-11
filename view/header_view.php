<!DOCTYPE html>
<html>
<head>
	<title>One stop health care</title>
	<?php foreach($js as $js){?>
	<script type='text/javascript' src='/onestophealthcare/res/js/<?php echo $js ?>.js'></script>
	<?php } ?>
	<?php foreach($css as $css){?>
	<link rel="stylesheet" type="text/css" href="/onestophealthcare/res/css/<?php echo $css ?>.css" />
	<?php } ?>
	<style>
		.topheader{
			position:relative;
		}
		.topheader img{
			width:100%;
		}
		#login{
			position:absolute;
			top:0px;
			right:0px;
			padding:10px;
			background:rgba(255,255,255,0.8);
			height:213px;
			font-weight:bolder;
			font-size:2em;
		}
	</style>
</head>
<body>

<div class="topheader">
<img src='/onestophealthcare/res/img/background.png' />
<div id='login'>
Member Login
<form role="form" action='login.php' method='POST'>
	<input type="text" class="form-control" name='username' placeholder="Enter Username">
	<input type="password" class="form-control" name='password' placeholder="Enter Password">

	<button type="submit" class="btn btn-primary">Log in</button>
	<a href='register.php' class="btn btn-primary">Register</a>
	
</form>
</div>
</div>
<?php
if(isset($_SESSION['id'])){//if u logged in
?>
<script>
$('.topheader').remove();
</script>
<?php } ?>
<?php 
require 'view/topnav_view.php';
require "view/reminder_modal_view.php";
?>
