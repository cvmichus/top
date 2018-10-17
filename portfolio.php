<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Bingo One page parallax responsive HTML Template ">
  
  <meta name="author" content="Themefisher.com">

 <title>TopComputing |  Servicios de Impresion</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/top-64.ico" />
  
  <!-- CSS
  ================================================== -->
  <!-- RS5.0 Main Stylesheet -->
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/settings.css">
  <!-- RS5.0 Layers and Navigation Styles -->
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/layers.css">
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/navigation.css">
  <!-- REVOLUTION STYLE SHEETS -->
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/fonts/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/settings.css">
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/layers.css">
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/navigation.css"> 
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="plugins/lightbox2/dist/css/lightbox.min.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">


  <!-- Colors -->
  <link rel="stylesheet" type="text/css" href="css/colors/green.css" title="green">
  <link rel="stylesheet" type="text/css" href="css/colors/red.css" title="light-red">
  <link rel="stylesheet" type="text/css" href="css/colors/blue.css" title="blue">
  <link rel="stylesheet" type="text/css" href="css/colors/light-blue.css" title="light-blue">
  <link rel="stylesheet" type="text/css" href="css/colors/yellow.css" title="yellow">
  <link rel="stylesheet" type="text/css" href="css/colors/light-green.css" title="light-green">

  <script src="js/modernizr-custom.js"></script>
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />

</head>
<style type="text/css" media="screen">
.grid {
  position: relative;
  margin: 0 auto;
}

.js .grid::after {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
  background: #252323 url(../img/loading.svg) no-repeat 50% 75px;
  background-size: 60px auto;
  -webkit-transition: opacity 0.3s;
  transition: opacity 0.3s;
}

.js .grid--loaded::after {
  opacity: 0;
}

.grid__item {
  width: 270px;
  padding: 10px;
}

.grid__item--current {
  opacity: 0 !important;
}

.img-wrap {
  display: block;
}

.img-wrap:focus,
.img-wrap:hover {
  outline: none;
}

.img-wrap img {
  display: block;
  max-width: 100%;
}

.preview {
  position: fixed;
  z-index: 1000;
  top: 0;
  left: 0;
  display: -ms-flex;
  display: -webkit-flex;
  display: flex;
  -ms-flex-pack: center;
  -webkit-justify-content: center;
  justify-content: center;
  -ms-flex-line-pack: center;
  -webkit-align-content: center;
  align-content: center;
  -ms-flex-align: start;
  -webkit-align-items: flex-start;
  align-items: flex-start;
  width: 100%;
  height: 75%;
  pointer-events: none;
}

.preview::before {
  content: '';
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  opacity: 0;
  background: #1f1d1d;
  -webkit-transition: opacity 0.6s;
  transition: opacity 0.6s;
}

.preview--open {
  pointer-events: auto;
}

.preview--open::before {
  opacity: 1;
}

.clone {
  position: fixed;
  z-index: 110;
  -webkit-transition: -webkit-transform 0.6s cubic-bezier(0.5, 1, 0.2, 1);
  transition: transform 0.6s cubic-bezier(0.5, 1, 0.2, 1);
  -webkit-backface-visibility: hidden;
}

.original {
  position: relative;
  z-index: 120;
  display: block;
  margin: auto 0;
  object-fit: contain;
  -webkit-transition: opacity 0.2s;
  transition: opacity 0.2s;
  -webkit-backface-visibility: hidden;
}

.preview--open .animate {
  /* open */
  -webkit-transition: -webkit-transform 0.6s, opacity 0.2s;
  transition: transform 0.6s, opacity 0.2s;
}

.animate {
  /* close */
  -webkit-transition: -webkit-transform 0.3s, opacity 0.2s;
  transition: transform 0.3s, opacity 0.2s;
}

.description {
  color: #fff;
}

.js .description--grid {
  display: none;
}

.description--preview {
  font-size: 1.15em;
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  z-index: 140;
  height: 25vh;
  padding: 1.05em 0 0;
  text-align: center;
  opacity: 0;
  -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
  transition: opacity 0.3s, transform 0.3s;
  -webkit-transform: translate3d(0, 30px, 0);
  transform: translate3d(0, 30px, 0);
}

.preview--open .description--preview {
  opacity: 1;
  -webkit-transition-delay: 0.2s;
  transition-delay: 0.2s;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}


/* Close button */

.action {
  font-size: 1.5em;
  margin: 0;
  padding: 0;
  cursor: pointer;
  vertical-align: top;
  color: #6bd68a;
  border: none;
  background: none;
}

.action:hover,
.action:focus {
  color: #6bd68a;
  outline: none;
}

.action--close {
  position: fixed;
  z-index: 150;
  top: 0;
  right: 0;
  padding: 1em;
  opacity: 0;
  -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
  transition: opacity 0.3s, transform 0.3s;
  -webkit-transform: scale3d(0.6, 0.6, 1);
  transform: scale3d(0.6, 0.6, 1);
}

.action--nav {
  position: absolute;
  top: 0;
  height: 100%;
  padding: 0.15em 1em;
  opacity: 0;
  -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
  transition: opacity 0.3s, transform 0.3s;
}

.action--navprev {
  left: 0;
  -webkit-transform: translate3d(-10px, 0, 0);
  transform: translate3d(-10px, 0, 0);
}

.action--navnext {
  right: 0;
  -webkit-transform: translate3d(10px, 0, 0);
  transform: translate3d(10px, 0, 0);
}

.preview--open .action--nav {
  opacity: 1;
  -webkit-transition-delay: 0.85s;
  transition-delay: 0.85s;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}

.preview--image-loaded .action--close {
  opacity: 1;
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
}

.text-hidden {
  position: absolute;
  display: block;
  overflow: hidden;
  width: 0;
  height: 0;
  color: transparent;
}


/* Dummy thumbs */

.thumbs {
  position: fixed;
  z-index: 200;
  bottom: 10px;
  left: 50%;
  overflow: hidden;
  width: 100%;
  width: 100%;
  max-width: 790px;
  height: 5vw;
  min-height: 65px;
  margin-top: auto;
  padding: 0 4em;
  text-align: center;
  vertical-align: middle;
  pointer-events: none;
  opacity: 0;
  -webkit-transform: translate3d(-50%, 0, 0);
  transform: translate3d(-50%, 0, 0);
}

.preview--open .thumbs {
  pointer-events: auto;
  opacity: 1;
}

.thumbs img {
  position: relative;
  display: inline-block;
  max-height: 100%;
  margin: 0 2px;
  opacity: 0;
  -webkit-transition: -webkit-transform 1s, opacity 1s;
  transition: transform 1s, opacity 1s;
  -webkit-transition-timing-function: cubic-bezier(0.2, 1, 0.3, 1);
  transition-timing-function: cubic-bezier(0.2, 1, 0.3, 1);
  -webkit-transform: translate3d(0, 20px, 0);
  transform: translate3d(0, 20px, 0);
}

.preview--open .thumbs img {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}

.preview--open .thumbs img:nth-of-type(1) {
  -webkit-transition-delay: 0.45s;
  transition-delay: 0.45s;
}

.preview--open .thumbs img:nth-of-type(2) {
  -webkit-transition-delay: 0.5s;
  transition-delay: 0.5s;
}

.preview--open .thumbs img:nth-of-type(3) {
  -webkit-transition-delay: 0.55s;
  transition-delay: 0.55s;
}

.preview--open .thumbs img:nth-of-type(4) {
  -webkit-transition-delay: 0.6s;
  transition-delay: 0.6s;
}

.preview--open .thumbs img:nth-of-type(5) {
  -webkit-transition-delay: 0.65s;
  transition-delay: 0.65s;
}

.preview--open .thumbs img:nth-of-type(6) {
  -webkit-transition-delay: 0.7s;
  transition-delay: 0.7s;
}

.preview--open .thumbs img:nth-of-type(7) {
  -webkit-transition-delay: 0.75s;
  transition-delay: 0.75s;
}

.preview--open .thumbs img:nth-of-type(8) {
  -webkit-transition-delay: 0.8s;
  transition-delay: 0.8s;
}

.preview--open .thumbs img:nth-of-type(9) {
  -webkit-transition-delay: 0.85s;
  transition-delay: 0.85s;
}  
</style>
<body id="body">

 <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div> 
  <!--
  End Preloader
  ==================================== -->


  

<!--
Fixed Navigation
==================================== -->
<header class="navigation navbar navbar-fixed-top">
   <div class="container">
      <div class="navbar-header">
         <!-- responsive nav button -->
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
         <!-- /responsive nav button -->
         <!-- logo -->
         <a class="navbar-brand logo" href="index.html">
            <img class="logo-default" src="images/logo.png" alt="logo" />
            <img class="logo-white" src="images/logo-white.png" alt="logo" />
         </a>
         <!-- /logo -->
      </div>
      <!-- main nav -->
   <?php
include("menu.php");
?>
      <!-- /main nav -->
   </div>
</header>
<!--
End Fixed Navigation
==================================== -->

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Portfolio</h2>
				<ol class="breadcrumb header-bradcrumb">
				  <li><a href="index.html">Home</a></li>
				  <li class="active">Portfolio</li>
				</ol>
			</div>
		</div>
	</div>
</section>



<!-- Start Portfolio Section
		=========================================== -->
		
		<section class="portfolio section-sm" id="portfolio" style="background-color: black">
			<div class="container-fluid">
				<div class="row " >
					<div class="col-lg-12">
					
					<div class="content">
      <div class="grid">
        <div class="grid__item" data-size="1280x853">
          <a href="images/Muestras/Anuncio 01.jpg" class="img-wrap"><img src="images/Muestras/Anuncio 01.jpg" alt="img08" />
            <div class="description description--grid">Anuncio</div>
          </a>
        </div>
        <div class="grid__item" data-size="865x1280">
          <a href="images/Muestras/Anuncio 02.jpg" class="img-wrap"><img src="images/Muestras/Anuncio 02.jpg" alt="img09" />
            <div class="description description--grid">Anuncio</div>
          </a>
        </div>
        <div class="grid__item" data-size="1280x1280">
          <a href="images/Muestras/Anuncio 03.jpg" class="img-wrap"><img src="images/Muestras/Anuncio 03.jpg" alt="img10" />
            <div class="description description--grid">Anuncio</div>
          </a>
        </div>
        <div class="grid__item" data-size="1280x850">
          <a href="images/Muestras/casco 01.jpg" class="img-wrap"><img src="images/Muestras/casco 01.jpg" alt="img11" />
            <div class="description description--grid">CASCO 01</div>
          </a>
        </div>
        <div class="grid__item" data-size="1280x853">
          <a href="images/Muestras/casco 02.jpg" class="img-wrap"><img src="images/Muestras/casco 02.jpg" alt="img01" />
            <div class="description description--grid">CASCO</div>
          </a>
        </div>
        <div class="grid__item" data-size="958x1280">
          <a href="images/Muestras/casco 03.jpg" class="img-wrap"><img src="images/Muestras/casco 03.jpg" alt="img02" />
            <div class="description description--grid">Demesne</div>
          </a>
        </div>
        <div class="grid__item" data-size="837x1280">
          <a href="images/Muestras/corte vinil 01.JPG" class="img-wrap"><img src="images/Muestras/corte vinil 01.JPG" alt="img03" />
            <div class="description description--grid">VINIL</div>
          </a>
        </div>
        <div class="grid__item" data-size="1280x961">
          <a href="images/Muestras/corte vinil 02.JPG" class="img-wrap"><img src="images/Muestras/corte vinil 02.JPG" alt="img04" />
            <div class="description description--grid">Propinquity</div>
          </a>
        </div>
        <div class="grid__item" data-size="1280x1131">
          <a href="images/Muestras/corte vinil 03.JPG" class="img-wrap"><img src="images/Muestras/corte vinil 03.JPG" alt="img05" />
            <div class="description description--grid">Ephemeral</div>
          </a>
        </div>
        <div class="grid__item" data-size="1280x857">
          <a href="images/Muestras/corte vinil 04.JPG" class="img-wrap"><img src="images/Muestras/corte vinil 03.JPG" alt="img06" />
            <div class="description description--grid">Surreptitious</div>
          </a>
        </div>
        <div class="grid__item" data-size="1280x1280">
          <a href="images/Muestras/lona3-5.JPG" class="img-wrap"><img src="images/Muestras/lona3-5.JPG" alt="img07" />
            <div class="description description--grid">Scintilla</div>
          </a>
        </div>
        <div class="grid__item" data-size="1280x853">
          <a href="img/original/8.jpg" class="img-wrap"><img src="img/thumbs/8.jpg" alt="img08" />
            <div class="description description--grid">Vestigial</div>
          </a>
        </div>
        <div class="grid__item" data-size="865x1280">
          <a href="img/original/9.jpg" class="img-wrap"><img src="img/thumbs/9.jpg" alt="img09" />
            <div class="description description--grid">Zephyr</div>
          </a>
        </div>
        <div class="grid__item" data-size="1280x1280">
          <a href="img/original/10.jpg" class="img-wrap"><img src="img/thumbs/10.jpg" alt="img10" />
            <div class="description description--grid">Desideratum</div>
          </a>
        </div>
        <div class="grid__item" data-size="1280x850">
          <a href="img/original/11.jpg" class="img-wrap"><img src="img/thumbs/11.jpg" alt="img11" />
            <div class="description description--grid">Quixotic</div>
          </a>
        </div>
        <div class="grid__item" data-size="1280x853">
          <a href="img/original/8.jpg" class="img-wrap"><img src="img/thumbs/8.jpg" alt="img08" />
            <div class="description description--grid">Vestigial</div>
          </a>
        </div>
        <div class="grid__item" data-size="865x1280">
          <a href="img/original/9.jpg" class="img-wrap"><img src="img/thumbs/9.jpg" alt="img09" />
            <div class="description description--grid">Zephyr</div>
          </a>
        </div>
        <div class="grid__item" data-size="1280x1280">
          <a href="img/original/10.jpg" class="img-wrap"><img src="img/thumbs/10.jpg" alt="img10" />
            <div class="description description--grid">Desideratum</div>
          </a>
        </div>
        <div class="grid__item" data-size="1280x850">
          <a href="img/original/11.jpg" class="img-wrap"><img src="img/thumbs/11.jpg" alt="img11" />
            <div class="description description--grid">Quixotic</div>
          </a>
        </div>
        <div class="grid__item" data-size="1280x853">
          <a href="img/original/1.jpg" class="img-wrap"><img src="img/thumbs/1.jpg" alt="img01" />
            <div class="description description--grid">Assemblage</div>
          </a>
        </div>
        <div class="grid__item" data-size="958x1280">
          <a href="img/original/2.jpg" class="img-wrap"><img src="img/thumbs/2.jpg" alt="img02" />
            <div class="description description--grid">Demesne</div>
          </a>
        </div>
        <div class="grid__item" data-size="837x1280">
          <a href="img/original/3.jpg" class="img-wrap"><img src="img/thumbs/3.jpg" alt="img03" />
            <div class="description description--grid">Felicity</div>
          </a>
        </div>
        <div class="grid__item" data-size="1280x961">
          <a href="img/original/4.jpg" class="img-wrap"><img src="img/thumbs/4.jpg" alt="img04" />
            <div class="description description--grid">Propinquity</div>
          </a>
        </div>
        <div class="grid__item" data-size="1280x1131">
          <a href="img/original/5.jpg" class="img-wrap"><img src="img/thumbs/5.jpg" alt="img05" />
            <div class="description description--grid">Ephemeral</div>
          </a>
        </div>
        <div class="grid__item" data-size="1280x857">
          <a href="img/original/6.jpg" class="img-wrap"><img src="img/thumbs/6.jpg" alt="img06" />
            <div class="description description--grid">Surreptitious</div>
          </a>
        </div>
        <div class="grid__item" data-size="1280x1280">
          <a href="img/original/7.jpg" class="img-wrap"><img src="img/thumbs/7.jpg" alt="img07" />
            <div class="description description--grid">Scintilla</div>
          </a>
        </div>
        <div class="grid__item" data-size="1280x853">
          <a href="img/original/8.jpg" class="img-wrap"><img src="img/thumbs/8.jpg" alt="img08" />
            <div class="description description--grid">Vestigial</div>
          </a>
        </div>
        <div class="grid__item" data-size="865x1280">
          <a href="img/original/9.jpg" class="img-wrap"><img src="img/thumbs/9.jpg" alt="img09" />
            <div class="description description--grid">Zephyr</div>
          </a>
        </div>
        <div class="grid__item" data-size="1280x1280">
          <a href="img/original/10.jpg" class="img-wrap"><img src="img/thumbs/10.jpg" alt="img10" />
            <div class="description description--grid">Desideratum</div>
          </a>
        </div>
        <div class="grid__item" data-size="1280x850">
          <a href="img/original/11.jpg" class="img-wrap"><img src="img/thumbs/11.jpg" alt="img11" />
            <div class="description description--grid">Quixotic</div>
          </a>
        </div>
      </div>
      <!-- /grid -->
      <div class="preview">
        <button class="action action--close"><i class="fa fa-times"></i><span class="text-hidden">Close</span></button>
        <div class="thumbs">
          <button class="action action--nav action--navprev"><i class="fa fa-chevron-left"></i><span class="text-hidden">Previous</span></button>
          <img src="img/thumbs_dummies/1.jpg" alt="01" />
          <img src="img/thumbs_dummies/2.jpg" alt="02" />
          <img src="img/thumbs_dummies/3.jpg" alt="03" />
          <img src="img/thumbs_dummies/4.jpg" alt="04" />
          <img src="img/thumbs_dummies/5.jpg" alt="05" />
          <img src="img/thumbs_dummies/6.jpg" alt="06" />
          <img src="img/thumbs_dummies/7.jpg" alt="07" />
          <img src="img/thumbs_dummies/8.jpg" alt="08" />
          <img src="img/thumbs_dummies/9.jpg" alt="09" />
          <button class="action action--nav action--navnext"><i class="fa fa-chevron-right"></i><span class="text-hidden">Next</span></button>
        </div>
        <div class="description description--preview"></div>
      </div>

						
					</div> <!-- /end col-lg-12 -->
				</div> <!-- end row -->
			</div>	<!-- end container -->
		</section>   <!-- End section -->





<?php
include("pie.php");
?>


    <!-- end Footer Area
    ========================================== -->


    
    <!-- 
    Essential Scripts
    =====================================-->
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Google Map -->
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script  src="plugins/google-map/gmap.js"></script>
    <!-- Bootstrap 3.7 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Parallax -->
    <script src="plugins/parallax/jquery.parallax-1.1.3.js"></script>
    <!-- lightbox -->
    <script src="plugins/lightbox2/dist/js/lightbox.min.js"></script>
    <!-- Owl Carousel -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Portfolio Filtering -->
    <script src="plugins/mixitup/dist/mixitup.min.js"></script>
    <!-- Smooth Scroll js -->
    <script src="plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    
    <!-- Custom js -->
    <script src="js/script.js"></script>

    <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/masonry.pkgd.min.js"></script>
  <script src="js/classie.js"></script>
  <script src="js/main.js"></script>
  <script>
    (function() {
      var support = { transitions: Modernizr.csstransitions },
        // transition end event name
        transEndEventNames = { 'WebkitTransition': 'webkitTransitionEnd', 'MozTransition': 'transitionend', 'OTransition': 'oTransitionEnd', 'msTransition': 'MSTransitionEnd', 'transition': 'transitionend' },
        transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
        onEndTransition = function( el, callback ) {
          var onEndCallbackFn = function( ev ) {
            if( support.transitions ) {
              if( ev.target != this ) return;
              this.removeEventListener( transEndEventName, onEndCallbackFn );
            }
            if( callback && typeof callback === 'function' ) { callback.call(this); }
          };
          if( support.transitions ) {
            el.addEventListener( transEndEventName, onEndCallbackFn );
          }
          else {
            onEndCallbackFn();
          }
        };

      new GridFx(document.querySelector('.grid'), {
        imgPosition : {
          x : 1,
          y : -0.75
        },
        onOpenItem : function(instance, item) {
          var win = {width: window.innerWidth, height: window.innerHeight};
          instance.items.forEach(function(el) {
            if(item != el) {
              var delay = Math.floor(Math.random() * 130);
              el.style.WebkitTransition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), -webkit-transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
              el.style.transition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
              
              var elOffset = el.getBoundingClientRect(),
                elSize = {width : el.offsetWidth, height : el.offsetHeight};

              el.style.WebkitTransform = 'translate3d(' + (win.width/2 - elOffset.left - elSize.width/2) + 'px,' + (win.height - elOffset.top - elSize.height/2) + 'px,0) scale3d(0,0,1)';
              el.style.transform = 'translate3d(' + (win.width/2 - elOffset.left - elSize.width/2) + 'px,' + (win.height - elOffset.top - elSize.height/2) + 'px,0) scale3d(0,0,1)';
              el.style.opacity = 0;
            }
          });
        },
        onCloseItem : function(instance, item) {
          instance.items.forEach(function(el) {
            if(item != el) {
              el.style.WebkitTransition = 'opacity .3s, -webkit-transform .3s';
              el.style.transition = 'opacity .3s, transform .3s';

              el.style.WebkitTransform = 'translate3d(0,0,0) scale3d(1,1,1)';
              el.style.transform = 'translate3d(0,0,0) scale3d(1,1,1)';
              el.style.opacity = 1;

              onEndTransition(el, function() {
                el.style.transition = 'none';
                el.style.WebkitTransform = 'none';
              });
            }
          });
        }
      });
    })();
  </script>

  </body>
  </html>