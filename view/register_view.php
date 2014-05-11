<div class='container'>
<h3><?php echo $msg?></h3>
<form class="form-horizontal" action='register.php' method='POST'>
<fieldset>

<!-- Form Name -->
<legend class='col-md-offset-2 col-md-8'>New User Registration</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Username</label>  
  <div class="col-md-4">
  <input id="textinput" name="un" type="text" placeholder="Username" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password </label>
  <div class="col-md-4">
    <input id="passwordinput" name="pw" type="password" placeholder="Password" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Confirm Password</label>
  <div class="col-md-4">
    <input id="passwordinput" name="pw2" type="password" placeholder="ConfirmPassword" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Full Name</label>  
  <div class="col-md-4">
  <input id="textinput" name="fn" type="text" placeholder="FullName" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email Address</label>  
  <div class="col-md-4">
  <input id="textinput" name="em" type="text" placeholder="EmailAddress" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Contact Number</label>  
  <div class="col-md-4">
  <input id="textinput" name="cn" type="text" placeholder="ContactNumber" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-info">Submit</button>
  </div>
</div>

</fieldset>
</form>
</div>
