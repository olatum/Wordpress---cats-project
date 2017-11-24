<?php
/**
 * Created by PhpStorm.
 * User: ola
 * Date: 22.11.17
 * Time: 10:46
 */
?>


<?php get_header (); ?>

<div class="container">


<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
    <!-- post -->
    <section class="loop">
    <div class="margin">
        <?php $galery = get_field('galeria'); ?>

        <?php //echo '<pre>', var_dump($galery), '</pre>'; ?>

        <ul class="slider">
        <?php

        foreach($galery as $gal){
            //echo '<pre>', var_dump($gal), '</pre>';
            echo '<li class="slide"><img src="' . $gal['url']. '" /></li>';
            //echo '<li class="slide" style="background-image: url(' . $gal["url"] . ');"></li>';
        }
        ?>
        </ul>
    </div>

    <div class="content">
        <p class="content"><?php the_content(); ?></p>
        <p class="content"><?php the_field('status'); ?></p>

    </div>

    </section>



<?php endwhile; ?>
    <!-- post navigation -->
<?php else: ?>
    <!-- no posts found -->
<?php endif; ?>

</div>

<?php get_footer(); ?>




