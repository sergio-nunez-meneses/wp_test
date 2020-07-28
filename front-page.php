<!-- HOMEPAGE -->
<?php
if( is_front_page() ) { echo '<p class="pt-2 text-danger text-center">front page!</p>'; }
get_header();
?>

<section id="about" class="container-fluid m-0 vh-lg-100 h-auto pt-0 pb-3 px-3">
  <article class="row justify-content-center my-5 mx-0 flex-lg-row about-text">
    <div class="col-xl-5 w-md-50 m-0 m-lg-3 p-0 mt-3 text-center text-xl-right box-coffee">

      <?php
      if( have_posts() ) : while( have_posts() ) : the_post(); // step through page content

        if ( has_post_thumbnail() ): // detect if each post have a thumbnail
          echo
          '<div class="about__thumbnail">'
            . the_post_thumbnail() . //display thumbnail
        '</div>';
        endif; ?>

    </div>
    <div class="col-xl-5 hometext w-md-50 m-0 m-lg-3 p-0 text-center text-xl-left my-auto">

      <?php
      $title = esc_html( get_the_title() );
      echo
      "<h1> $title </h1>";
      the_content();
      endwhile; endif;
      echo
      '<a class="btn btn-md btn-contact text-uppercase" href="/wordpress/our-food-quality/">Learn More</a>';
      ?>

    </div>
  </article>
  <hr class="bg-warning my-0 mx-auto">
  <article class="row hometext flex-md-row">

    <?php get_template_part( 'parts/contact' ); ?>

  </article>
</section>

<?php get_footer(); ?>
