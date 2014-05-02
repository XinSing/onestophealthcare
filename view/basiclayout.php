<!DOCTYPE html>
<html>
<head>
	<title>One stop health care</title>
	<?php foreach($js as $js){?>
	<script type='text/javascript' src='/onestophealthcare/res/js/<?php echo $js ?>.js'></script>
	<?php } ?>
	<?php foreach($css as $css){?>
	<link rel="stylesheet" type="text/css" href="/onestophealthcare/res/css/<?php echo $css ?>.css" />
	<?php } ?>
	<style>
		.topheader img{
			width:98vw;
		}
		
		
/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  height: 500px;
  margin-bottom: 60px;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel .item {
  height: 500px;
  background-color: #777;
}
.carousel-inner > .item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 500px;
}
	</style>
</head>
<body>
<div class="topheader">
<img src='/onestophealthcare/res/img/logo.png' />
</div>
<div class="navbar navbar-default" style='margin-bottom:0;'>
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Information Kiosk <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Healthy Kids</a></li>
          <li><a href="#">Healthy Adult and Middle-Age People</a></li>
          <li><a href="#">Healthy Senior Citizens</a></li>
		  <li><a href="#">Healthy Pregnancy</a></li>
          <li><a href="#">Disease Session</a></li>
		  <li><a href="#">Herbal Corner</a></li>
		  <li><a href="#">Knowledge of Exercise and Keep Fit</a></li>
		  <li><a href="#">Knowledge of Beauty</a></li>
		  <li><a href="#">Health Video</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stress Management<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Symptom of Stress</a></li>
          <li><a href="#">How to Manage Stress</a></li>
          <li><a href="#">How to Get Rid of Bad Habits</a></li>
          <li><a href="#">Stress Release Video</a></li>
		  <li><a href="#">Sleeping Tips</a></li>
          <li><a href="#">Step-By-Step Learning Yoga</a></li>
		  <li><a href="#">Details and Benefit of Each Yoga Style</a></li>
		  <li><a href="#">Yoga Learning Video</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Healthy Food Guide <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Recipe Collection and Healthy Cooking</a></li>
          <li><a href="#">Food Nutrition</a></li>
          <li><a href="#">Diet and Health</a></li>
          <li><a href="#">Food News</a></li>
          <li><a href="#">Food Taboos</a></li>
		  <li><a href="#">Maternal and Child Health Diet</a></li>
		  <li><a href="#">Disease Condition Regimen Recipe</a></li>
		  <li><a href="#">Food Pyramid</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Self-Improvement<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Exercise Your Brain</a></li>
          <li><a href="#">Children Corner</a></li>
          <li><a href="#">Healthy Diary</a></li>
          <li><a href="#">Track My Progress</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">History<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Information Kiosk</a></li>
          <li><a href="#">Stress Management Corner</a></li>
          <li><a href="#">Healthy Food Guide</a></li>
          <li><a href="#">Self-Improvement and Self-Tracking Corner</a></li>
          <li><a href="#">Recommendation</a></li>
		  <li><a href="#">Advance Search</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recommandation <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Hospital</a></li>
          <li><a href="#">Clinic</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">First Aid<b class="caret"></b></a>
        <ul class="dropdown-menu" style='right:0;left:auto;'>
          <li><a href="#">Heart Attacks</a></li>
          <li><a href="#">Chect Pain</a></li>
          <li><a href="#">Burn</a></li>
          <li><a href="#">Cuts</a></li>
          <li><a href="#">Stroke</a></li>
		  <li><a href="#">Resuscitation</a></li>
		  <li><a href="#">Abdominal Injuries</a></li>
		  <li><a href="#">Asthma</a></li>
		  <li><a href="#">Allergic Reaction</a></li>
		  <li><a href="#">Bites & Stings</a></li>
		  <li><a href="#">Choking</a></li>
		  <li><a href="#">Eyes Injuries</a></li>
		  <li><a href="#">Fractures & Dislocations</a></li>
		  <li><a href="#">Head Injuries</a></li>
		  <li><a href="#">Mouth & Tooth Injuries</a></li>
		  <li><a href="#">Poisoning</a></li>
		  <li><a href="#">Calling Ambulance</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div><!-- end of navbar -->


<?php echo $content ?>
<div class = 'container'>
<?php echo $footer ?>
	<a href="http://facebook.com/onestophealthcare"><img title="facebook" src="/onestophealthcare/res/img/facebook.jpg" alt="Facebook" width="50" height="50"/></a>
	<img src="/onestophealthcare/res/img/FacebookLogo.jpg" width="50" height="50";>
</div>
 
</body>
</html>