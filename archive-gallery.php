<?php
if( is_post_type_archive( 'gallery' ) ) { echo '<p class="pt-2 text-danger text-center">type archive!</p>'; }
get_header();
?>

<section id="gallery" class="container-fluid w-100 mb-5 w-100">
	<h1 class="text-center m-5">Our Food Gallery</h1>
	<div class="row justify-content-center align-items-center w-100 m-0">

			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<div class="offset-md-1 col-md-3 my-3">
				<div class="element-box">

					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('medium', array('class' => 'image-gallery'));
					}
					?>

					<div class="transparent-box">
						<div class="element-caption">
							<h3 class="text-center mb-5"><?php post_type_archive_title(); ?></h3>
							<a href="<?php the_permalink(); ?>">
								<?php the_title();?>
							</a>
						</div>
					</div>
				</div>
				</div>
			<?php endwhile; endif; ?>


	</div>
</section>

<?php
the_posts_pagination();
get_footer();
?>
