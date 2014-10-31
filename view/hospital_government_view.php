<div class='container'>
	<h1 class='text-center text-info'>Government Hospitals in Malaysia</h1>
	
<?php if(isset($_SESSION['type']) && $_SESSION['type'] == 'admin'){ ?>
<a href="#" class="btn btn-warning editbtn" role="button" data-toggle="modal" data-target="#modaladdpublichosp">Add </a>
<?php } ?>
	<div class='row'>
		<div class='col-sm-6 col-md-4'>
			<?php for($i = 0; $i < sizeof($public_hospital); $i++){ if($i%3==0){?>
			<div class="thumbnail">
			<h3 class='text-left text-success'><?php echo $public_hospital[$i]['state'] ?>
<?php if(isset($_SESSION['type']) && $_SESSION['type'] == 'admin'){ ?>
    <button href="#" class="btn btn-danger btn-xs deletebtn pull-right" role="button" data-toggle="modal" data-target="#modaldeletepublichosp" data-id='<?php echo $public_hospital[$i]['id']?>'>Delete </button>
<?php } ?>			
			</h3>
			<h4 class='text-left text-default'><?php echo $public_hospital[$i]['name'] ?></h4>
			  <img src="<?php echo $public_hospital[$i]['picdirc'] ?>" >
			  <div class="caption">
				<a href='<?php echo $public_hospital[$i]['url'] ?>' class="pull-right btn btn-danger btn-xs" role="button">About</a>
				<h4 class='text-left text-primary'><?php echo $public_hospital[$i]['description'] ?></h4>
				<a href='<?php echo $public_hospital[$i]['mapurl'] ?>' class="pull-right btn btn-warning btn-xs" role="button">Direction</a>
				<h5 class='text-left'><?php echo $public_hospital[$i]['address'] ?></h5>
			  </div>
			  
			  <br>
			</div>	
			<?php }} ?>
		</div>	
		<div class='col-sm-6 col-md-4'>
			<?php for($i = 0; $i < sizeof($public_hospital); $i++){ if($i%3==1){?>
			<div class="thumbnail">
			<h3 class='text-left text-success'><?php echo $public_hospital[$i]['state'] ?>
<?php if(isset($_SESSION['type']) && $_SESSION['type'] == 'admin'){ ?>
    <button href="#" class="btn btn-danger btn-xs deletebtn pull-right" role="button" data-toggle="modal" data-target="#modaldeletepublichosp" data-id='<?php echo $public_hospital[$i]['id']?>'>Delete </button>
<?php } ?>			
			</h3>
			<h4 class='text-left text-default'><?php echo $public_hospital[$i]['name'] ?></h4>
			  <img src="<?php echo $public_hospital[$i]['picdirc'] ?>" >
			  <div class="caption">
				<a href='<?php echo $public_hospital[$i]['url'] ?>' class="pull-right btn btn-danger btn-xs" role="button">About</a>
				<h4 class='text-left text-primary'><?php echo $public_hospital[$i]['description'] ?></h4>
				<a href='<?php echo $public_hospital[$i]['mapurl'] ?>' class="pull-right btn btn-warning btn-xs" role="button">Direction</a>
				<h5 class='text-left'><?php echo $public_hospital[$i]['address'] ?></h5>
			  </div>
			  
			  <br>
			</div>	
			<?php }} ?>
		</div>	
		<div class='col-sm-6 col-md-4'>
			<?php for($i = 0; $i < sizeof($public_hospital); $i++){ if($i%3==2){?>
			<div class="thumbnail">
			<h3 class='text-left text-success'><?php echo $public_hospital[$i]['state'] ?>
<?php if(isset($_SESSION['type']) && $_SESSION['type'] == 'admin'){ ?>
    <button href="#" class="btn btn-danger btn-xs deletebtn pull-right" role="button" data-toggle="modal" data-target="#modaldeletepublichosp" data-id='<?php echo $public_hospital[$i]['id']?>'>Delete </button>
<?php } ?>			</h3>
			<h4 class='text-left text-default'><?php echo $public_hospital[$i]['name'] ?></h4>
			  <img src="<?php echo $public_hospital[$i]['picdirc'] ?>" >
			  <div class="caption">
				<a href='<?php echo $public_hospital[$i]['url'] ?>' class="pull-right btn btn-danger btn-xs" role="button">About</a>
				<h4 class='text-left text-primary'><?php echo $public_hospital[$i]['description'] ?></h4>
				<a href='<?php echo $public_hospital[$i]['mapurl'] ?>' class="pull-right btn btn-warning btn-xs" role="button">Direction</a>
				<h5 class='text-left'><?php echo $public_hospital[$i]['address'] ?></h5>
			  </div>
			  
			  <br>
			</div>	
			<?php }} ?>
		</div>	
		
		
	</div> 
	<!---<div class='container text-center'>
		<ul class="pagination">
		<li><a href="hospital_local.php">1</a></li>
		<li><a href="hospital_local_two.php">2</a></li>
		</ul>
	</div>	!--->
</div>
<ul class="pager">
		<li><a href="hospital.php">Back</a></li>
 
</ul>
<style>
.thumbnail{
	//height : 720px;
}
</style>
<script>
	$('.deletebtn').click(function(){
		$('#modaldeletepublichosp').find('input[name="deleteid"]').val($(this).data('id'));
	});
</script>