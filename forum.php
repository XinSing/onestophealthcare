<?php
require 'util/core.php';

//log in 了要加的
if(!isset($_SESSION['id']))
	header('Location:index.php');

if(isset($_POST['action']))
{
	if($_POST['action'] == 'addThread')
	{
		if(add_thread($db, $_POST['content'], $_POST['forumSection']))
			echo "<script>alert('Thread created successfully')</script>";
		else
			echo "<script>alert('Fail to create thread')</script>";
	}
}

$health = get_thread($db, 'health');
$diet = get_thread($db, 'diet');
$hosp = get_thread($db, 'hosp');
$others = get_thread($db, 'others');

require 'view/header_view.php';
require "view/forum_view.php";
require 'view/footer_view.php';
?>