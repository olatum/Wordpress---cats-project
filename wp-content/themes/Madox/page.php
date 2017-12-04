<?php
/**
 * Created by PhpStorm.
 * User: ola
 * Date: 28.11.17
 * Time: 12:42
 */
?>

<?php get_header (); ?>

<div class="container">
    <div class="view_height">

        <?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
            <!-- post -->


            <div class="row margin">
                <div class="col-3-6 grid_2">
                    <div class="o_nas history">
                        <h2>Historia Hodowli</h2><br>
                        Koty kochałam chyba od zawsze, czasami żartuję, że w poprzednim wcieleniu musiałam być kotem. Przez całe dzieciństwo przynosiłam z podwórka porzucone koty. Córki odziedziczyły przywiązanie do kociej rasy i tak w naszym domu pojawiła się persica Fatima oraz syjam Dschafar, który jest z nami do dziś.

                        Pewnego dnia przeczytałam w gazecie interesujący artykuł na temat kotów rasy Maine Coon i dosłownie "zachorowałam" na tego pięknego, olbrzymiego kota o dzikim spojrzeniu. Wkrótce w naszym domu pojawił się wyśniony książe imieniem Madox z hodowli Pysiraj*PL. Był wyjątkowo przyjaznym, towarzyskim kotem. Niestety cieszyłam się nim tylko trzy miesiące, nagle zachorował i odszedł. Łzom i pytaniom "dlaczego?" nie było końca.

                        Nigdy nie pogodziłam się z jego odejściem, dlatego postanowiłam założyc hodowlę tych pięknych kotów i nazwałam ją imieniem ukochanego Madoxa. Tak z poczatkiem 2010 roku powstała w Zduńskich lasach hodowla kotów rasy Maine Coon Madoxinspiracja*PL. Pierwszą kotką była czarno-biała Gaja z hodowli Magnus*PL, później ruda Bella Brama z hodowli Jurtomia*PL, ostatnią dziewczynką jest szylkretka Demera z hodowli Alara*PL. Tym wspaniałym kocim haremem zarządza rudo-biały Barnaba z hodowli WikiBlack*PL, pomaga mu dzielnie syjamski kastrat imieniem Dschafar.
                    </div>
                </div>

                <br>

                <div class="col-3-6">
                    <div class="photo"></div>
                </div>
            </div>

            <div class="row margin">
                <div class="col-3-6">
                    <div class="photo_2"></div>
                    <br>
                    <br>
                </div>

                <div class="col-3-6 grid_2">
                    <div class="o_nas now">

                        <h2>A teraz...</h2><br>

                        Już nie wyobrażam sobie życia bez moich kocich przyjaciół. Cały dom został przystosowany do ich potrzeb: woliery na świeżym powietrzu, wydzielona część ogrodu, a w salonie drapak od podłogi do sufitu i kilka mniejszych, huśtawki, porodówki...

                        Kiedy w marcu 2011 roku przyszły na świat nasze pierwsze kocięta - radość była ogromna. Pomoc w przyjściu na świat maluszków, obserwacja ich rozwoju, pierwszych samodzielnych kroków, zabaw, zapasów ... to uczucia dostępne tylko "kociarzom", telewizor odszedł na dalszy plan. Moją radość zakłóca jedynie świadomość, że niedługo nadejdzie moment rozstania. Ale mam nadzieję, że ich opiekunowie bedą o nie dbali i kochali je. A utrzymując wspólnie kontakt staniemy się nową kocią rodzinką.
                        <br>
                        <br>
                        <br>
                        <br>
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
