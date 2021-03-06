<?php include_once ABSPATH . 'wp-admin/includes/plugin.php'; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="author" content="Robin De March, Sergio Nuñez Meneses">
  <meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo( 'template_directory' ); ?>/font.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo( 'template_directory' ); ?>/nomalize.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo( 'template_directory' ); ?>/style.css">
  <?php wp_head();?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

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
                  <a class="nav-link uppercase" href="/wordpress/our-food-quality/">About</a>
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
                  <a class="nav-link uppercase" href="/wordpress/gallery/">Gallery <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link uppercase" href="/wordpress/contact/">Book</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link uppercase" href="/wordpress/blog/">Blog</a>
                </li>
                <li class="nav-item">

                  <?php
                  if ( is_user_logged_in() ):
                    wp_get_current_user();
                    echo
                    '<a class="nav-link uppercase" href="' . wp_logout_url() . '">Logout</a>';
                    else:
                    echo
                    '<a class="nav-link uppercase" href="' . wp_login_url() . '">Login</a>';
                  endif;
                  ?>

                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <h3 class="pb-3 text-center text-nowrap"><?php echo get_bloginfo('description'); ?></h3>

      <div class="row flex-row">
        <div class="col-xl-3 container w-auto text-center">

          <?php
          global $current_user;

          if ( is_user_logged_in() ):
            wp_get_current_user();
            echo '<h5 class="text-nowrap">Howdy, <span class="uppercase">' . esc_html( $current_user->display_name ) . '</span></h5>';
          else:
            echo '<h5 class="text-nowrap">Howdy, completely stranger!</h5>';
          endif;
          ?>

        </div>
      </div>

      <?php if (is_plugin_active('random_mode/random_mode.php')) : ?>

      <div class="row flex-row">
        <div class="col-xl-3 container w-auto">
          <div class="form-group">
            <select id="colorMode" class="plugin-btn form-control text-center">
            <option selected>normal</option>
            <option>protanopia</option>
            <option>deuteranopia</option>
            <option>tritanopia</option>
            <option>random</option>
            </select>
          </div>
        </div>
      </div>

      <?php endif; ?>

    </header>
  </section>
