<?php get_header(); ?>
<main class="page-about">
  <h1><?php the_title(); ?></h1>
  <div class="content glass-card">
    <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
  </div>
</main>
<?php get_footer(); ?>