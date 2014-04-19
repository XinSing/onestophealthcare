<?php
require 'model/base_model.php';

class article_model extends base_model{

	public function get_all_articles(){
		$article = $this->db->select("SELECT * FROM article");
		return $article;
	}
	
	public function get_all_title(){
		$article = $this->db->select("SELECT id, title FROM article");
		return $article;
	}
	
}
?>