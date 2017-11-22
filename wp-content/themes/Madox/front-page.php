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
            <div class="col-4-12">
                <div class="element_1"></div>
            </div>
            <div class="col-3-12">
                <div class="element_2"></div>
            </div>
            <div class="col-5-12">
                <div class="element_3">
                    <div class="name">
                        <p class="name_madox">MADOX INSPIRACJA</p><br>
                        <p> HODOWLA KOTÓW RASOWYCH <br> od 2010 roku </p><br>
                        <p> MAMY KOCIĘTA!!! <br><br> Wybierz: </p><br>
                        <p class ="buttons">
                        <a class="button" href="<?php echo get_category_link(6); ?>" target="_blank">KOCURKI</a>
                        <a class="button" href="<?php echo get_category_link(7); ?>" target="_blank">KOTKI</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>


<?php get_footer(); ?>





