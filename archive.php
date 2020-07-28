<!-- LIST LAST 10 POST WITH THE SAME CATEGORY -->
<?php
get_header();
if( is_archive() ) { echo '<p class="pt-2 text-danger text-center">archive!</p>'; }

// $obj_id = get_queried_object_id();
// $current_url = get_permalink( $obj_id );
// echo "$current_url";

if( have_posts() ) : while( have_posts() ) : the_post(); // step through posts

if ( is_category() ) {
  $title = 'Category: ' . single_tag_title( '', false ); // show category
} elseif ( is_tag() ) {
  $title = 'Tag: ' . single_tag_title( '', false ); // show tag
} elseif ( is_search() ) {
  $title = 'You have search: ' . get_search_query(); // searched query
} else {
  $title = 'Blog';
}
?>
<h1><?php echo $title; ?></h1>

	<article class="post">
		<h2><?php the_title(); ?></h2> <!-- display title -->

    <?php if ( has_post_thumbnail() ): ?> <!-- detect if each post have a thumbnail -->
      <div class="post__thumbnail">
        <?php the_post_thumbnail(); ?> <!-- display thumbnail -->
      </div>
    <?php endif; ?>

		<p class="post__meta">
			Published on <?php the_time( get_option( 'date_format' ) ); ?> <!-- display formatted date -->
			by <?php the_author(); ?> • <?php comments_number(); ?>
		</p>

		<?php the_excerpt(); ?> <!-- display an excerpt of the post's content (priority) -->

		<p>
			<a href="<?php the_permalink(); ?>" class="post__link">Continue reading...</a> <!-- link to single.php -->
		</p>
	</article>

<?php
endwhile; endif;
get_footer();
?>
