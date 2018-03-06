<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <title>KML Layers</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        float: left;
        height: 100%;
        width: 79%;
      }
      #content-window {
        float: left;
        font-family: 'Roboto','sans-serif';
        height: 100%;
        line-height: 30px;
        padding-left: 10px;
        width: 19%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <div id="content-window"></div>
    <script>

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: {lat: -22.7434969998076, lng: -47.331802}
        });

        var kmlLayer = new google.maps.KmlLayer({
          url: 'https://raw.githubusercontent.com/dhirajprakash/googlemaps/master/americana.kml',
          preserveViewport: true, suppressInfoWindows: true,clickable: true,
          map: map
        });

           kmlLayer.addListener('click', function(kmlEvent) {
             debugger;
          var text = kmlEvent.featureData.description;
          showInContentWindow(text);
        });

        function showInContentWindow(text) {
          debugger;
          var sidediv = document.getElementById('content-window');
          sidediv.innerHTML = text;
        }
      }

    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkeZvStmcd4GC5HmpJT7mkEN1KFPQ7bPc&libraries=visualization&callback=initMap">
    </script>
  </body>
</html>
