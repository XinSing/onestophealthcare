<?php
require 'util/core.php';

if(isset($_POST['action']))
{
	if($_POST['action'] == 'addPublicHosp')
	{
		if(strpos($_FILES["pic"]["type"], 'image') > -1)
		{ 
			$picname = 'res/img/'.date("hisdmY"). basename( $_FILES["pic"]["name"]);
			$uploadedid = add_public_hosp($db, $_POST['state'], $_POST['name'], $picname, $_POST['description'], $_POST['url'], $_POST['address'], $_POST['mapurl']);
			
			if(!move_uploaded_file($_FILES["pic"]["tmp_name"],"$picname"))
				echo "<script>alert('Fail to upload photo, file server error')</script>";
			if($uploadedid == 0)
				echo "<script>alert('Fail to upload photo, database error')</script>";
							
		}
		else
			echo 'Incorrect type';	

	}
	else if($_POST['action'] == 'deletePublicHosp')
	{
		if(delete_public_hosp($db, $_POST['deleteid']))
			echo "<script>alert('Deleted successfully')</script>";
		else
			echo "<script>alert('Fail to delete')</script>";
	}
}

$private_hosp = get_all_private_hosp($db);
$public_hospital = get_all_public_hosp($db);
require "view/header_view.php";
require "view/hospital_government_view.php";
require 'view/footer_view.php';
?>