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
    <div class="view_height">


<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
    <!-- post -->
    <div class="row">
        <div class="col-7-12">
        <?php $galery = get_field('galeria'); ?>
            <ul class="slider">
                <?php
                foreach($galery as $gal){
                  echo '<li class="slide"><img src="' . $gal['url']. '" /></li>';
                }
                ?>
            </ul>
        </div>

        <div class="col-5-12">
            <div class="content">
                <div class="content"><h1><?php the_title(); ?></h1></div>
                <div class="content"><?php the_content(); ?></div>
                <div class="content"><h2>Status: <?php the_field('status'); ?></h2></div>
                <div class="content content_a"><?php the_category(); ?></div>
            </div>
        </div>
    </div>


<?php endwhile; ?>
    <!-- post navigation -->
<?php else: ?>
    <!-- no posts found -->
<?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>




