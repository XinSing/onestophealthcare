<?php
require 'util/core.php';

//log in 了要加的
if(!isset($_SESSION['id']))
	header('Location:index.php');

require 'view/admin_header_view.php';
require 'view/admin_view_two.php';
require 'view/footer_view.php';
?>
