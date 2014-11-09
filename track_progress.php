<?php
require 'util/core.php';

$result = get_tracking($db, $_SESSION['id']);
if(sizeof($result)>5){
	for($i = sizeof($result)-5; $i < sizeof($result); $i++)
		$temp[] = $result[$i];
	$result = $temp;
}

require 'view/header_view.php';
if($result[sizeof($result)-1]['date']==date("Y-m-d"))
	require "view/track_progress_sorry_view.php";
else
	require "view/track_progress_view.php";
require 'view/footer_view.php';
?>


