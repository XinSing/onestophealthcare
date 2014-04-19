<?php
require 'model/Database.php';
class base_model{
    function __construct() {
		$this->db = new Database();
	}
}
?>