<?php get_header(); ?>
<section id="content" role="main" class="layout-home">
  <div class="featured-post most-recent">
    <div class="outer-wrap">
      <div class="inner-wrap">
        <div class="content-main">
            <?php // show the latest post ===============
              query_posts('showposts=1');
              $ids = array();
              while (have_posts()) : the_post();
              $ids[] = get_the_ID();
            ?>
            <?php get_template_part( 'entry' ); ?>
            <?php //comments_template(); ?>
            <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="subscribe-form">
    <div class="outer-wrap">
      <div class="inner-wrap">
        <?php include('subscribe-form.php'); ?>
      </div>
    </div>
  </div>
  <div class="recent-posts">
    <div class="outer-wrap">
      <div class="inner-wrap">
        <?php
          query_posts(
            array(
              'post__not_in' => $ids,
              'showposts' => 6
            )
          );
          while (have_posts()) : the_post();
        ?>
        <a href="<?php the_permalink(); ?>" class="post secondary">
          <div class="image">
            <?php the_post_thumbnail( $size = 'home-preview' ); ?>
          </div>
          <div class="title"><div><?php the_title(); ?></div></div>
        </a>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
