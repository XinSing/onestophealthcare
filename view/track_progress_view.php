<div class='container'>
<div class='row'>
<ul class="pager">
		<li><a href="selftracking.php">&larr; Back</a></li>
 
</ul>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
  var chart;;
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {


	chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
	
  }
  
  
</script>

<div class='result' style='width:70%; margin:auto; display:none'>
	<h2 class='text-left'>Your Health Level: <span id='scorespan' class='asd'></span>%</h2>
	<div class="progress progress-striped active">
	  <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
	  </div>
	</div>
	<br/>
	<div id="chart_div" style="width: 900px; height: 500px;"></div>
	<br/>
	<div>
		<h1 class='text-center text-primary'>Lets Check For Your Health Level Analysis: </h1>
		<ul id='resultanalysis' style='font-size:18px;'>
		
		</ul>
	</div>
	<div class="text-center">
		<img src ="/onestophealthcare/res/img/HealthQuote.jpg" />
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
<!--
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Date :</label>  
  <div class="col-md-3">
  <input id="textinput" name="date" type="date" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

 Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Age">Age</label>  
  <div class="col-md-2">
  <input id="Age" name="Age" type="number" placeholder="" class="form-control input-md" value='23'>
    
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
  <label class="col-md-4 control-label" for="sleep">Do you struggle to get to sleep no matter how tired you are? Or do you wake up in the middle of the night and lie awake for hours ?</label>
  <div class="col-md-4">
    <label class='radio-inline' for="sleep-0">
      <input type="radio" name="sleep" id="sleep-0" value="2" checked="checked">
      Yes
    </label>
    <label class='radio-inline' for="sleep-1">
      <input type="radio" name="sleep" id="sleep-1" value="5">
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
      Dairy (i.e:milk, cheese, yogurt, soy milk)
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
	
	$(document).ready(function(){
		$('.form').submit(function(e){
				e.preventDefault();
				//start calculation
				var score = 0;
			    $(this).fadeOut(1000, function(){
				$('.spinner').fadeIn(1000).delay(300).fadeOut(400,function(){
					
					
					
					
					
					var bmi = parseInt($('input[name="weight"]').val())/(parseInt($('input[name="height"]').val())*parseInt($('input[name="height"]').val())/10000);
					
					if(bmi <= 18.5){
						score += 15;
						$('#resultanalysis').append("<li>YOU ARE UNDER OPTIMUM WEIGHT FOR YOUR HEIGHT. This may increase your risk for health problems. Check with your health care provider to see if you should try to gain weight. If you have recently lost weight, have health problems, or have difficulties with eating, speak with your health care provider.</li>");
					}
					else if(bmi <= 24.9){
						score += 20;
						$('#resultanalysis').append("<li>YOU HAVE A HEALTHY WEIGHT FOR YOUR HEIGHT.</li>");
					}
					else if(bmi <= 29.9){
						score += 10;
						$('#resultanalysis').append("<li>YOU ARE OVER OPTIMUM WEIGHT FOR YOUR HEIGHT. YOU MAY BE FACING HEALTH PROBLEMS. SO LOSING SOME WEIGHT WOULD BE A GOOD IDEA.</li>");
					}
					else{
						score += 3;
						$('#resultanalysis').append("<li>YOU ARE OVER OPTIMUM WEIGHT FOR YOUR HEIGHT. YOU MAY BE FACING HEALTH RISK. SO SEE YOU DOCTOR TO HELP YOU ACHIEVE A HEALTHIER WEIGHT.</li>");
					}
					
					var stress_score = $('input[name="stress"]:checked').val();
					score += parseInt(stress_score);
					
					if($('input[name="stress"]:checked').val()=='2')
						$('#resultanalysis').append("<li>It makes no sense to worry about things you have no control over because there's nothing you can do about them. You must learn to let go. Release the stress. </li>");
						
					score += parseInt($('input[name="happy"]:checked').val());
					score += parseInt($('input[name="exercise"]:checked').val());
					if($('input[name="exercise"]:checked').val()=='2')
						$('#resultanalysis').append("<li>You will continue to burn fat after you jog. People who run at least four hours a week will burn more calories than non-runners. Go Do Something That Makes You SWEAT!</li>");
					score += parseInt($('input[name="working"]:checked').val());
					if($('input[name="working"]:checked').val()=='1')
						$('#resultanalysis').append("<li>It is important to have balance in your life between work, friends and family. Always remember : Work Life Balance. 8 HOURS LABOUR, 8 HOURS RECREATION, 8 HOURS REST </li>");
					score += parseInt($('input[name="eatbreakfast"]:checked').val());
					if($('input[name="eatbreakfast"]:checked').val()=='3')
						$('#resultanalysis').append("<li>People who eat breakfast have an easier time focusing and are more productive throughout the morning than people who skip breakfast. A healthy breakfast can provide your body with the nutrients that you need to stay energized for several hours and therefore may participate in more physical activity than people who skip breakfast. Skipping breakfast can make you feel grumpy and fatigued throughout the day. Taking just 10 minutes to eat something in the morning can really improve your mood.</li>");
					score += parseInt($('input[name="sleep"]:checked').val());
					if($('input[name="sleep"]:checked').val()=='2')
						$('#resultanalysis').append("<li>Chronic insomnia can even contribute to serious health problems. Simple changes to your lifestyle and daily habits can put a stop to sleepless nights.</li>");
					score += parseInt($('input[name="smoker"]:checked').val());
					if($('input[name="smoker"]:checked').val()=='0')
						$('#resultanalysis').append("<li>SMOKING KILLS. If you're killed, you've lost a very important part of your life.</li>");
					score += parseInt($('input[name="alcoholic"]:checked').val());
					if($('input[name="alcoholic"]:checked').val()=='0')
						$('#resultanalysis').append("<li>Quitting drinking can be a very long and difficult process. It is not impossible and you should not give up. While you are quitting drinking it is important to stay strong, get support and seek treatment when needed. </li>");
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
					
					$('#resultanalysis').append("<li>FILL HALF OF YOUR PLATE WITH VEGETABLES AND FRUITS. THE MORE COLOR, AND THE MORE VARIETY, THE BETTER. </li>");
					$('#resultanalysis').append("<li>PICK A HEALTHY SOURCE OF PROTEIN AND ALSO TAKE SOME WHOLE GRAIN FOOD.</li>");
					$('#resultanalysis').append("<li>SMALL AMOUNTS OF FATS, OILS AND SUGAR ARE ACCEPTABLE.</li>");
					
					
					//finish calculate
					$('#scorespan').text(score);
					
					if(score > 80)
					{
						$('#scorespan').addClass("text-success");
						$('.result').prepend("<h1 class='text-success'>Congratulation!!!</h1>");
						$('.progress-bar').addClass("progress-bar-success");
					}
					else if(score > 60)
					{
						$('#scorespan').addClass("text-primary");
						$('.result').prepend("<h1 class='text-primary'>Not bad.</h1>");
						$('.progress-bar').addClass("progress-bar-primary");
					}
					else if(score > 40)
					{
						$('#scorespan').addClass("text-warning");
						$('.result').prepend("<h1 class='text-warning'>OOPS....</h1>");
						$('.progress-bar').addClass("progress-bar-warning");
					}
					else 
					{
						$('#scorespan').addClass("text-danger");
						$('.result').prepend("<h1 class='text-danger'>CAUTION!!!</h1>");
						$('.progress-bar').addClass("progress-bar-danger");
					}
						
					$('.result').fadeIn(500, function(){
						$('.progress-bar').css('width', ''+score+'%');
						
						var data = google.visualization.arrayToDataTable([
						  ['Date', 'Score'],
						  <?php foreach($result as $r){ ?>["<?php echo $r['date']?>", <?php echo $r['healthlevel']?>],
						  <?php } ?>["<?php echo date("Y-m-d")?>", score],
						  ["<?php echo date("Y-m-d", time()+86400);?>", 0]
						]);

						var options = {
						  title: 'Score record',
						  hAxis: {title: 'Date',  titleTextStyle: {color: '#333'}},
						  vAxis: {title: 'Score', minValue: 0, maxValue: 100}
						};
						
						chart.draw(data, options);
					});
					
					$.post('messageAJAX.php', {
						userid: <?php if(isset($_SESSION['id']))echo $_SESSION['id'];else echo 0 ?>,
						happy: ($('input[name="happy"]:checked').val()=='5'),
						stress: ($('input[name="stress"]:checked').val()=='2'),
						sleep: ($('input[name="sleep"]:checked').val()=='2'),
						healthlevel: score,
						action: 'addTracking'
					},function(data,status){
						console.log('ksn');
					});	
				});
			});
			
			
		});
	});
	
</script>

    