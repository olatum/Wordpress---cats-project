
jQuery(function () {


    jQuery (document).ready(function(){
        jQuery('.slider').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 1,

        });
    });
});

document.addEventListener('DOMContentLoaded', function(){

    var styles =
        [
            {
                "featureType": "administrative",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#444444"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#f2f2f2"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "all",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 45
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#c65c22"
                    },
                    {
                        "visibility": "on"
                    }
                ]
            }
        ];

    function initMap() {


        var uluru = {lat:51.738649 , lng:18.163134};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 6,
            center: uluru,
            styles: styles
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

});
