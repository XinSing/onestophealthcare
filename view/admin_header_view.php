<!DOCTYPE html>
<html>
<head>
	<title>One Stop Health Care</title>
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
<img src='/onestophealthcare/res/img/background_admin.png' />
</div>	