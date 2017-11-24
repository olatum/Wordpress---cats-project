<?php
/**
 * Created by PhpStorm.
 * User: ola
 * Date: 22.11.17
 * Time: 09:54
 */
?>
<?php get_header (); ?>

<div class="container">

<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
    <!-- post -->

    <?php $galery = get_field('galeria'); ?>

    <?php //echo '<pre>', var_dump($galery), '</pre>'; ?>

    <ul class="slider">
        <?php

        foreach($galery as $gal){
            //echo '<pre>', var_dump($gal), '</pre>';
            echo '<li class="slide"><img src="' . $gal['url']. '" /></li>';
        }
        ?>
    </ul>
    <div class="content">
    <p class="content"><?php the_content(); ?></p>
    </div>
    <p class="content"><?php the_field('status'); ?></p>
    <?php the_category(); ?>



<?php endwhile; ?>
    <!-- post navigation -->
<?php else: ?>
    <!-- no posts found -->
<?php endif; ?>
</div>

<?php get_footer(); ?>

