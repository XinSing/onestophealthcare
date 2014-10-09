<?php
require 'util/core.php';


if(isset($_POST['action']))
{
	if($_POST['action'] == 'deleteVideo')
	{
		if(delete_video($db, $_POST['deleteid']))
			echo "<script>alert('Deleted successfully');window.location = 'video.php'</script>";
		else
			echo "<script>alert('Fail to delete')</script>";
	}
	else if($_POST['action'] == 'addVideo')
	{
		if($_FILES["file"]["type"] == "video/mp4")
		{
			$videoname = $_POST['vidtitle'] . date("hisdmY");
			$uploadedid = add_video($db, $_POST['vidtitle'], $_POST['viddescription'], "res/vids/$videoname.mp4");
			
			if(!move_uploaded_file($_FILES["file"]["tmp_name"],"res/vids/$videoname.mp4"))
				echo "<script>alert('Fail to upload video, file server error')</script>";
			if($uploadedid == 0)
				echo "<script>alert('Fail to upload video, database error')</script>";
			else
				echo "<script>window.location = 'video.php?vid=$uploadedid'</script>";
				
		}
		else
			echo 'Incorrect type';
	}
}

if(isset($_GET['vid']) && !empty($_GET['vid']))
	$video = get_video_by_id($db, $_GET['vid']);
else
{
	$v['title'] = "Video does not exist.";
	$v['path'] = "";
	$v['description'] = "";
	$v['id'] = "0";
	$video[] = $v;
}

require "view/header_view.php";
require "view/video_view.php";
require 'view/footer_view.php';
?>