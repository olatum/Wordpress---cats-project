<?php
/**
 * Created by PhpStorm.
 * User: ola
 * Date: 20.11.17
 * Time: 16:20
 */
?>

<?php get_header (); ?>

<div class="background">

    <div class="container">

        <div class="row">
            <div class="col-3-9">
                <div class="element"></div>
            </div>
            <div class="col-3-9">
                <div class="element"></div>
            </div>
            <div class="col-3-9">
                <div class="element">
                    <div class="name">
                        <div class="name_madox">MADOX INSPIRACJA</div>
                        HODOWLA KOTÓW RASOWYCH od 2010 roku
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- post -->
<?php the_post_thumbnail("full"); ?>
<?php the_category(); ?>
<?php the_excerpt(); ?>
<a href="<?php the_permalink(); ?>">Czytaj dalej</a>

<?php endwhile; ?>
  <!-- post navigation -->
<?php else: ?>
  <!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>





