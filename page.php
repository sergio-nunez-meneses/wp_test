<?php get_header();
if( is_page() ) { echo '<p class="pt-2 text-danger text-center">page!</p>'; }

	if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    	<h1><?php the_title(); ?></h1>

    	<?php the_content();

	endwhile; endif;

get_footer();
?>
