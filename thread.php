<?php
require 'util/core.php';

//log in 了要加的
if(!isset($_SESSION['id']))
	header('Location:index.php');
	
if(!isset($_GET['id']))
	header('Location:forum.php');

if(isset($_POST['action']))
{
	if($_POST['action'] == 'addComment')
	{
		if(add_comment($db, $_POST['comment'], $_POST['id']))
			echo "<script>alert('Comment created successfully')</script>";
		else
			echo "<script>alert('Fail to add comment')</script>";
	}
	else if($_POST['action'] == 'deleteComment')
	{
		if(delete_comment($db, $_POST['id']))
			echo "<script>alert('Comment deleted successfully')</script>";
		else
			echo "<script>alert('Fail to delete comment')</script>";
	}
}

$comments = get_comments($db, $_GET['id']);	
$thread = get_a_thread($db, $_GET['id']);	
	
require 'view/header_view.php';
require "view/thread_view.php";
require 'view/footer_view.php';
?>
