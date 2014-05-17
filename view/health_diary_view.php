<div class='container'>
<div class='row'>

<ul class="pager">
	<li><a href="selftracking.php">&larr; Back</a></li>
</ul>
<form class="form-horizontal col-md-offset-2" action='health_diary_success.php' method='POST'>
<fieldset>

<!-- Form Name -->

<legend class='col-md-9'>My Health Diary</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Date :</label>  
  <div class="col-md-3">
  <input id="textinput" name="date" type="date" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Breakfast : What You Have Ate and Drank?</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="breakfast"></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Lunch : What You Have Ate and Drank?</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="lunch"></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Dinner : What You Have Ate and Drank?</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="dinner"></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Supper : What You Have Ate and Drank?</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="supper"></textarea>
  </div>
</div>

<!-- Text input--
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">How Long Did It Take You to Fall Asleep Last Night? (This may be an estimate.)</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input--
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">How Many Times Did You Wake Up During the Night? (Include how long you stayed awake.)</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">In Total, How Many Hours Did You Sleep Last Night?</label>  <div class="col-md-2">
    <div class="input-group">
      <input id="appendedtext" name="sleep" class="form-control" placeholder="" type="number" required>
      <span class="input-group-addon">Hours</span>
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="appendedtext">How long did You Exercise Today?</label>
  <div class="col-md-3">
    <div class="input-group">
      <input id="appendedtext" name="exercise" class="form-control" placeholder="" type="number" required>
      <span class="input-group-addon">Minutes</span>
    </div>
  </div>
</div>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Did You Consume Any Alcoholic Beverages Today?</label>
  <div class="col-md-4">                     
    <label class='radio-inline' for="alcoholic-0">
      <input type="radio" name="alcohol" id="alcoholic-0" value="Yes" checked="checked">
      Yes
    </label>
    <label class='radio-inline' for="alcoholic-1">
      <input type="radio" name="alcohol" id="alcoholic-1" value="No">
      No
    </label>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">How many cups of caffeinated drinks did you Consume today? </label>
  <div class="col-md-2">                     
    <input type='number' name='coffee' class='form-control' required>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-success">Keep</button>
  </div>
</div>

</fieldset>
</form>

</div>
</div>


 