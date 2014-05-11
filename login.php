<?php
require 'util/core.php';

$user = login($db, $_POST['username'], $_POST['password']);
if($user = $user[0])
{
	$_SESSION['user'] = $user['fullname'];
	$_SESSION['id'] = $user['id'];
}
header('location: profile.php');
?>



