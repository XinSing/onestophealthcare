<?php
require 'util/core.php';

//log in 了要加的
if(!isset($_SESSION['id']))
	header('Location:index.php');


$chats = get_all_chat_user($db);	
	
require 'view/header_view.php';
require "view/chat_view.php";
require 'view/footer_view.php';

?>