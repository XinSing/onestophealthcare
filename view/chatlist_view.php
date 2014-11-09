
<style>
#messagebox{
	background:#f5f5f5;
	margin:auto;
	border-radius:6px;
	max-width:600px;
}

#msgcontainer{
	//min-height:500px;
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
	<table class='table table-striped table-bordered table-hover'>
		<thead>
			<tr><th>Datetime</th>
			<th>Username</th>
			<th></th></tr>
		</thead>
		<tbody>
			<?php foreach($chats as $c){?><tr>
				<td><?php echo $c['time'] ?></td>
				<td><?php echo $c['username'] ?></td>
				<td><a href='chat.php?id=<?php echo $c['sender_ID'] ?>&name=<?php echo $c['username'] ?>'>Reply</a></td>
			</tr><?php } ?>
		</tbody>
	</table>
</div>