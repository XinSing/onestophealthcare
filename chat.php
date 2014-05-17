<?php
require 'util/core.php';

//log in 了要加的
if(!isset($_SESSION['id']))
	header('Location:index.php');

require 'view/header_view.php';
require "view/chat_view.php";

?>