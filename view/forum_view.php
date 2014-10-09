<div class='container'>

<h1>Forum</h1>

<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="active"><a href="#tab1" data-toggle="tab">Health</a></li>
  <li><a href="#tab2" data-toggle="tab">Diet</a></li>
  <li><a href="#tab3" data-toggle="tab">Hospitals/Clinics</a></li>
  <li><a href="#tab4" data-toggle="tab">Others</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane fade in active" id="tab1">
	<div class='thread clearfix '>
		<div class='profilepic'>
			<img src='res/img/forum/normal_open.gif'/>
		</div>
		<div class='content'>
			<div class='name'>
				<a href='#'>Chew Sheen Yeen</a>
			</div>
			<div class='datetime'>
				<?php echo date("h:i:sa d-m-Y"); ?>
			</div>
			<p>
				<br/>asdasd asdasd asdasdas asdasd assdasd asda sd asdasd asdasdas d as 
			</p>
		</div>
		<a href='#' class='btn btn-primary btn-sm' style='position:absolute;right:0;bottom:0;margin:10px;'>More</a>
	</div>
	<!--<div id="reply1" class="collapse replycontainer">...</div>
	<div data-toggle="collapse" data-target="#reply1" class='text-center replytoggler'>
	  <a href='#'><span class="glyphicon glyphicon-chevron-down"></span></a>
	</div>-->
  </div>
  <div class="tab-pane fade" id="tab2">...</div>
  <div class="tab-pane fade" id="tab3">...</div>
  <div class="tab-pane fade" id="tab4">...</div>
</div>


<ul class="pager">
		<li><a href="profile.php">Back</a></li>
 
</ul>

</div>
<style>
	.thread{
		/* width: 700px; */
		padding: 10px;
		background: #C4E3F5;
		margin-top:20px;
		position:relative;
		border-radius:7px;
		min-height:80px;
	}
	
	.profilepic{
		border-radius:50%;
		width:30px;
		height:30px;
		/*background: rgb(200,0,250);*/
		float:left;
	}
	
	.thread .content{
		margin-left:40px;
		
	}
	
	.name{
		float:left;
	}
	
	.datetime{
		float:right;
	}
	
	.replytoggler{
		padding:5px;
		border:1px solid #C4E3F5;
		cursor:pointer;
	}
	
	.replycontainer{
		padding-left:110px;
		border-left:1px solid #C4E3F5;
		border-right:1px solid #C4E3F5;
	}
</style>
<script>
	$('.replytoggler').click(function(){
		$(this).find('span').toggleClass('glyphicon-chevron-up');
		$(this).find('span').toggleClass('glyphicon-chevron-down');
	});
</script>