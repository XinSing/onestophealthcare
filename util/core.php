<?php
require 'util/config.php';
require 'model/model.php';

$db = new Mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db->connect_errno)
	die("Unable to enstablish connection to database: " . $this->con->connect_error);
	
session_start();

$article_category = get_all_article_categories($db);
$videos = get_all_videos($db);

