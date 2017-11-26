<section class="entry-content">
<?php if ( has_post_thumbnail() ) : ?>
  <div class="image">
    <?php the_post_thumbnail( $size = 'post-detail', [ 'class' => 'fluid-img' ] ); ?>
    <?php if ( get_field('post_image_attrib') ) : ?>
      <div class="attrib"><?php the_field('post_image_attrib'); ?></div>
    <?php endif; ?>
  </div>
<?php endif; ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
