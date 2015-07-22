<?php get_header(); ?>
<section id="mastHead"> 
	<div class="mast">
		<div class="container">
			<div class="row vertical-align">
				<!-- Spacer -->
				<div class = "col-xs-1 col-s-1 col-md-1 col-lg-1">
				</div>
				<div class = "col-xs-8 col-s-8 col-md-8 col-lg-8">
					<h1><span>ABOUT US</span><br/></h1>
					<p>The Best Construction Company in the World</p>
					<a href="<?php bloginfo('wpurl'); ?>/about/"><button class = "btn btn-lg">About Us</button></a>
					<a href="<?php bloginfo('wpurl'); ?>/projects/"><button class = "btn btn-lg">View Projects</button></a>
				</div>
				<!-- Spacer -->
				<div class = "col-xs-3 col-s-3 col-md-3 col-lg-3">
				</div>
			</div>
		</div>
	</div>
</section>

<section id="who">
	<div class = "container-fluid">
		<div class = "row vertical-align">
			<div class = "col-xs-4 col-s-4 col-md-4 col-lg-4 text-right">
				<img src="http://placehold.it/250x350">
			</div>
			<div class = "col-xs-6 col-s-6 col-md-6 col-lg-6 text-center">
				<h1>WHO WE ARE</h1>
				<hr/>
				<h2>Welcome to "NAME" Construction</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae commodo arcu. Morbi bibendum a tellus nec gravida. Pellentesque et libero non nisi vehicula egestas. Pellentesque imperdiet ullamcorper eleifend. Ut quis diam nunc. Duis a rhoncus quam, vitae dictum leo. Donec ac iaculis nulla. Pellentesque hendrerit maximus nibh, in malesuada lectus ullamcorper et.

Fusce congue cursus volutpat. Praesent at accumsan urna. Nunc elit dolor, tempus eu feugiat nec, tempus mattis sapien. In faucibus vehicula mollis. Vivamus ultricies risus quis ipsum pulvinar gravida. Quisque id lobortis lectus. Duis non arcu nec mauris sagittis dapibus eget tempus leo.</p>
				<a href="<?php bloginfo('wpurl'); ?>/about/"><button class = "btn btn-lg">About Us</button></a>
			</div>
		</div>
	</div>
</section>
<section id = "review">
	<div class = "container">
		<div class = "row vertical-align">
		<?php for ($i=0; $i < 3; $i++) { 
		?>
			<div class = "col-xs-4 col-s-4 col-md-4 col-lg-4 text-center review">
				<h1>WHAT PEOPLE SAY</h1>
				<hr/>
				<i class="fa fa-quote-left fa-2x"></i>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae commodo arcu. Morbi bibendum a tellus nec gravida. Pellentesque et libero non nisi vehicula egestas. Pellentesque imperdiet ullamcorper eleifend. Ut quis diam nunc. Duis a rhoncus quam, vitae dictum leo. Donec ac iaculis nulla. Pellentesque hendrerit maximus nibh, in malesuada lectus ullamcorper et.

			Fusce congue cursus volutpat. Praesent at accumsan urna. Nunc elit dolor, tempus eu feugiat nec, tempus mattis sapien. In faucibus vehicula mollis. Vivamus ultricies risus quis ipsum pulvinar gravida. Quisque id lobortis lectus. Duis non arcu nec mauris sagittis dapibus eget tempus leo.</p>
				<i class="fa fa-quote-right fa-2x"></i>
				<p><strong>John Doe</strong></p>
			</div>
		<?php } ?>
		</div>
	</div>
</section>
<section id="offer">
	<div class = "container">
		<div class = "row top text-center text-uppercase">
			<div class = "col-xs-12 col-s-12 col-md-12 col-lg-12">
				<h1>Our Team</h1>
				<p>Hire our Professionals</p>
				<hr/>
			</div>
		</div>
		<div class = "row text-center">
			<div class = "col-xs-12 col-s-12 col-md-12 col-lg-12 text-center">
				<img src="/construction/wp-content/themes/html5blank/img/people.jpg">
			</div>
		</div>
	</div>

</section>

<?php get_footer(); ?>

