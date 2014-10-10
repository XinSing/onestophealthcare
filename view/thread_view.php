<div class='container forumblock'>

	<h1 class='text-primary text-center'>Forum Thread</h1>

    <a href="forum.php" class="btn btn-primary pull-left">Back </a>
    <a href="#" class="btn btn-warning addbtn pull-left" role="button" data-toggle="modal" data-target="#modaladdcomment" data-section="health">Reply </a>
	<?php if($_SESSION['type'] == 'admin'){ ?>
    <a href="#" class="btn btn-danger addbtn pull-right" role="button" data-toggle="modal" data-target="#modaldeletethread" data-section="health">Delete thread</a>
	<?php } ?>
	<br/>
	<br/>
	<br/>
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">
				<img src='res/img/forum/normal_open.gif'/>
				<?php echo $thread[0]['fullname'] ?>
			</h3>
		</div>
		<div class="panel-body">
			<?php echo $thread[0]['content'] ?>
		</div>
	</div>
	<?php foreach($comments as $c) { ?>
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">
				<img src='res/img/forum/normal_open.gif'/>
				<?php echo $c['fullname'] ?>
				<?php if($_SESSION['type'] == 'admin'){ ?>
				<a href="#" class="btn btn-danger btn-xs pull-right" role="button" data-toggle="modal" data-target="#modaldeletethread" data-section="health">Delete Comment</a>
				<?php } ?>
			</h3>
		</div>
		<div class="panel-body">
			<?php echo $c['comment'] ?>
		</div>
	</div>
	<?php } ?>
	
    <a href="#" class="btn btn-warning addbtn pull-right" role="button" data-toggle="modal" data-target="#modaladdcomment" data-section="health">Reply </a>
</div>
