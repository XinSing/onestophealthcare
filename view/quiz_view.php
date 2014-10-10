<div class='container'>
<h1 class = 'text-success'>Quizzes: How Well You Know About Health?</h1>
<div class="jumbotron">
	<h3>Progress: <small class='pull-right'>Question <span id='questionnumber'>1</span> of <span id='totalQ'></span></small></h3>
	<div class="progress progress-striped active">
	  <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
	  </div>
	</div>
	
	<!-- question 1 -->
	<div class='ques' id='q1'>
		<h2>1) On average, what percentage of your sleeping hours is spent dreaming? </h2>
		<div style='margin-left:60px;'>
			<!-- Answer 1 -->
			<div class="radio">
			  <label>
				<input type="radio" name="option1" value="0" checked>  <!-- 0 for wrong answer -->
				5%-10% 
			  </label>
			</div>
			<!-- Answer 2 -->
			<div class="radio">
			  <label>
				<input type="radio" name="option1" value="1">   <!-- 1 for true answer -->
				20%-25% 
			  </label>
			</div>
			<!-- Answer 3 -->
			<div class="radio">
			  <label>
				<input type="radio" name="option1" value="0">
				45%-50% 
			  </label>
			</div>
			<!-- Answer 4 -->
			<div class="radio">
			  <label>
				<input type="radio" name="option1" value="0">
				65%-70% 
			  </label>
			</div>
		</div>
		<p style='display:none'>
			<span class="label label-success" style='display:none'><span class="glyphicon glyphicon-ok"></span> Correct!</span> <span class="label label-danger" style='display:none'><span class="glyphicon glyphicon-remove"></span> Incorrect!</span> > On average, 20% to 25% of your sleep is a dream state. For most people, that is more than two hours of dreaming every night. 
		</p>
	</div>
	
	
	<!-- question 2 -->
	<div class='ques' id='q2' style='display:none'>
		<h2>2) Which of these can cause insomnia? </h2>
		<div style='margin-left:60px;'>
			<div class="radio">
			  <label>
				<input type="radio" name="option2" value="0" checked>
				A cool bedroom 
			  </label>
			</div>
			<div class="radio">
			  <label>
				<input type="radio" name="option2" value="1">
				A late dinner
			  </label>
			</div>
			<div class="radio">
			  <label>
				<input type="radio" name="option2" value="0">
				Going to bed at the same time every night
			  </label>
			</div>
			<div class="radio">
			  <label>
				<input type="radio" name="option2" value="0">
				All of the above 
			  </label>
			</div>
		</div>
		<p style='display:none'>
			<span class="label label-success" style='display:none'><span class="glyphicon glyphicon-ok"></span> Correct!</span> <span class="label label-danger" style='display:none'><span class="glyphicon glyphicon-remove"></span> Incorrect!</span> > A heavy meal late in the day can keep you up at night. Jacking up the heat is also a bad idea. Keep your bedroom dark, quiet, and cool. A fan can cool it and drown out noise, if that's a problem. Some allergy, cold, and asthma medicines are other surprising sleep killers.
		</p>
	</div>
	
	
	<!-- question 3 -->
	<div class='ques' id='q3' style='display:none'>
		<h2>3) You need at least how much sleep each night? </h2>
		<div style='margin-left:60px;'>
			<div class="radio">
			  <label>
				<input type="radio" name="option3" value="0" checked>
				Five hours
			  </label>
			</div>
			<div class="radio">
			  <label>
				<input type="radio" name="option3" value="0">
				Six hours
			  </label>
			</div>
			<div class="radio">
			  <label>
				<input type="radio" name="option3" value="1">
				Seven hours 
			  </label>
			</div>
			<div class="radio">
			  <label>
				<input type="radio" name="option3" value="0">
				Eight hours
			  </label>
			</div>
		</div>
		<p style='display:none'>
			<span class="label label-success" style='display:none'><span class="glyphicon glyphicon-ok"></span> Correct!</span> <span class="label label-danger" style='display:none'><span class="glyphicon glyphicon-remove"></span> Incorrect!</span> > Only a tiny portion of people can get by on six hours of sleep. Those who claim to function well on four hours are likely deluding themselves. Most adults need seven or more hours of sleep a night.
		</p>
	</div>
	
	<div class='ques' id='q4' style='display:none'>
		<h2> 4) Sleepwalking isn`t dangerous </h2>
		<div style='margin-left:60px;'>
			<div class="radio">
			  <label>
				<input type="radio" name="option4" value="0" checked>
				True 
			  </label>
			</div>
			<div class="radio">
			  <label>
				<input type="radio" name="option4" value="1">
				False 
			  </label>
			</div>
			
		</div>
		<p style='display:none'>
			<span class="label label-success" style='display:none'><span class="glyphicon glyphicon-ok"></span> Correct!</span> <span class="label label-danger" style='display:none'><span class="glyphicon glyphicon-remove"></span> Incorrect!</span> >  Sleepwalking is more common in kids than adults. But it can involve very complex -- and sometimes dangerous -- behaviors. A sleepwalker may drive a car, climb out a window, move furniture, or eat and get back in bed ¨C all without ever waking up. It's a good idea to tell your doctor if you sleepwalk. Sleepwalking appears to run in families, but it may happen if you're fatigued, stressed, or with alcohol use.
		</p>
	</div>
	
	<div id='complete' style='display:none' >
		You have completed all questions.<br/>
		You scored 
	</div>
	<p class='text-right'><a class="btn btn-primary btn-lg" role="button" id='btnnext'>Continue</a></p>
</div>

</div>

<script>
	var currQ = 3;
	var correct = 0;
	var totalQ = 0;
	while($('#q'+(currQ-1)/2).length == 1)
	{
		currQ += 2;
		totalQ++;
	}
	$('#totalQ').text(totalQ);
	
	currQ = 3;
	$('#btnnext').click(function(){
		if(currQ % 2 == 0)
		{
			$('#q'+(currQ-2)/2).fadeOut(function(){
				if($('#q'+(currQ-1)/2).length == 1)
				{
					$('#q'+(currQ-1)/2).show();
					$('#questionnumber').text((currQ-1)/2);
				}
				else
				{
					$('#btnnext').fadeOut(function(){
						$('#complete').append(correct+' out of '+ (currQ-3)/2 + ' questions');
						$('#complete').fadeIn();
					});
				}
			});
		}
		else
		{
			if($('#q'+(currQ-1)/2).find('input[type="radio"]:checked').val() == 1)
			{
				$('#q'+(currQ-1)/2).find('.label-success').show();
				correct++;
			}
			else
			{
				$('#q'+(currQ-1)/2).find('.label-danger').show();
			}
			$('#q'+(currQ-1)/2).find('p').fadeIn();
		}
		$('.progress-bar').css('width', (currQ-2)/(totalQ*2)*100+'%')
		currQ++;
	});
</script>