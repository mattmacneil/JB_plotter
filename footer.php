
<footer>

	footer

</footer>

 <script>
      function initMap() {
        var uluru = {lat: 42.366690, lng: -71.015811};
        var map = new google.maps.Map(document.getElementById('kiosks-left'), {
          zoom: 17,
          mapTypeControl: false,
          zoomControl: false,
          scaleControl: true,
          streetViewControl: false,
          fullscreenControl: false,
          center: uluru,
					styles: [
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#193341"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#2c5a71"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#29768a"
            },
            {
                "lightness": -37
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#406d80"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#406d80"
            }
        ]
    },
    {
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "off"
            },
            {
                "color": "#3e606f"
            },
            {
                "weight": 2
            },
            {
                "gamma": 0.84
            }
        ]
    },
    {
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "transparent"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry",
        "stylers": [
            {
                "weight": 0.6
            },
            {
                "color": "#1a3541"
            }
        ]
    },
    {
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#2c5a71"
            }
        ]
    }
]
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKNOrEi9N-L2RrZAgITHaKIyJlj5BjouU&callback=initMap">
    </script>

<!-- 
     (c)2017
     Built by matt@mattmacneil.com
-->

</body>
</html>