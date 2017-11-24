<?php get_header(); ?>
<section id="content" role="main" class="article-rows">
  <div class="outer-wrap">
    <div class="inner-wrap inner-narrow">
      <header class="header">
        <h1 class="entry-title ttu"><?php _e( 'Tag Archives: ', 'lctheme' ); ?><?php single_tag_title(); ?></h1>
        <br>
      </header>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'entry' ); ?>
      <?php endwhile; endif; ?>
      <?php get_template_part( 'nav', 'below' ); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
