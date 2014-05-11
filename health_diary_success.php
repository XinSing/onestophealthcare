<?php
require 'util/core.php';

//log in 了要加的
if(!isset($_SESSION['id']))
	header('Location:index.php');

require 'view/header_view.php';
if(isset($_POST['date']))
{
	if(add_diary($db, $_POST['breakfast'], $_POST['lunch'], $_POST['dinner'], $_POST['supper'], $_POST['exercise'], $_POST['sleep'], $_POST['coffee'], $_POST['alcohol'], $_POST['date'], $_SESSION['id']))
		require 'view/health_diary_succcess_view.php';
	else
		require 'view/health_diary_fail_view.php';
}

	
	
require 'view/footer_view.php';

?>