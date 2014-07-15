<div class='container'>
		<h2 class='pull-left' style='width:100%'>Welcome, <?php echo $_SESSION['user'] ?><a href="logout.php" class='btn btn-success pull-right'>Log Out</a></h2>
		
	<div class='row'>
		<br>
		<br>
		<br>
		<br>
		<div class='col-sm-6 col-md-3'>
			<div class="thumbnail">
			  <img src="/onestophealthcare/res/img/forum.jpg" >
			  <div class="caption">
				<h2>FORUM Access</h2>
				<li><h4>Exchange intellectual,ideas and opinion with others</h4></li>
				<li><h4>Allowing you to get latest and updated health information and events</h4></li>
				<li><h4>Allowing you to build relationship with visitors</h4></li>
				<p><a href="forum.php" class="btn btn-primary" role="button">Go to Forum</a></p>
			  </div>
			</div>
		</div>
		<div class='col-sm-6 col-md-3'>
			<div class="thumbnail">
			  <img src="/onestophealthcare/res/img/livechat.png">
			  <div class="caption">
				<h2>Live Chatting</h2>
				<li><h4>Chatting lively with a group of health professional adviser</h4></li>
				<li><h4>The health professional adviser may be doctors, pharmacist or nutritionist</h4></li>
				<li><h4>Get advice about your health problem immediately</h4></p>
				<p><a href="chat.php" class="btn btn-danger" role="button">Start Chat</a> </p>
			  </div>
			</div>
		</div>
		<div class='col-sm-6 col-md-3'>
			<div class="thumbnail">
			  <img src="/onestophealthcare/res/img/history.png" >
			  <div class="caption">
				<h2>History</h2>
				<li><h4>Allowing you to view back the important information that have been previously search for</h4></li>
				<li><h5>View by Date and Time</h5></li>
				<li><h5>View by Alphabet</h5></li>
				<li><h5>View by Module</h5></li>
				<p><a href="history.php" class="btn btn-warning" role="button">History</a> </p>
			  </div>
			</div>
		</div>
		<div class='col-sm-6 col-md-3'>
			<div class="thumbnail">
			  <img src="/onestophealthcare/res/img/self-tracking.jpg" >
			  <div class="caption">
				<h2>Self-Tracking</h2>
				<li><h4>Allowing you to keep track of what you are eating daily</h4></li>
				<li><h4>Calculation of BMI, daily nutrition consumption and health level </h4></li>
				<li><h5>Health Diary</h5></li>
				<li><h5>Track My Progress</h5></li>
				
				<p><a href="selftracking.php" class="btn btn-info" role="button">Self-Tracking</a> </p>
			  </div>
			</div>
		</div>

	</div>
</div>
<a href="profile_song.php" class='btn btn-primary pull-right'>Song</a>
<style>
.thumbnail{
	height : 480px;
}
</style>