<?php
/**
 * Created by PhpStorm.
 * User: ola
 * Date: 22.11.17
 * Time: 11:46
 */
?>
<?php get_header (); ?>

<div class="container">

<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
  <!-- post -->

    <?php the_title(); ?>
    <?php the_content(); ?>
    <?php the_post_thumbnail(); ?>

<?php endwhile; ?>
  <!-- post navigation -->
<?php else: ?>
  <!-- no posts found -->
<?php endif; ?>


<?php get_footer(); ?>

</div>