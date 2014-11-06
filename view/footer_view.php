<div class = 'container' style='margin-top:20px;'>
Copyright Xinsing
	<a href="http://facebook.com/onestophealthcare"><img title="facebook" src="/onestophealthcare/res/img/facebook.jpg" alt="Facebook" height="50"/></a>
	<img src="/onestophealthcare/res/img/FacebookLogo.jpg" height="50">

</div>
	<?php if(isset($_SESSION['type']) && $_SESSION['type'] == 'user') { ?>
		<div class="container">
			<div class="component">
				<!-- Start Nav Structure -->
				<button class="cn-button" id="cn-button" style='outline:none'>Menu</button>
				<div class="cn-wrapper" id="cn-wrapper">
				    <ul>
				      <li><a href="index.php"><span class="icon-star"></span></a></li>
				      <li><a href="article.php"><span class="icon-info-sign"></span></a></li>
				      <li><a href="profile.php"><span class="icon-home"></span></a></li>
				      <li><a href="video.php"><span class="icon-play-circle"></span></a></li>
				      <li><a href="logout.php"><span class="icon-off"></span></a></li>
				     </ul>
				</div>
				<div id="cn-overlay" class="cn-overlay"></div>
				<!-- End Nav Structure -->
			</div>
		</div><!-- /container -->
		<script src="/onestophealthcare/res/js/btm-nav.js"></script>
	<?php } ?>
</body>
</html>