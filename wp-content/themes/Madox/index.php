<?php get_header (); ?>


<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
  <!-- post -->

    <?php the_category(); ?>
    <?php the_content(); ?>
    <?php the_post_thumbnail (); ?>
    <?php $galery = get_field('galeria'); ?>

    <?php //echo '<pre>', var_dump($galery), '</pre>'; ?>

    <ul class="slider">
    <?php

    foreach($galery as $gal){
        //echo '<pre>', var_dump($gal), '</pre>';
        echo '<li class="slide" style="background-image: url(' . $gal["url"] . ');"></li>';
    }
    ?>
    </ul>

<?php endwhile; ?>
  <!-- post navigation -->
<?php else: ?>
  <!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>









