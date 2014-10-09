<?php
require 'util/core.php';

if(isset($_POST['action']))
{
	if($_POST['action'] == 'deleteArticle')
	{
		if(delete_article($db, $_POST['deleteid']))
			echo "<script>alert('Deleted successfully')</script>";
		else
			echo "<script>alert('Fail to delete')</script>";
	}
}

if(isset($_GET['category']) && !empty($_GET['category']))
	$articles = get_all_articles_by_category($db, $_GET['category']);
else if(isset($_GET['aid']) && !empty($_GET['aid']))
	$articles = get_article_by_id($db, $_GET['aid']); // id, content, picture, title
else
	$articles = get_all_articles($db); // id, content, picture, title

require "view/header_view.php";
require "view/article_view.php";
require 'view/footer_view.php';
?>