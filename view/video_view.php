<div class='container articleblock'>

<?php
if(isset($_SESSION['type']) && $_SESSION['type'] == 'admin')
{
?>
	<a href="#" class="btn btn-warning editbtn" role="button" data-toggle="modal" data-target="#modaladdvideo" data-id='<?php echo $v['id']?>'>Add </a>
	<?php if(isset($_GET['vid'])){?>
	<a href="#" class="btn btn-primary deletebtn" role="button" data-toggle="modal" data-target="#modaldeletevideo" data-id='<?php echo $v['id']?>'>Delete </a>
	<a href="admin.php" class="btn btn-info pull-right" role="button">Back to admin page</a>
<?php
}
else if(isset($_SESSION['type']) && $_SESSION['type'] == 'user')
	echo '<a href="profile.php" class="btn btn-info pull-right" role="button">Back to profile page</a>';
	
?>
<?php foreach($video as $v){ // id, content, picture, title,//load the numbers of articles ?>				
<article>
	<?php } ?>
	<h2><?php echo $v['title']?></h2>
	<video width="100%" controls>
	  <source src="<?php echo $v['path']?>" type="video/mp4">
	  Your browser does not support this video.
	</video>
	<p><?php echo $v['description']?></p>
</article>

<?php } ?>

</div>
<style>
.articleblock article{
	
}
.articleblock img{
	max-width:60%;
}
.articleblock  header{
	font-weight:bold;
	font-size:2em;
}
</style>

<script>
	$('.deletebtn').click(function(){
		$('#modaldeletevideo').find('#deleteid').val($(this).data("id"));
	});
</script>