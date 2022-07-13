<!DOCTYPE html>
<html lang="en">
<head>
<title>Viện Hải Dương</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Plunge Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--css links-->
<link href="{{ asset ('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" /><!--bootstrap-->
<link href="{{ asset ('css/font-awesome.css') }}" rel="stylesheet"><!--font-awesome-->
<link rel="stylesheet" href="{{ asset ('css/flexslider.css') }}" type="text/css" media="screen" /> <!-- Flexslider-CSS -->
<link href="{{ asset ('css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" /><!-- Pop-up -->
<link href="{{ asset ('css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css'/><!-- easy-responsive-tabs -->
<link href="{{ asset ('css/style.css') }}" rel="stylesheet" type="text/css" media="all" /><!--stylesheet-->
<!--//css links-->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<!--//fonts-->
</head>
<body>
<!-- Header -->
<div id="home" class="banner w3l">
	<div class="container">

    @include('user.blocks.navbar')

		@include('user.blocks.banner')

		<div class="more-button">
			<div class="button">
			<a href="#small-dialog" class="play-icon popup-with-zoom-anim">
        <span class="glyphicon glyphicon-play-circle video-w3ls" aria-hidden="true"></span>
        <span class="video-text">
          <i>Watch</i>
          <br> Our Video</span>
      </a>
		</div>
		<div id="small-dialog" class="mfp-hide w3ls_small_dialog wthree_pop">		
			<div class="agileits_modal_body">
				<iframe src="https://player.vimeo.com/video/69794357"></iframe>
			</div>
		</div>
		</div>
	</div>	
</div>	
<!-- //Header -->
<!-- banner-bottom -->
@include('user.blocks.banner_bottom')
<!-- //banner-bottom -->
<!-- about -->
@include('user.blocks.about')
<!-- banner-bottom -->
<!-- Reasons to trust us -->
@include('user.blocks.reasons')
<!-- //Reasons to trust us -->
<!-- Stats -->
@include('user.blocks.stats')
	<!-- //Stats -->
<!-- testimonials -->
@include('user.blocks.testimonials')
<!-- //testimonials -->
<!-- footer -->
@include('user.blocks.footer')
<!-- Modal1 -->
@include('user.blocks.modal')
<!-- //Modal1 -->
<!--//footer -->
<!-- js -->
<script type='text/javascript' src="{{ asset ('js/jquery-2.2.3.min.js') }}"></script>
<!--//js -->
<!--pop-up-box -->
					<script src="{{ asset ('js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
					<script>
					$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
					});

					});
					</script>
<!-- //pop-up-box -->

<!-- responsiveslides -->
<script src="{{ asset ('js/responsiveslides.min.js') }}"></script>
			<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: false,
										nav: true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
			</script>
<!-- //responsiveslides -->
<!-- OnScroll-Number-Increase-JavaScript -->
	<script type="text/javascript" src="{{ asset ('js/numscroller-1.0.js') }}"></script>
<!-- //OnScroll-Number-Increase-JavaScript -->
<!--Scrolling-top -->
<script type="text/javascript" src="{{ asset ('js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset ('js/easing.js') }}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!--//Scrolling-top -->
 	<!-- FlexSlider -->
				  <script defer src="{{ asset ('js/jquery.flexslider.js') }}"></script>
				  <script type="text/javascript">
					$(function(){
					 
					});
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
		<!-- FlexSlider -->
<!-- script for responsive tabs -->						
<script src="{{ asset ('js/easy-responsive-tabs.js') }}"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!-- script for responsive tabs -->	
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="{{ asset ('js/bootstrap-3.1.1.min.js') }}"></script>
@yield('content')
</body>
</html>