<?php
require 'util/core.php';

if(isset($_POST['action']))
{
	if($_POST['action'] == 'addPrivateHosp')
	{
		if(add_private_hosp($db, $_POST['name'], $_POST['url'], $_POST['state']))
			echo "<script>alert('Added successfully')</script>";
		else
			echo "<script>alert('Fail to add')</script>";
	}
	else if($_POST['action'] == 'deletePrivateHosp')
	{
		if(delete_private_hosp($db, $_POST['deleteid']))
			echo "<script>alert('Deleted successfully')</script>";
		else
			echo "<script>alert('Fail to delete')</script>";
	}
}
$private_hosp = get_all_private_hosp($db);
// echo '<pre>';
// print_r($private_hosp);
// echo '</pre>';

require "view/header_view.php";
require "view/hospital_private_view.php";
require 'view/footer_view.php';
?>