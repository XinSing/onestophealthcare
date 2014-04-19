<?php
require 'model/Database.php';

function get_all_articles(){
	$article = $db->select("SELECT * FROM article");
	return $article;
}
?>