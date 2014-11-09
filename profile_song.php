<?php
require 'util/core.php';

//log in 了要加的
if(!isset($_SESSION['id']))
	header('Location:index.php');

$tracking = get_tracking($db, $_SESSION['id']);
	
require 'view/header_view.php';
require 'view/profile_song_view.php';
require 'view/footer_view.php';
?>


