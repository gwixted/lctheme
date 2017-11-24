<?php get_header(); ?>
<section id="content" role="main" class="article-rows reduced">
  <div class="outer-wrap">
    <div class="inner-wrap inner-narrow">
      <header class="header">
        <h1 class="entry-title ttu"><?php the_title(); ?></h1>
        <br>
      </header>
      <?php
      // the query to set the posts per page to 3
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array('posts_per_page' => 5, 'paged' => $paged );
      query_posts($args); ?>
      <!-- the loop -->
      <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
      <?php get_template_part( 'title-author-date' ); ?>
      <?php endwhile; ?>
      <!-- pagination -->

      <nav id="nav-below" class="navigation" role="navigation">
        <div class="nav-previous"><?php previous_posts_link('<span class="icon ion-android-arrow-back"</span> prev'); ?></div>
        <div class="nav-next"><?php next_posts_link('next <span class="icon ion-android-arrow-forward"</span>'); ?></div>
      </nav>

      <?php else : ?>
      <!-- No posts found -->
      <?php endif; ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
