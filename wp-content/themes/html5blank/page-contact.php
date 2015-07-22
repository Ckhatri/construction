<?php get_header(); ?>
<section id="mastHead"> 
	<div class="mast">
		<div class="container">
			<div class="row vertical-align">
				<!-- Spacer -->
				<div class = "col-xs-1 col-s-1 col-md-1 col-lg-1">
				</div>
				<div class = "col-xs-8 col-s-8 col-md-8 col-lg-8">
					<h1><span>Contact Us!</span><br/></h1>
					<p>We'd love to hear from you!</p>
				</div>
				<!-- Spacer -->
				<div class = "col-xs-3 col-s-3 col-md-3 col-lg-3">
				</div>
			</div>
		</div>
	</div>
</section>

<section id = "contact">
	<div class = "container">
		<div class = "row text-center text-uppercase vertical-align">
			<div class = "col-xs-4 col-s-4 col-md-4 col-lg-4">
				<i class="fa fa-location-arrow fa-4x"></i>
				<h3>Address</h3>
				<p>1000 Not A Real Place, Texas, ######, USA</p>
			</div>
			<div class = "col-xs-4 col-s-4 col-md-4 col-lg-4">
				<i class="fa fa-phone fa-4x"></i>
				<h3>Phone Number</h3>
				<p>###-###-####</p>
			</div>
			<div class = "col-xs-4 col-s-4 col-md-4 col-lg-4">
				<i class="fa fa-location-arrow fa-4x"></i>
				<h3>EMAIL</h3>
				<p>person@email.site</p>
			</div>
		</div>
	</div>
</section>

<section id = "map">
		<div class = "row">
			<div class = "col-xs-12 col-s-12 col-md-12 col-lg-12">
				<a href="https://www.google.com/maps/dir//211+North+Ervay,+Dallas,+TX+75201/@32.7821534,-96.7976129,17z/data=!4m13!1m4!3m3!1s0x864e99220027e345:0x5821f5dfa4274d24!2s211+North+Ervay,+Dallas,+TX+75201!3b1!4m7!1m0!1m5!1m1!1s0x864e99220027e345:0x5821f5dfa4274d24!2m2!1d-96.7976129!2d32.7821534"><img src="<?php bloginfo('template_url'); ?>/img/map1.png"></a>
			</div>
		</div>
</section>

<section id = "form">
	<div class = "container-fluid">
		<div class = "row text-center vertical-align">
			<div class = "col-xs-12 col-s-12 col-md-12 col-lg-12">
				<h1>Send a Message</h1>
				<hr/>
				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>