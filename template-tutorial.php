<?php
/*
Template Name: Scrollspy (Child Pages)
*/
?>


<div class="row">
	<div class="col-sm-12">
		<?php get_template_part('templates/page', 'header'); ?>
		<?php get_template_part('templates/content', 'page'); ?>
		
		<?php echo do_shortcode('[spl_subpages]'); ?>
		
	</div>
</div>
