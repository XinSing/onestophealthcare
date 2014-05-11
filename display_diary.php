<?php
require 'util/core.php';

//log in 了要加的
if(!isset($_SESSION['id']))
	header('Location:index.php');

$diaries = get_all_diary($db, $_SESSION['id']);
	
require 'view/header_view.php';
require 'view/display_diary_view.php';
require 'view/footer_view.php';

?>