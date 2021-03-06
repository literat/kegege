<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="{{ app()->getLocale() }}">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Tomáš Litera; http://litera.me/">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Tomáš Litera')</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&mp;subset=latin,cyrillic-ext">
    <link rel="stylesheet" href="/css/combined.min.css">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="canonical" href="{$context->httpResponse->headers[Content-Location]}" n:ifset="$context->httpResponse->headers[Content-Location]">
</head>

<body>

@yield('content')

<!-- Modernizr, jQuery, jQuery-easing, Bootstrap -->
<script src="/js/combined.min.js"></script>
<!-- jQuery-isotope,nicescroll,skrollr,scrollTo,localscroll,easypiechart,stellar,appear -->
<script src="/js/plugins.min.js"></script>
<script src="/js/fancybox/jquery.fancybox.pack.js"></script>
<!-- Contact Form Validation -->
<script src="/js/validate.min.js"></script>
<!-- Main JS Init -->
<script src="/js/main.min.js"></script>
<!-- Pie Charts -->
<script type="text/javascript">
    // pie charts
    $(function() {
        $('.chart').easyPieChart({
            easing: 'easeOutBounce',
            onStep: function(from, to, percent) {
                $(this.el).find('.percent').text(Math.round(percent));
            },
            barColor: '#44BCDD'
        });
        var chart = window.chart = $('.chart').data('easyPieChart');
    });
</script>
<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBFR6GGX-I1EX-77HgCQVL4CGEVG70hkY&amp;sensor=false"></script>
<script type="text/javascript">
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 11,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(50.075699, 14.435347), // Prague

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{
                featureType:"all",
                elementType:"all",
                stylers:[
                    { invert_lightness:true },
                    { saturation:10 },
                    { lightness:30 },
                    { gamma:0.5 },
                    { hue:"#44BCDD" }
                ]
            }]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using out element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);
    }
</script>
</body>
</html>