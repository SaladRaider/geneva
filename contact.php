
<?php include("./header.php"); ?>

<div class="container-fluid header-image-sm" data-parallax="scroll" data-image="./images/iStock_000014940140Large.jpg">
	<div class="container centered banner-text">
		<h2><div class="xxl-text row text-centered">CONTACT US</div></h2>
	</div>
</div>

<span id="start-of-content"></span>

<div class="container-fluid">
	<div class="container">
		<h3 class="wow fadeInUp">Contact Us</h3>
		<div class="btn-group-standard wow fadeInUp">
			<input class="text-box-outline col-xs-12 col-sm-6" type="text" name="name" placeholder="Name" />
			<input class="text-box-outline col-xs-12 col-sm-6" type="text" name="email" placeholder="Email" />
		</div>
		<textarea rows=5 class="text-area-outline col-xs-12 wow fadeInUp" name="message" placeholder="Message"></textarea>
		<a class="btn-flat-inv col-xs-12 wow fadeInUp">Send Message</a>
	</div>
</div>

<div class="container-fluid grey-back">
	<div class="container">
		<div class="col-xs-12 text-centered">
			<h3>Parole Pharmacy</h3>
			<p class="non-indented">
				3408 N. Eastern Ave<br />
				Los Angeles, CA 90032
			</p>
		</div>
	</div>
</div>

<div class="container-fluid">
	<iframe
  width="100%"
  height="450"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?q=3408+N.+Eastern+Ave,Los+Angeles,+CA+90032" allowfullscreen>
</iframe>
</div>


<!-- key=AIzaSyCeBk4xBE0c5MFmev8nkrXmAm2icJ8d7gs& -->

<?php include("./footer.php"); ?>

<script>
	<!-- go here: http://pixelcog.github.io/parallax.js/ for info -->
	$('.header-image-sm').parallax({imageSrc: './images/iStock_000014940140Large.jpg'});
</script>
