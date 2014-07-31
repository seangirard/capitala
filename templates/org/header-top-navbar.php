<header class="navbar-masthead banner navbar navbar-inverse navbar-static-top visible-md visible-lg" style="margin-top:20px;" role="banner">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo home_url(); ?>/" style="border-radius: 10px 10px 0 0;">
        <span class="text-hide"><?php bloginfo('name'); ?></span>
      </a>
    </div>
  </div>
</header><!-- /.navbar -->

<header class="navbar-primary banner navbar navbar-inverse navbar-static-top" role="banner" style="margin-bottom:0;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand hidden-md hidden-lg" href="<?php echo home_url(); ?>/">
        <span class="logotype serif hidden-xs"><?php bloginfo('name'); ?></span>
        <span class="logotype serif hidden-sm"><small>Capital A Publications</small></span>
      </a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header><!-- /.navbar -->

