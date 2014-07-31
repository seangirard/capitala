<article <?php post_class(); ?>>
  <?php 
  $title = get_the_title();
  if ( isset($title) ) : ?>
  <header>
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
 	<?php endif; ?>
  <div class="entry-summary clearfix">
    <?php //the_excerpt(); ?>
    <?php the_content(); ?>
  </div>
</article>
