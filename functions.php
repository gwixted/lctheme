<?php
add_action( 'after_setup_theme', 'lctheme_setup' );
function lctheme_setup() {
  load_theme_textdomain( 'lctheme', get_template_directory() . '/languages' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );
  global $content_width;
  if ( ! isset( $content_width ) ) $content_width = 640;
    register_nav_menus(
    array( 'main-menu' => __( 'Main Menu', 'lctheme' ) )
  );
}

add_action( 'wp_enqueue_scripts', 'lctheme_load_scripts' );
function lctheme_load_scripts() {  
  wp_enqueue_script( 'jquery' );
  
  wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/scripts/lib/jquery.easing.1.3.js', array(), '111817', true );
  
  wp_enqueue_script( 'modernizer', get_template_directory_uri() . '/scripts/lib/modernizr-2.7.1.min.js', array(), '111817', true );
  
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/scripts/min/scripts.min.js', array(), '111817', true );
  
  // wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '1.0', 'all');
  
  // wp_enqueue_style( 'wx theme styles', get_template_directory_uri() . '/css/lctheme.css', array(), '1.0', 'all');
}

add_action( 'comment_form_before', 'lctheme_enqueue_comment_reply_script' );
  function lctheme_enqueue_comment_reply_script() {
    if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}

add_filter( 'the_title', 'lctheme_title' );
function lctheme_title( $title ) {
  if ( $title == '' ) {
    return '&rarr;';
  } else {
    return $title;
  }
}

add_filter( 'wp_title', 'lctheme_filter_wp_title' );
function lctheme_filter_wp_title( $title ) {
  return $title . esc_attr( get_bloginfo( 'name' ) );
}

add_action( 'widgets_init', 'lctheme_widgets_init' );
function lctheme_widgets_init() {
  register_sidebar( array (
    'name' => __( 'Sidebar Widget Area', 'lctheme' ),
    'id' => 'primary-widget-area',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => "</li>",
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
}

function lctheme_custom_pings( $comment ) {
  $GLOBALS['comment'] = $comment;
?>
  <li <?php comment_class(); ?> id="li-comment-
    <?php comment_ID(); ?>">
      <?php echo comment_author_link(); ?>
  </li>
  <?php 
}

add_filter( 'get_comments_number', 'lctheme_comments_number' );
function lctheme_comments_number( $count ) {
  if ( !is_admin() ) {
    global $id;
    $comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
      return count( $comments_by_type['comment'] );
    } else {
      return $count;
  }
}