<?php
if( is_page() ) { echo '<p class="pt-2 text-danger text-center">page!</p>'; }
get_header();

if( is_page( 'our-food-quality' ) ) {
	echo
	'<section id="quality" class="container-fluid w-100 h-100 mb-5 p-3 pb-xl-0 pr-xl-0">
		<div class="food-quality col-lg-6 col-xl-5 text-xl-left text-center">';

		if( have_posts() ) : while( have_posts() ) : the_post();
			echo
			'<h1>' . the_title() . '</h1>';
			the_content();
		endwhile; endif;

		echo
		'<a class="btn gallery-btn text-uppercase" href="/wordpress/gallery/">Learn More</a>
		</div>
	</section>';
} elseif (is_page( 'contact' )) {
	echo
	'<section class="container-fluid w-100 mb-5 h-auto p-3 pb-xl-0 pr-xl-0">
		<div class="row flex-row justify-content-center text-center">
			<div class="col-lg-6 col-xl-5">';
				if( have_posts() ) : while( have_posts() ) : the_post();
					echo
					'<h1>' . the_title() . '</h1>';
					the_content();
				endwhile; endif;
				get_template_part( 'parts/newsletter' );
				?>

				<hr class="bg-warning mt-3 mb-0 mx-auto">
				<form class="pt-3 text-left">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label class="text-secondary font-weight-bold" for="inputEmail4">Your email</label>
							<input type="email" class="form-control" id="inputEmail4" placeholder="Your email*">
						</div>
						<div class="form-group col-md-6">
							<label class="text-secondary font-weight-bold" for="inputPassword4">Your Name</label>
							<input type="Name" class="form-control" id="inputPassword4" placeholder="name*">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label class="text-secondary font-weight-bold" for="input5">What time ?</label>
							<select id="input5" class="form-control">
								<option selected>17:00</option>
								<option>17:30</option>
								<option>18:00</option>
								<option>18:30</option>
								<option>19:00</option>
								<option>19:30</option>
								<option>20:00</option>
								<option>20:30</option>
								<option>21:00</option>
								<option>21:30</option>
								<option>22:00</option>
								<option>22:30</option>
								<option>23:00</option>
								<option>23:30</option>
							</select>
						</div>
						<div class="form-group col-md-6">
							<label class="text-secondary font-weight-bold" for="input4">Party Size</label>
							<select id="input4" class="form-control">
								<option selected>Choose...</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
							</select>
						</div>
					</div>
					<div class="text-center">
						<button type="submit" id="btn-gold" class="btn btn-contact uppercase">Book now</button>
					</div>
				</form>
			</div>
		</div>
	</section>

<?php } // ending if contact
get_footer();
?>
