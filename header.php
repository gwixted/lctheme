<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="wrapper" class="hfeed">
    <header id="header" role="banner">
      <div class="outer-wrap">
        <div class="inner-wrap">
          <h1 class="branding">
            <a href="<?php echo site_url(); ?>" class="logo">Life Composing</a>
            <div class="description"><?php echo get_bloginfo('description'); ?></div>
          </h1>
          <nav id="menu" role="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
          </nav>
          <div class="mobile-trigger">
            <div class="burger ion-android-menu"></div>
            <div class="close ion-android-close"></div>
          </div>
        </div>
      </div>
    </header>
  <div id="container">
