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
        <a href="index.php">Home</a>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Articles<b class="caret"></b></a>
        <ul class="dropdown-menu">
		  <?php
		  foreach($article_category as $ac){
			echo "<li><a href='article.php?category=$ac[id]'>$ac[category]</a></li>";
		  }
		  ?>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Videos<b class="caret"></b></a>
        <ul class="dropdown-menu">
		  <?php
		  foreach($videos as $v){
			echo "<li><a href='video.php?vid=$v[id]'>$v[title]</a></li>";
		  }
		  ?>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Healthy Food Guide <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Recipe Collection and Healthy Cooking</a></li>
          <li><a href="food_nutrition.php">Food Nutrition</a></li>
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
          <li><a href="quiz.php">Exercise Your Brain</a></li>
          <li><a href="#">Children Corner</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recommendation <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Hospital</a></li>
          <li><a href="#">Clinic</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">First Aid<b class="caret"></b></a>
        <ul class="dropdown-menu" style='right:0;left:auto;'>
          <li><a href="#">Heart Attacks</a></li>
          <li><a href="#">Chest Pain</a></li>
          <li><a href="#">Burn</a></li>
          <li><a href="#">Cuts</a></li>
          <li><a href="#">Stroke</a></li>
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
	<form class="navbar-form navbar-right" role="search" action='search.php' method='GET'>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name='keyword' required>
      </div>
      <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    </form>
  </div>
</div><!-- end of navbar -->