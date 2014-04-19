<?php
require 'model/Database.php';

function get_all_articles(){
	$article = select("SELECT * FROM article");
	return $article;
}
?>