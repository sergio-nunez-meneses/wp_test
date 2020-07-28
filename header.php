<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="author" content="Robin De March, Sergio Nuñez Meneses">
  <meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo( 'template_directory' ); ?>/font.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo( 'template_directory' ); ?>/style.css">
  <?php wp_head();?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <!--Navbar -->
  <section id="homepage" class="container-fluid d-block px-md-5 pt-5">

    <header class="d-block">
      <div class="row flex-row">

        <div class="col-xl-3 container w-auto ml-3">
          <nav class="navbar navbar-expand-xl navbar-dark bg-black">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link uppercase" href="<?php echo get_bloginfo( 'wpurl' ); ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link uppercase" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link uppercase" href="#menu">Menus</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link uppercase" href="#offer">Offers</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>

        <div class="col-xl-2 container-md d-block logo-text m-0 m-md-3">
          <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="logo m-0 d-inline-block text-align">coeur</a>
          <h1 class="m-0 mt-3 text-center">Food Lover</h1>
          <h2 class="text-center">Restaurant</h2>
        </div>

        <div class="col-xl-3 container w-auto ml-3">
          <nav class="navbar navbar-expand-xl">
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link uppercase" href="#gallery">Gallery <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link uppercase" href="#">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link uppercase" href="/wordpress/blog/">Blog</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <h3 class="pb-3 text-center text-nowrap"><?php echo get_bloginfo('description'); ?></h3>

      <?php
      global $current_user;

      if ( is_user_logged_in() ):
        wp_get_current_user();
        echo '<h5 class="pb-3 text-center text-nowrap">howdy, ' . esc_html( $current_user->display_name ) . '</h5>';
      else:
        echo '<h5 class="pb-3 text-center text-nowrap">howdy, stranger!</h5>';
      endif;

      if ( is_user_logged_in() ):
        wp_get_current_user();
        ?>
          <a class="pb-3 text-center text-nowrap" href="<?php echo wp_logout_url(); ?>"> Logout </a>
        </p>
      <?php else: ?>
        <p>
          <a class="pb-3 text-center text-nowrap" href="<?php echo wp_login_url(); ?>"> Login </a>
        </p>
      <?php endif;
      ?>

    </header>
  </section>
