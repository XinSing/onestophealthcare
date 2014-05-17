<div class='container'>
<div class='row'>

<ul class="pager">
	<li><a href="selftracking.php">&larr; Back</a></li>
</ul>


<?php if(sizeof($diaries) > 0){ ?>
<table class='table table-striped table-bordered table-hover'>
<thead>
<tr>
	<th>Date</th>
	<th>Breakfast</th>
	<th>Lunch</th>
	<th>Dinner</th>
	<th>Supper</th>
	<th>Exercise(Min)</th>
	<th>Sleep(Hour)</th>
	<th>Alcohol</th>
	<th>Caffeinated drinks</th>
</tr>
</thead>
<tbody>
<?php foreach($diaries as $d){ ?>
<tr>
	<td><?php echo $d['date']?></td>
	<td><?php echo $d['breakfast']?></td>
	<td><?php echo $d['lunch']?></td>
	<td><?php echo $d['dinner']?></td>
	<td><?php echo $d['supper']?></td>
	<td><?php echo $d['exercise']?></td>
	<td><?php echo $d['sleep']?></td>
	<td><?php echo $d['alcohol']?></td>
	<td><?php echo $d['caffein']?></td>
</tr>
<?php } ?>
</tbody>
</table>
<?php }else{ ?>


<h1 class='text-center'> No Diary Entry Found </h1>
<div class='text-center'>
<a href='health_diary.php' class='btn-info btn'>Create One Now</a>
</div>

<?php } ?>


</div>
</div>


 