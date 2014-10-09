<?php
require 'util/core.php';


if(isset($_GET['keyword']) && !empty($_GET['keyword']))
{
	$articles = search_articles($db, $_GET['keyword']);
	$videos = search_videos($db, $_GET['keyword']);
}
else
{
	$articles = array();
	$videos = array();
}


require "view/header_view.php";
require "view/search_view.php";
require 'view/footer_view.php';
?>