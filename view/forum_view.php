<div class='container'>

<?php if(isset($_SESSION['type']) && $_SESSION['type'] == 'admin') { ?>
<a href="admin.php" class="btn btn-info pull-right" role="button">Back to admin page</a>
<?php } ?>

<h1>Discussion Forum</h1>

<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="active"><a href="#tab1" data-toggle="tab">Health and Disease</a></li>
  <li><a href="#tab2" data-toggle="tab">Diet and Food</a></li>
  <li><a href="#tab3" data-toggle="tab">Hospitals</a></li>
  <li><a href="#tab4" data-toggle="tab">Others</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane fade in active" id="tab1">
    <a href="#" class="btn btn-warning addbtn" role="button" data-toggle="modal" data-target="#modaladdthread" data-section="health">Add </a>
    <?php foreach($health as $h){ ?>
	<div class='thread clearfix '>
		<div class='profilepic'>
			<img src='res/img/forum/normal_open.gif'/>
		</div>
		<div class='content'>
			<div class='name'>
				<a href='#'><?php echo $h['fullname']?></a>
			</div>
			<div class='datetime'>
				<?php echo $h['date_created']?>
			</div>
			<p>
				<br/><?php echo $h['content']?> 
			</p>
		</div>
		<a href='thread.php?id=<?php echo $h['id']?>' class='btn btn-primary btn-sm' style='position:absolute;right:0;bottom:0;margin:10px;'>More</a>
		
	</div>
	<?php } ?>
	<!--<div id="reply1" class="collapse replycontainer">...</div>
	<div data-toggle="collapse" data-target="#reply1" class='text-center replytoggler'>
	  <a href='#'><span class="glyphicon glyphicon-chevron-down"></span></a>
	</div>-->
  </div>
  <div class="tab-pane fade" id="tab2">
  <a href="#" class="btn btn-warning addbtn" role="button" data-toggle="modal" data-target="#modaladdthread" data-section="diet">Add </a>
    <?php foreach($diet as $d){ ?>
	<div class='thread clearfix '>
		<div class='profilepic'>
			<img src='res/img/forum/normal_open.gif'/>
		</div>
		<div class='content'>
			<div class='name'>
				<a href='#'><?php echo $d['fullname']?></a>
			</div>
			<div class='datetime'>
				<?php echo $d['date_created']?>
			</div>
			<p>
				<br/><?php echo $d['content']?> 
			</p>
		</div>
		<a href='thread.php?id=<?php echo $d['id']?>' class='btn btn-primary btn-sm' style='position:absolute;right:0;bottom:0;margin:10px;'>More</a>
		
	</div>
	<?php } ?>
  </div>
  
  <div class="tab-pane fade" id="tab3">
  <a href="#" class="btn btn-warning addbtn" role="button" data-toggle="modal" data-target="#modaladdthread" data-section="hosp">Add </a>
    <?php foreach($hosp as $ho){ ?>
	<div class='thread clearfix '>
		<div class='profilepic'>
			<img src='res/img/forum/normal_open.gif'/>
		</div>
		<div class='content'>
			<div class='name'>
				<a href='#'><?php echo $ho['fullname']?></a>
			</div>
			<div class='datetime'>
				<?php echo $ho['date_created']?>
			</div>
			<p>
				<br/><?php echo $ho['content']?> 
			</p>
		</div>
		<a href='thread.php?id=<?php echo $ho['id']?>' class='btn btn-primary btn-sm' style='position:absolute;right:0;bottom:0;margin:10px;'>More</a>
		
	</div>
	<?php } ?>
  </div>
  
  <div class="tab-pane fade" id="tab4">
  <a href="#" class="btn btn-warning addbtn" role="button" data-toggle="modal" data-target="#modaladdthread" data-section="others">Add </a>
    <?php foreach($others as $o){ ?>
	<div class='thread clearfix '>
		<div class='profilepic'>
			<img src='res/img/forum/normal_open.gif'/>
		</div>
		<div class='content'>
			<div class='name'>
				<a href='#'><?php echo $o['fullname']?></a>
			</div>
			<div class='datetime'>
				<?php echo $o['date_created']?>
			</div>
			<p>
				<br/><?php echo $o['content']?> 
			</p>
		</div>
		<a href='thread.php?id=<?php echo $o['id']?>' class='btn btn-primary btn-sm' style='position:absolute;right:0;bottom:0;margin:10px;'>More</a>
		
	</div>
	<?php } ?>
  
  </div>
</div>


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
	$('.addbtn').click(function(){
		$("#modaladdthread").find('input[name="forumSection"]').val($(this).data("section"));
	});
</script>