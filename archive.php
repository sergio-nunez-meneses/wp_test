<!-- LIST LAST 10 POST WITH THE SAME CATEGORY -->
<?php
get_header();
if( is_archive() ) { echo '<p class="pt-2 text-danger text-center">archive!</p>'; }

// $obj_id = get_queried_object_id();
// $current_url = get_permalink( $obj_id );
// echo "$current_url";
?>
<section id="blog" class="container-fluid w-100 h-auto mt-3 mb-3 py-3">
  <div class="row flex-row">

    <?php
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

    <div class="col-md-3 my-2 mh-80">
      <article class="card">

        <?php
        if ( has_post_thumbnail() ) : // detect if each post have a thumbnail
          the_post_thumbnail('medium', array('class' => 'card-img-top'));
        endif;
        ?>

        <ul class="list-group list-group-flush bg-dark">
          <li class="list-group-item bg-dark"><?php the_title(); ?></li> <!-- display title -->
          <li class="list-group-item bg-dark">Published on <?php the_time( get_option( 'date_format' ) ); ?></li> <!-- display formatted date -->
          <li class="list-group-item bg-dark">by <?php the_author(); ?> • <?php comments_number(); ?></li>
        </ul>
        <div class="card-body bg-dark">
          <p class="card-text lead">
            <?php
            $the_excerpt = substr(get_the_excerpt(), 0, 30);
            echo $the_excerpt . '...'; // display an excerpt of the post's content (priority)
            ?>
          </p>
        </div>
        <div class="card-body bg-dark">
          <p>
            <a class="permalink" href="<?php the_permalink(); ?>" class="post__link">Continue reading...</a> <!-- link to single.php -->
          </p>
        </div>
      </article>
    </div>
    <?php endwhile; endif; ?>
  </div>
</section>

<?php get_footer(); ?>
