 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
		
      </ol>
      <div class="carousel-inner">
	  
        <div class="item active">
          <img src="/onestophealthcare/res/img/SlideOne.png" alt="First slide">
          <div class="container">
          </div>
        </div>
		
		<div class="item">
          <img src="/onestophealthcare/res/img/SlideTwo.png" alt="Second slide">
          <div class="container">
          </div>
        </div>
		
		<div class="item">
          <img src="/onestophealthcare/res/img/SlideThree.png" alt="Third slide">
          <div class="container">
          </div>
        </div>
		
		<div class="item">
          <img src="/onestophealthcare/res/img/SlideFour.png" alt="Fourth slide">
          <div class="container">
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class='fa fa-arrow-left'></i></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class='fa fa-arrow-right'></i></a>
    </div><!-- /.carousel -->

	<style>
		
/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  height: 430px;
  margin-bottom: 60px;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel .item {
  height: 430px;
  background-color: #777;
}
.carousel-inner > .item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 430px;
}	

.carousel .right i.fa{
width: 100px;
height: 100px;
margin-top: -15px;
margin-left: -15px;
font-size: 100px;
right: 20%;
}

.carousel .left i.fa{
width: 100px;
height: 100px;
margin-top: -15px;
margin-right: -15px;
font-size: 100px;
left: 20%;
}
.carousel i.fa{
position: absolute;
top: 45%;
z-index: 5;
display: inline-block;
}
	</style>