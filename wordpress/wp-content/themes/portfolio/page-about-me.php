<?php


get_header();

if (have_posts()) :
  while (have_posts()) : the_post(); ?>

  <div class="main-page">


  <article class="post">
    <h1>about me</h1>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
  </article>
</div>

  <?php endwhile;

  else :
    echo '<p>No content found</p>';

 endif;
get_footer();

?>
