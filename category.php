<?php get_header(); ?>
<section id="content" role="main" class="article-rows">
<div class="outer-wrap">
  <div class="inner-wrap inner-narrow">
    <header class="header">
      <h1 class="entry-title ttu"><?php _e( 'Category Archives: ', 'lctheme' ); ?><?php single_cat_title(); ?></h1>
      <br>
      <?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
    </header>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'entry' ); ?>
    <?php endwhile; endif; ?>
    <?php get_template_part( 'nav', 'below' ); ?></div>
</div>
</section>
<?php get_footer(); ?>
