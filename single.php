<!-- DISPLAY SINGLE POSTS -->
<?php
get_header();
if( is_single() ) { echo '<p class="pt-2 text-danger text-center">single!</p>'; }

if( have_posts() ) : while( have_posts() ) : the_post(); ?> <!-- step through post -->

	<article class="post">
		<?php if ( has_post_thumbnail() ): ?>
    <div class="post__thumbnail">
      <?php the_post_thumbnail(); ?> <!-- display thumbnail -->
    </div>
		<?php endif; ?>

		<h1><?php the_title(); ?></h1> <!-- display title -->

		<div class="post__meta">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?> <!-- get author id, define avatar size and display it -->
			<p>
				Publish on <?php the_date(); ?> <!-- display date (format: month day, year) -->
				by <?php the_author(); ?>
				Categories: <?php the_category(); ?> <!-- display categories in an unordered list -->
				Tags: <?php the_tags(); ?>
			</p>
		</div>

		<div class="post__content">
			<?php the_content(); ?> <!-- display content -->
		</div>
	</article>

<?php
endwhile; endif;
get_footer();
?>
