<!-- HOMEPAGE -->
<?php
if( is_front_page() ) { echo '<p class="pt-2 text-danger text-center">front page!</p>'; }
get_header();

if( have_posts() ) : while( have_posts() ) : the_post(); // step through page content

$title = get_the_title();
if( strpos( $title, 'about' ) ) { $title .= 'sergio'; }
?>
<h1><?php echo $title; ?></h1>

<?php
the_content();
endwhile; endif;
get_footer();
?>
