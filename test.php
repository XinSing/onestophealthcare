<?php
require 'util/core.php';
$db = new Mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($db->connect_errno)
	die("Unable to enstablish connection to database: " . $db->connect_error);
	
$db->query("SELECT * FROM article");
?>