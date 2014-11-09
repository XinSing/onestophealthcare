
<style>
#messagebox{
	background:#f5f5f5;
	margin:auto;
	border-radius:6px;
	max-width:600px;
}

#msgcontainer{
	min-height:150px;
	max-height:400px;
	overflow:auto;
	padding:10px;
}

.msg{
	position:relative;
	clear:both;
	padding:10px;
	margin:5px 10px;
	border-radius:10px;
	max-width:45%;
	word-break: break-all;
}
.arrow-left {
	position:absolute;
	top:10px;
	left:-10px;
	width: 0px;
	height: 0px;
	border-top: 10px solid transparent;
	border-bottom: 10px solid transparent;
	border-right: 10px solid rgba(0,0,255,0.10);
}
.arrow-right {
	position:absolute;
	top:10px;
	right:-10px;
	width: 0px;
	height: 0px;
	border-top: 10px solid transparent;
	border-bottom: 10px solid transparent;
	border-left: 10px solid rgba(0,0,0,0.10);
}

.sentmessage{
	background:rgba(0,0,255,0.10);
	float:left;
}

.receivedmessage{
	background:rgba(0,0,0,0.10);
	float:right;
}
</style>
<div class="container">
	<div id='messagebox'>
		<?php if(isset($_GET['id'])){ ?>
		<h2>Chating with <?php echo $_GET['name']?></h2>
		<?php } else { ?>
		<h2>Chating with expert</h2>
		<?php } ?>
		<div id='msgcontainer'>
		
		</div>
		<div class='clearfix' style='border-bottom:1px solid #ddd; margin-top:6px'></div>
		
		<div style='padding:6px'>
			<div class="input-group">
				<input type="text" class="form-control" id='msginput'>
				<span class="input-group-btn">
					<button class="btn btn-primary" type="button" id='send'>Send</button>
				</span>
			</div><!-- /input-group -->
			<div class='clearfix'></div>
		</div>
	</div>
</div>
<script>
$('#send').click(function(){
	sendmsg();
});
$(document).on('keydown', '#msginput' , function() {
	if(event.keyCode == 13)
	{
		sendmsg();
		event.preventDefault();
		return;	
	}
});
	
function sendmsg(){
	if($('#msginput').val()=='')
		return;
	var msg = $('#msginput').val();
	$('#msginput').prop('disabled','disabled');
	$.post('messageAJAX.php', {
		senderid: <?php echo $_SESSION['id'] ?>,
		message: msg,
		receiverid: <?php if(isset($_GET['id'])) echo $_GET['id']; else echo '4' ?>,
		action: 'addmsg'
	},function(data,status){
		if(status == 'success')
		{
			if(data == 'success')
			{
				$('<div class="sentmessage msg"></div>').text($('#msginput').val()).append("<div class='arrow-left'></div>").appendTo('#msgcontainer');
				$('#msginput').val('');
				$('#msgcontainer').scrollTop($('#msgcontainer')[0].scrollHeight);
			}
			else
			{
				alert(data);
			}
		}
		else
		{
			alert('Could not connect to server.');
		}
		$('#msginput').prop('disabled','');
		$('#msginput').focus();
	});
		
}

function getmsg(){
	$.post('messageAJAX.php', {
		receiverid: <?php echo $_SESSION['id'] ?>,
		senderid: <?php if(isset($_GET['id'])) echo $_GET['id']; else echo '4' ?>,
		action: 'getmsg'
	},function(data,status){
		console.log('POST status = '+status);
		if(status == 'success')
		{
			if(data['status'] == 'success')
			{
				console.log('msg = '+data['msg'].length);
				for(var i = 0; i < data['msg'].length; i++)
				{
					$('<div class="receivedmessage msg"></div>').text(data['msg'][i].content).append("<div class='arrow-right'></div>").appendTo('#msgcontainer');
					$('#msgcontainer').scrollTop($('#msgcontainer')[0].scrollHeight);
				}
			}
			else
			{
				console.log('no new mesagge');
			}
		}
		else
		{
			alert('Could not connect to server.');
		}
	},'json');
	
	setTimeout(function(){	
		getmsg();
	},500); // second and above
}

getmsg();
</script>