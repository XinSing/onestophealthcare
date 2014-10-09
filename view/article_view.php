<div class='container articleblock'>

<?php
if(isset($_SESSION['type']) && $_SESSION['type'] == 'admin')
{
?>
	<a href="#" class="btn btn-warning editbtn" role="button" data-toggle="modal" data-target="#modaladdarticle" data-id="$a[id]">Add </a>
	<a href="admin.php" class="btn btn-info pull-right" role="button">Back to admin page</a>
<?php
}
?>
<?php foreach($articles as $a){ // id, content, picture, title,//load the numbers of articles ?>				
<article>
	
	<?php
	if(isset($_SESSION['type']) && $_SESSION['type'] == 'admin')
	{
	?>
	<div class='pull-right'>
		<a href="#" class="btn btn-warning editbtn" role="button" data-toggle="modal" data-target="#modaleditarticle" data-id='<?php echo $a['id']?>'>Edit </a>
		<a href="#" class="btn btn-primary deletebtn" role="button" data-toggle="modal" data-target="#modaldeletearticle" data-id='<?php echo $a['id']?>'>Delete </a>
	</div>
	<?php } ?>
	<header><?php echo $a['title']?></header>
	<?php if($a['picture']!=''){ ?>
	<img src='/onestophealthcare/res/img/article/<?php echo $a['picture']?>' />
	<?php } ?>
	<br/>
	<?php echo $a['content']?>
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
		$('#modaldeletearticle').find('#deleteid').val($(this).data("id"));
	});
</script>