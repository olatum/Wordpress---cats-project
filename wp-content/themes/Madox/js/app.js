
jQuery(function () {


    jQuery (document).ready(function(){
        jQuery('.slider').slick({
            autoplay: true,
            adaptiveHeight: true,
            autoplaySpeed: 2000,
            slidesToShow: 1,

        });
    });
});

document.addEventListener('DOMContentLoaded', function(){

    function initMap() {


        var uluru = {lat:51.738649 , lng:18.163134};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }

    if(jQuery('#map').length)
    {
        initMap();
    }





})
