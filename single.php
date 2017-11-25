<?php get_header(); ?>
<section id="content" role="main">
  <div class="outer-wrap">
    <div class="inner-wrap inner-narrow">
      <div class="content-main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry-post' ); ?>
        <?php endwhile; endif; ?>
        <div class="comments">
          <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
