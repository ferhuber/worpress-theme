<?php


get_header();


if (have_posts()) :
  while (have_posts()) : the_post(); ?>
<div class="main-page">

  <article class="post">

    <?php the_post_thumbnail(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
  </article>
</div>

  <?php endwhile;

  else :
    echo '<p>No content found</p>';

 endif;

get_footer();

?>
