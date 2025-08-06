<?php get_header(); ?>
<main class="page-music">
  <h1><?php _e('My Music','my-glass-theme'); ?></h1>
  <div class="album glass-card">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/album-cover.jpg" alt="Album Cover">
    <p><?php _e('My first instrumental album.','my-glass-theme'); ?></p>
    <div class="buttons">
      <a href="#" class="button"><?php _e('Buy/Listen','my-glass-theme'); ?></a>
      <a href="#" class="button"><?php _e('Buy/Listen','my-glass-theme'); ?></a>
    </div>
  </div>
  <div class="track-slider swiper-container">
    <div class="swiper-wrapper">
      <?php
      $tracks = new WP_Query(['post_type'=>'track','posts_per_page'=>-1]);
      if($tracks->have_posts()) : while($tracks->have_posts()) : $tracks->the_post(); ?>
        <div class="swiper-slide glass-card">
          <?php if(has_post_thumbnail()) the_post_thumbnail('medium'); ?>
          <h3><?php the_title(); ?></h3>
        </div>
      <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
</main>
<?php get_footer(); ?>