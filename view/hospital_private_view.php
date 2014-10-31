<div class='container'>
	<h1 class='text-center text-info'>Private Hospitals in Malaysia</h1>
	
<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <?php $i = 0; foreach($private_hosp as $h){ ?>
  <li><a href="#tab<?php echo ++$i ?>" data-toggle="tab"><?php echo $h['state'] ?></a></li>
  <?php } ?>
</ul>
<script>
	$('.nav.nav-tabs li').first().addClass('active');
</script>
<div class="tab-content">
	
<?php if(isset($_SESSION['type']) && $_SESSION['type'] == 'admin'){ ?>
<a href="#" class="btn btn-warning editbtn" role="button" data-toggle="modal" data-target="#modaladdprivatehosp">Add </a>
<?php } ?>

<?php $i = 0; foreach($private_hosp as $h){ ?>
<div class="tab-pane fade" id="tab<?php echo ++$i ?>">
  <div class="list-group">
<?php foreach($h['hosps'] as $h2){ ?>
  <h2 class='privatehosprow'>
<?php if(isset($_SESSION['type']) && $_SESSION['type'] == 'admin'){ ?>
    <button href="#" class="btn btn-primary deletebtn pull-right" role="button" data-toggle="modal" data-target="#modaldeleteprivatehosp" data-id='<?php echo $h2['id']?>'>Delete </button>
<?php } ?>
	<a href="<?php echo $h2['url'] ?>" class="" style=''><?php echo $h2['name'] ?></a>
  </h2>
<?php } ?>
  </div>	
</div>
<?php } ?>
</div>
</div>
<script>
	$('.tab-pane.fade').first().addClass('in active');
	$('.deletebtn').click(function(){
		$('#modaldeleteprivatehosp').find('input[name="deleteid"]').val($(this).data('id'));
	});
</script>
<ul class="pager">
	<li><a href="hospital.php">Back</a></li>
</ul>
<style>
.privatehosprow a{
	text-decoration:none;
	color:#555;
}
.privatehosprow{
	position: relative;
	display: block;
	padding: 10px 15px;
	margin-bottom: -1px;
	background-color: #ffffff;
	border: 1px solid #dddddd;
}
</style>