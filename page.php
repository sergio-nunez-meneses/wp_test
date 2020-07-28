<?php
if( is_page() ) { echo '<p class="pt-2 text-danger text-center">page!</p>'; }
get_header();
?>

<?php
if( is_page( 'our-food-quality' ) ) {
	echo
	'<section id="quality" class="container-fluid w-100 mb-5 h-100 p-3 pb-xl-0 pr-xl-0">
		<div class="food-quality text-center text-xl-left col-lg-6 col-xl-5">';

		if( have_posts() ) : while( have_posts() ) : the_post();
			echo
			'<h1>' . the_title() . '</h1>';
			the_content();
		endwhile; endif;

		echo
		'</div>
	</section>';
} elseif (is_page( 'contact' )) {
	// code...
}
get_footer();
?>
