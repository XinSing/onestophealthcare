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
<img src='/onestophealthcare/res/img/background.jpg' />
</div>
<div class="navbar navbar-default" style='position:sticky;'>
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
		  <li><a href="#">Video</a></li>
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
          <li><a href="#">Recipe Collection and Menus</a></li>
          <li><a href="#">Healthy Cooking</a></li>
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
		  <li><a href="#">Forum</a></li>
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
</div>

 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel --><div class = 'container'>
<?php echo $footer ?>
</div>
</body>
</html>