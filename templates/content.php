<article <?php post_class(); ?>>
  <header>
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary clearfix">
    <?php //the_excerpt(); ?>
    <?php the_content(); ?>
  </div>
</article>
