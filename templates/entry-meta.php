<div class="text-muted">
<time class="published pull-right" datetime="<?php echo get_the_time('c'); ?>"><b><?php echo get_the_date(); ?></b></time>
<p class="byline author vcard"><?php echo __('by', 'roots'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a></p>
</div>