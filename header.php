<!DOCTYPE html>
<html <?php language_attributes(); ?> data-theme="light">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
  <nav>
    <div class="site-logo"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></div>
    <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => ''
      ]);
    ?>
    <div class="toggle-group">
      <!-- Language Toggle: requires Polylang plugin -->
      <?php if(function_exists('pll_the_languages')) pll_the_languages(['dropdown'=>1]); ?>
      <!-- Dark/Light Mode -->
      <button id="mode-toggle"><?php _e('Toggle Mode','my-glass-theme'); ?></button>
    </div>
  </nav>
</header>