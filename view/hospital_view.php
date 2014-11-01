<div class = 'container'>
<?php
if(isset($_SESSION['type']) && $_SESSION['type'] == 'admin')
{
?>
	<a href="#" class="btn btn-warning editbtn" role="button" data-toggle="modal" data-target="#modaladdarticle" data-id="">Add </a>
	<a href="admin.php" class="btn btn-info pull-right" role="button">Back to admin page</a> 
<?php
}
?>

<h1 class='text-warning text-center'>Hospital</h1>
<div class="row">
  <div class="col-sm-6 col-md-6">
    <div class="thumbnail">
      <img src="/onestophealthcare/res/img/private.png" >
      <div class="caption">
       
        <p><a href="hospital_private.php" class="pull-right btn btn-success" role="button">Private</a> 
      </div>
    </div>
  </div>
  
  <div class="col-sm-6 col-md-6">
    <div class="thumbnail">
      <img src="/onestophealthcare/res/img/government.png" >
      <div class="caption">
       
        <p><a href="hospital_government.php" class="pull-right btn btn-warning" role="button">Government</a> 
      </div>
    </div>
  </div>
  
  
</div>

</div>
<style>
.thumbnail{
	height : 380px;
}
</style>
