<?php
/**
 * Created by PhpStorm.
 * User: ola
 * Date: 22.11.17
 * Time: 12:30
 */
?>

<?php get_header (); ?>

<div class="container">

<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
  <!-- post -->
    <div class="row">


        <div class="col-6-12">
            <br>
            <br>
            <div id="map"
                 style = "width: 500px; height: 600px;">
            </div>
            <br>
        </div>

        <div class="col-6-12">
            <div class="element">
                <p class="content"><?php the_content(); ?></p>
            </div>
        </div>





    </div>
<?php endwhile; ?>
  <!-- post navigation -->
<?php else: ?>
  <!-- no posts found -->
<?php endif; ?>
</div>



<?php get_footer(); ?>


