<div class='container'>
<h1>Articles</h1>
<table class='table table-bordered table-hover'>
<thead>
	<tr>
	<th>Title</th>
	<th>Publish Date</th>
	</tr>
</thead>
<tbody>
	<?php if(sizeof($articles) > 0) foreach($articles as $a){ ?>
	<tr>
		<td><a href='article.php?aid=<?php echo $a['id'] ?>'><?php echo $a['title'] ?></a></td>
		<td><?php echo $a['time_create'] ?></td>
	</tr>	
	<?php } else { ?>
	<tr>
		<td colspan='2'>No article found.</td>
	</tr>
	<?php } ?>
</tbody>
</table>

<h1>Videos</h1>
<table class='table table-bordered table-hover'>
<thead>
	<tr>
	<th>Title</th>
	<th>Description</th>
	</tr>
</thead>
<tbody>
	<?php if(sizeof($videos) > 0) foreach($videos as $v){ ?>
	<tr>
		<td><a href='video.php?vid=<?php echo $v['id'] ?>'><?php echo $v['title'] ?></a></td>
		<td><?php echo $v['description'] ?></td>
	</tr>	
	<?php } else { ?>
	<tr>
		<td colspan='2'>No video found.</td>
	</tr>
	<?php } ?>
</tbody>
</table>


</div>