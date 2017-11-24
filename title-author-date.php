<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <?php echo '<h2 class="entry-title small">'; ?>
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
        <?php the_title(); ?>
      </a>
      <?php echo '</h2>'; ?>
        <?php edit_post_link(); ?>
          <?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
  </header>
</article>
