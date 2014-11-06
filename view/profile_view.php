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
				<h2>Live Chat</h2>
				<li><h4>Chatting lively with a group of health professional adviser</h4></li>
				<li><h4>Get advice about your health problem immediately</h4></li>
				<li><h4>Available from 6.00pm to 10.00pm DAILY</h4></p>
				<br>
				<p><a href="chat.php" class="btn btn-danger" role="button">Start Chat</a> </p>
			  </div>
			</div>
		</div>
		<div class='col-sm-6 col-md-3'>
			<div class="thumbnail">
			  <img src="/onestophealthcare/res/img/songtherapy.jpg" >
			  <div class="caption">
				<h2>Song Therapy</h2>
				<li><h4>Music plays an important and powerful role in our life </h4></li>
				<li><h4>Music can improve quality of life and release stress</h4></li>
				<li><h4>Suitable songs will be suggested according to your health level analysis</h4></li>
				<p><a href="profile_song.php" class="btn btn-warning" role="button">Song</a> </p>
			  </div>
			</div>
		</div>
		<div class='col-sm-6 col-md-3'>
			<div class="thumbnail">
			  <img src="/onestophealthcare/res/img/self-tracking.jpg" >
			  <div class="caption">
				<h2>Self-Tracking</h2>
				<li><h4>Allowing you to keep track of what you are eating daily</h4></li>
				<li><h4>Calculation of BMI to keep track of your weight status and health level</h4></li>
			    <li><h4>A healthy food plate will be suggested </h4></li>
				
				
				<p><a href="selftracking.php" class="btn btn-info" role="button">Self-Tracking</a> </p>
			  </div>
			</div>
		</div>

	</div>
<style>
.thumbnail{
	height : 480px;
}
</style>