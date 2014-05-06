<div class='container articleblock'>

<?php foreach($articles as $a){ // id, content, picture, title,//load the numbers of articles ?>				

<article>
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