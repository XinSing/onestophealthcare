<?php
require 'util/core.php';

if(isset($_POST['action']))
{
	if($_POST['action'] == 'addmsg')
		if(add_message($db, $_POST['senderid'], $_POST['message'], $_POST['receiverid']))
			echo 'success';
		else
			echo 'fail';
			
	else if($_POST['action'] == 'getmsg')
		if($msg = get_message($db, $_POST['senderid'], $_POST['receiverid']))
			echo json_encode(array('status'=>'success','msg'=>$msg));
		else
			echo json_encode(array('status'=>'fail','msg'=>array()));
			
	else if($_POST['action'] == 'addTracking')
		if($result = add_tracking($db, $_POST['userid'], $_POST['happy'], $_POST['stress'], $_POST['sleep'], $_POST['healthlevel']))
			echo json_encode(array('status'=>'success'));
		else
			echo json_encode(array('status'=>'fail','msg'=>array()));
	
	else
		echo json_encode(array('status'=>'fail','msg'=>array()));
}
	else
		echo json_encode(array('status'=>'fail','msg'=>array()));

?>