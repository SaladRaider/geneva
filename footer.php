<div class="container-fluid dark-purple-back">
	<div class="container">
		<div class="col-xs-12 text-centered">
			&copy; Compounding Pharmacy: Associates &amp; Consultants, Inc. All Rights Reserved.
		</div>
	</div>
</div>

<div class="footer-filler"></div>

<div class="fixed-footer">
	<div style="float: left;"><p><span class="fa fa-phone"></span> +1 (626) 522-2735</p></div>
	<div style="float: right;"><a href="mailto:ordercpac@gmail.com"><p><span class="fa fa-paper-plane-o"></span> ordercpac@gmail.com</p></a></div>

</div>

<script src="js/jquery-2.0.0.min.js" type="text/javascript"r></script>
<script src="js/parallax.min.js" type="text/javascript"r></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scrollTo.js"></script>
<script src="js/wow.js"></script>

<script>
	<!-- go here: http://pixelcog.github.io/parallax.js/ for info -->
	$('.header-image').parallax({imageSrc: 'images/main-slide.jpg'});

	$(document).ready(function() {
		updateNavbar();

		wow = new WOW(
		{
		    boxClass:     'wow',      // default
		    animateClass: 'animated', // default
		    offset:       150,          // default
		    mobile:       true,       // default
		    live:         true        // default
		});
		wow.init();
	});

	$(window).scroll(function() {    
		updateNavbar();
	});

	$(window).resize(function() {  
		updateNavbar();
	});

	function updateNavbar() {
		var scroll = $(window).scrollTop();
		var width = $(window).width();

		if (scroll >= 200 || width <= 950) {
			$(".navbar").addClass("navbar-light");
		} else {
			$(".navbar").removeClass("navbar-light");
		}

		if(width > 767) {
			$("#main-nav").removeClass("in");
		}
	}
	
</script>

</body>
</html>