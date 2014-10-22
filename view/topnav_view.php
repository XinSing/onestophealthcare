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
		<?php if(isset($_SESSION['type']) && $_SESSION['type'] == 'admin'){ ?>
        <a href="admin.php">Home</a>
		<?php } else { ?>
        <a href="index.php">Home</a>
		<?php } ?>
      </li>
      <li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Articles <b class="caret"></b></a>
        <ul class="dropdown-menu">
		  
		  <?php
		  foreach($article_category as $ac){
			echo "<li><a href='article.php?category=$ac[id]'>$ac[category]</a></li>";
		  }
		  ?>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Videos <b class="caret"></b></a>
        <ul class="dropdown-menu">
		  <?php
		  foreach($videos as $v){
			echo "<li><a href='video.php?vid=$v[id]'>$v[title]</a></li>";
		  }
		  ?>
        </ul>
      </li>
     
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Self-Improvement<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="quiz.php">Exercise Your Brain</a></li>
          <li><a href="game.php">Children Corner</a></li>
        </ul>
      </li>
      <li >
        <a href="hospital.php">Recommendation</a> 
      </li>
	   <li>
        <a href="#">Food Pyramid </a>
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