<?php
require 'util/core.php';

//log in 了要加的
if(!isset($_SESSION['id']))
	header('Location:index.php');
	
if(!isset($_GET['id']))
	header('Location:forum.php');

$comments = get_comments($db, $_GET['id']);	
	
require 'view/header_view.php';
require "view/thread_view.php";
require 'view/footer_view.php';
?>
