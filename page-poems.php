<?php get_header(); ?>
<main class="page-poems">
  <h1><?php _e('My Poems','my-glass-theme'); ?></h1>
  <div class="poems-list">
    <?php
    $poems = new WP_Query(['post_type'=>'poem','posts_per_page'=>-1]);
    if($poems->have_posts()) :
      while($poems->have_posts()) : $poems->the_post(); ?>
        <div class="glass-card poem-item">
          <h2><?php the_title(); ?></h2>
          <div class="poem-content"><?php the_content(); ?></div>
        </div>
    <?php endwhile; wp_reset_postdata(); endif; ?>
  </div>
</main>
<?php get_footer(); ?>