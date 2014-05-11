<?php
require 'util/core.php';
$msg = '';
if(isset($_POST['un']))
{
	if(check_user($db, $_POST['un']))
	{
		if(register($db, $_POST['un'], $_POST['pw'], $_POST['fn'], $_POST['em'], $_POST['cn']))
			header('location: register_success.php');
	}
	else
		$msg = 'User already exist';
}

require 'view/header_view.php';
require 'view/register_view.php';
require 'view/footer_view.php';
?>


