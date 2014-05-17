<?php
require 'util/core.php';

$user = login($db, $_POST['username'], $_POST['password']);
if($user = $user[0])
{
	$_SESSION['user'] = $user['fullname'];
	$_SESSION['id'] = $user['id'];
	$_SESSION['type'] = $user['type'];
	if($user['type'] == 'admin')
		header('location: admin.php'); 
	else if($user['type'] == 'user')
		header('location: profile.php'); 

}
else 
{
	echo 'Something went wrong! Try again. Thanks.';
}

?>  