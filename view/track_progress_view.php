<div class='container'>
<div class='row'>
<ul class="pager">
		<li><a href="selftracking.php">&larr; Back</a></li>
 
</ul>
<script type="text/javascript" src="//www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1');
    </script>
    <script type="text/javascript">
		
    </script>
<div class='result' style='width:70%; margin:auto; display:none'>
	<h2 class='text-left'>Your lifestyle scored: <span id='score' class='asd'></span>%</h2>
	<div class="progress progress-striped active">
	  <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
	  </div>
	</div>
	<br/>
	<div id="visualization" style="width: 600px; height: 400px;"></div>
	<br/>
	<div>
		<ul id='resultanalysis' style='font-size:18px;'>
		
		</ul>
	</div>
	
</div>

<div class='spinner' style='width:100%; margin:auto; display:none'>
	<h2 class='text-center'>Processing your result...</h2>
	<div id="floatingBarsG" style=' margin:auto'>
	<div class="blockG" id="rotateG_01">
	</div>
	<div class="blockG" id="rotateG_02">
	</div>
	<div class="blockG" id="rotateG_03">
	</div>
	<div class="blockG" id="rotateG_04">
	</div>
	<div class="blockG" id="rotateG_05">
	</div>
	<div class="blockG" id="rotateG_06">
	</div>
	<div class="blockG" id="rotateG_07">
	</div>
	<div class="blockG" id="rotateG_08">
	</div>
	</div>
</div>

<form class="form-horizontal col-md-offset-2 form">
<fieldset>

<!-- Form Name -->
<legend class='col-md-9'>What are You Waiting For? Let`s Begin Your Health Journey Now!</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Age">Age</label>  
  <div class="col-md-2">
  <input id="Age" name="Age" type="number" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Weight">Weight(kg)</label>  
  <div class="col-md-2">
  <input id="Weight" name="weight" value='66' type="number" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Height">Height(cm)</label>  
  <div class="col-md-2">
  <input id="Height" name="height" value='171' type="number" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="stress">Are you stressed?</label>
  <div class="col-md-4">
    <label class='radio-inline' for="stress-0">
      <input type="radio" name="stress" id="stress-0" value="2" checked="checked">
      Yes
    </label>
    <label class='radio-inline' for="stress-1">
      <input type="radio" name="stress" id="stress-1" value="5">
      No
    </label>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="happy">Are you happy?</label>
  <div class="col-md-4">
    <label class='radio-inline' for="happy-0">
      <input type="radio" name="happy" id="happy-0" value="5" checked="checked">
      Yes
    </label>
    <label class='radio-inline'  for="happy-1">
      <input type="radio" name="happy" id="happy-1" value="2">
      No
    </label>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="exercise">Do you exercise more than 2hours a week?</label>
  <div class="col-md-4">
    <label class='radio-inline' for="exercise-0">
      <input type="radio" name="exercise" id="exercise-0" value="7" checked="checked">
      Yes
    </label>
    <label class='radio-inline' for="exercise-1">
      <input type="radio" name="exercise" id="exercise-1" value="2">
      No
    </label>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="working">What is your daily working hours?</label>
  <div class="col-md-4">
    <label class='radio-inline' for="working-0">
      <input type="radio" name="working" id="working-0" value="4" checked="checked">
      1-5
    </label>
    <label class='radio-inline' for="working-1">
      <input type="radio" name="working" id="working-1" value="3">
      6-10
    </label>
    <label class='radio-inline' for="working-2">
      <input type="radio" name="working" id="working-2" value="1">
      &gt;10
    </label>
    <label class='radio-inline' for="working-2">
      <input type="radio" name="working" id="working-2" value="4">
      N/A
    </label>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="eatbreakfast">Do you usually have your breakfast?</label>
  <div class="col-md-4">
    <label class='radio-inline' for="eatbreakfast-0">
      <input type="radio" name="eatbreakfast" id="eatbreakfast-0" value="10" checked="checked">
      Yes
    </label>
    <label class='radio-inline' for="eatbreakfast-1">
      <input type="radio" name="eatbreakfast" id="eatbreakfast-1" value="3">
      No
    </label>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="eatsupper">Do you have the habit of eating supper?</label>
  <div class="col-md-4">
    <label class='radio-inline' for="eatsupper-0">
      <input type="radio" name="eatsupper" id="eatsupper-0" value="2" checked="checked">
      Yes
    </label>
    <label class='radio-inline' for="eatsupper-1">
      <input type="radio" name="eatsupper" id="eatsupper-1" value="5">
      No
    </label>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="smoker">Are you a smoker?</label>
  <div class="col-md-4">
    <label class='radio-inline' for="smoker-0">
      <input type="radio" name="smoker" id="smoker-0" value="0" checked="checked">
      Yes
    </label>
    <label class='radio-inline' for="smoker-1">
      <input type="radio" name="smoker" id="smoker-1" value="6">
      No
    </label>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="alcoholic">Are you taking any alcoholic drink?</label>
  <div class="col-md-4">
    <label class='radio-inline' for="alcoholic-0">
      <input type="radio" name="alcoholic" id="alcoholic-0" value="0" checked="checked">
      Yes
    </label>
    <label class='radio-inline' for="alcoholic-1">
      <input type="radio" name="alcoholic" id="alcoholic-1" value="8">
      No
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="walk">On average, how far do you walk each day?</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="walk-0">
      <input type="radio" name="walk" id="walk-0" value="1" checked="checked">
      Less than 1KM
    </label>
	</div>
  <div class="radio">
    <label for="walk-1">
      <input type="radio" name="walk" id="walk-1" value="3">
      Between 1KM to 3KM
    </label>
	</div>
  <div class="radio">
    <label for="walk-2">
      <input type="radio" name="walk" id="walk-2" value="5">
      More than 3KM
    </label>
	</div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="FoodPlate">What is in your food plate?</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="FoodPlate-0">
      <input type="checkbox" name="FoodPlate1" id="FoodPlate-0" value="6">
      Fruits (i.e: apple, grapes, banana, oranges)
    </label>
	</div>
  <div class="checkbox">
    <label for="FoodPlate-1">
      <input type="checkbox" name="FoodPlate2" id="FoodPlate-1" value="8">
      Vegetables (i.e: broccoli, spinach, cabbage, carrots)
    </label>
	</div>
  <div class="checkbox">
    <label for="FoodPlate-2">
      <input type="checkbox" name="FoodPlate3" id="FoodPlate-2" value="5">
      Grains (i.e: oatmeal, white bread, white rice, spaghetti, noodles)
    </label>
	</div>
  <div class="checkbox">
    <label for="FoodPlate-3">
      <input type="checkbox" name="FoodPlate4" id="FoodPlate-3" value="3">
      Protein Foods (i.e: meats, poultry, eggs, beans and peas, nuts and seeds, sea food)
    </label>
	</div>
  <div class="checkbox">
    <label for="FoodPlate-4">
      <input type="checkbox" name="FoodPlate5" id="FoodPlate-4" value="3">
      Diary (i.e:milk, cheese, yogurt, soy milk)
    </label>
	</div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-info">Submit</button>
  </div>
</div>

</fieldset>
</form>

</div>
</div>
<script>
	function drawVisualization() {
		var wrapper = new google.visualization.ChartWrapper({
		  chartType: 'ColumnChart',
		  dataTable: [['%', '23/5/13', '24/5/13', '25/5/13', '26/5/13', '27/5/13'],
					  ['Date', 60, 70, 80, 70, 80]],
		  options: {'title': 'Score record'},
		  containerId: 'visualization'
		});
		wrapper.draw();
	}
	
	$(document).ready(function(){
		$('.form').submit(function(){
		
			
		
			$(this).fadeOut(1000, function(){
				$('.spinner').fadeIn(1000).delay(300).fadeOut(400,function(){
					//start calculation
					var score = 0;
					
					var bmi = parseInt($('input[name="weight"]').val())/(parseInt($('input[name="height"]').val())*parseInt($('input[name="height"]').val())/10000);
					
					if(bmi <= 18.5){
						score += 15;
						$('#resultanalysis').append("<li>You are under optimum weight for your height. You could afford to gain a little weight</li>");
					}
					else if(bmi <= 24.9){
						score += 20;
						$('#resultanalysis').append("<li>You have a healthy weight for your height</li>");
					}
					else if(bmi <= 29.9){
						score += 10;
						$('#resultanalysis').append("<li>You are over optimum weight for your height. You may be facing health Problems, so losing some weight would be a good idea.</li>");
					}
					else{
						score += 3;
						$('#resultanalysis').append("<li>You are over optimum weight for your height. You may be facing health risks, so See your doctor to help you achieve a healthier weight.</li>");
					}
					
					var stress_score = $('input[name="stress"]:checked').val();
					score += parseInt(stress_score);
					
					if($('input[name="stress"]:checked').val()=='2')
						$('#resultanalysis').append("<li>You should relax where you are, close your eyes, breathe deeply and slowly. Take a break, get some exercise and fresh air. Think positive.</li>");
						
					score += parseInt($('input[name="happy"]:checked').val());
					score += parseInt($('input[name="exercise"]:checked').val());
					if($('input[name="exercise"]:checked').val()=='2')
						$('#resultanalysis').append("<li>You must go for exercise. It is good for your health.</li>");
					score += parseInt($('input[name="working"]:checked').val());
					if($('input[name="working"]:checked').val()=='1')
						$('#resultanalysis').append("<li>Is it important to have enough rest time. Always remember : work life balance.</li>");
					score += parseInt($('input[name="eatbreakfast"]:checked').val());
					if($('input[name="eatbreakfast"]:checked').val()=='3')
						$('#resultanalysis').append("<li>You must maintain a habit of eating breakfast, because it is very important in your daily routine. Breakfast will give you energy for you to complete the task.</li>");
					score += parseInt($('input[name="eatsupper"]:checked').val());
					if($('input[name="eatsupper"]:checked').val()=='3')
						$('#resultanalysis').append("<li>Please keep away the habit of eating supper.</li>");
					score += parseInt($('input[name="smoker"]:checked').val());
					if($('input[name="smoker"]:checked').val()=='0')
						$('#resultanalysis').append("<li>Do you know, smoke will cause illness and death. Please keep away from it.</li>");
					score += parseInt($('input[name="alcoholic"]:checked').val());
					if($('input[name="alcoholic"]:checked').val()=='0')
						$('#resultanalysis').append("<li>Alcoholic drink will cause liver damage, risk for experiencing various accidents. Please keep away from it.</li>");
					score += parseInt($('input[name="walk"]:checked').val());
					if($('input[name="FoodPlate1"]:checked').length > 0)
					score += parseInt($('input[name="FoodPlate1"]').val());
					if($('input[name="FoodPlate2"]:checked').length > 0)
					score += parseInt($('input[name="FoodPlate2"]').val());
					if($('input[name="FoodPlate3"]:checked').length > 0)
					score += parseInt($('input[name="FoodPlate3"]').val());
					if($('input[name="FoodPlate4"]:checked').length > 0)
					score += parseInt($('input[name="FoodPlate4"]').val());
					if($('input[name="FoodPlate5"]:checked').length > 0)
					score += parseInt($('input[name="FoodPlate5"]').val());
					
					$('#resultanalysis').append("<li>Fill half of your plate with vegetables and fruits. The more color, and the more variety, the better. </li>");
					$('#resultanalysis').append("<li>Save a quarter of your plate for whole grains.</li>");
					$('#resultanalysis').append("<li>Pick a healthy source of protein to fill one quarter of your plate</li>");
					$('#resultanalysis').append("<li>Small amounts of fats, oils and sugar are acceptable, larger amounts of these foods will cause an inadequately varied food intake.</li>");
					
					
					//finish calculate
					$('#score').text(score);
					
					if(score > 80)
					{
						$('#score').addClass("text-success");
						$('.result').prepend("<h1 class='text-success'>Congratulation!!</h1>");
						$('.progress-bar').addClass("progress-bar-success");
					}
					else if(score > 60)
					{
						$('#score').addClass("text-primary");
						$('.result').prepend("<h1 class='text-primary'>Not bad.</h1>");
						$('.progress-bar').addClass("progress-bar-primary");
					}
					else if(score > 40)
					{
						$('#score').addClass("text-warning");
						$('.result').prepend("<h1 class='text-warning'>Uh ohh.</h1>");
						$('.progress-bar').addClass("progress-bar-warning");
					}
					else 
					{
						$('#score').addClass("text-danger");
						$('.result').prepend("<h1 class='text-danger'>Caution!!</h1>");
						$('.progress-bar').addClass("progress-bar-danger");
					}
						
					$('.result').fadeIn(500, function(){
						$('.progress-bar').css('width', ''+score+'%');
			drawVisualization();		
					});
				});
			});
			return false;
		});
	});
</script>
    