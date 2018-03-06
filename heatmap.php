<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Heatmaps</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
      #floating-panel {
        background-color: #fff;
        border: 1px solid #999;
        left: 25%;
        padding: 5px;
        position: absolute;
        top: 10px;
        z-index: 5;
      }
    </style>
  </head>

  <body>
    <div id="floating-panel">
      <button onclick="toggleHeatmap()">Toggle Heatmap</button>
      <button onclick="changeGradient()">Change gradient</button>
      <button onclick="changeRadius()">Change radius</button>
      <button onclick="changeOpacity()">Change opacity</button>
	  <a href="https://www.youtube.com/watch?v=WY_s6-WNZFU" target="_blank" >Heatmap Video</a>
    </div>
	
    <div id="map"></div>
    <script>

      // This example requires the Visualization library. Include the libraries=visualization
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=visualization">

      var map, heatmap;

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: {lat: -23.98906, lng: -46.287759},
          mapTypeId: 'satellite'
        });

        heatmap = new google.maps.visualization.HeatmapLayer({
          data: getPoints2(),
          map: map
        });
      }

      function toggleHeatmap() {
        heatmap.setMap(heatmap.getMap() ? null : map);
      }

      function changeGradient() {
        var gradient = [
          'rgba(0, 255, 255, 0)',
          'rgba(0, 255, 255, 1)',
          'rgba(0, 191, 255, 1)',
          'rgba(0, 127, 255, 1)',
          'rgba(0, 63, 255, 1)',
          'rgba(0, 0, 255, 1)',
          'rgba(0, 0, 223, 1)',
          'rgba(0, 0, 191, 1)',
          'rgba(0, 0, 159, 1)',
          'rgba(0, 0, 127, 1)',
          'rgba(63, 0, 91, 1)',
          'rgba(127, 0, 63, 1)',
          'rgba(191, 0, 31, 1)',
          'rgba(255, 0, 0, 1)'
        ]
        heatmap.set('gradient', heatmap.get('gradient') ? null : gradient);
      }

      function changeRadius() {
        heatmap.set('radius', heatmap.get('radius') ? null : 20);
      }

      function changeOpacity() {
        heatmap.set('opacity', heatmap.get('opacity') ? null : 0.2);
      }

        
	   // Heatmap data: 500 Points
      function getPoints2() {
		  var map_array = [];
		   
			map_array.push(new google.maps.LatLng(-23.98906, -46.287759));
			 
			map_array.push(new google.maps.LatLng(-23.988178, -46.289236));
			 
			map_array.push(new google.maps.LatLng(-23.988615, -46.289093));
			 
			map_array.push(new google.maps.LatLng(-23.987926, -46.28976));
			 
			map_array.push(new google.maps.LatLng(-23.988429, -46.288673));
			 
			map_array.push(new google.maps.LatLng(-23.986501, -46.287514));
			 
			map_array.push(new google.maps.LatLng(-23.9885, -46.288506));
			 
			map_array.push(new google.maps.LatLng(-23.98712, -46.287943));
			 
			map_array.push(new google.maps.LatLng(-23.988392, -46.288737));
			 
			map_array.push(new google.maps.LatLng(-23.988244, -46.288697));
			 
			map_array.push(new google.maps.LatLng(-23.988377, -46.287977));
			 
			map_array.push(new google.maps.LatLng(-23.987887, -46.289485));
			 
			map_array.push(new google.maps.LatLng(-23.989197, -46.289269));
			 
			map_array.push(new google.maps.LatLng(-23.988155, -46.289364));
			 
			map_array.push(new google.maps.LatLng(-23.987373, -46.288124));
			 
			map_array.push(new google.maps.LatLng(-23.98843, -46.287992));
			 
			map_array.push(new google.maps.LatLng(-23.988181, -46.289229));
			 
			map_array.push(new google.maps.LatLng(-23.988429, -46.288752));
			 
			map_array.push(new google.maps.LatLng(-23.989114, -46.287689));
			 
			map_array.push(new google.maps.LatLng(-23.988092, -46.289685));
			 
			map_array.push(new google.maps.LatLng(-23.988842, -46.288031));
			 
			map_array.push(new google.maps.LatLng(-23.988201, -46.289145));
			 
			map_array.push(new google.maps.LatLng(-23.989209, -46.287572));
			 
			map_array.push(new google.maps.LatLng(-23.988776, -46.288118));
			 
			map_array.push(new google.maps.LatLng(-23.988496, -46.288469));
			 
			map_array.push(new google.maps.LatLng(-23.98846, -46.288664));
			 
			map_array.push(new google.maps.LatLng(-23.987333, -46.288096));
			 
			map_array.push(new google.maps.LatLng(-23.987019, -46.287872));
			 
			map_array.push(new google.maps.LatLng(-23.989016, -46.287812));
			 
			map_array.push(new google.maps.LatLng(-23.98868, -46.288234));
			 
			map_array.push(new google.maps.LatLng(-23.987267, -46.288047));
			 
			map_array.push(new google.maps.LatLng(-23.987795, -46.288414));
			 
			map_array.push(new google.maps.LatLng(-23.98863, -46.288302));
			 
			map_array.push(new google.maps.LatLng(-23.989201, -46.288366));
			 
			map_array.push(new google.maps.LatLng(-23.987902, -46.288485));
			 
			map_array.push(new google.maps.LatLng(-23.988194, -46.289176));
			 
			map_array.push(new google.maps.LatLng(-23.988852, -46.288024));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.988582, -46.290057));
			 
			map_array.push(new google.maps.LatLng(-23.986934, -46.287814));
			 
			map_array.push(new google.maps.LatLng(-23.988753, -46.288435));
			 
			map_array.push(new google.maps.LatLng(-23.987577, -46.288263));
			 
			map_array.push(new google.maps.LatLng(-23.987282, -46.288061));
			 
			map_array.push(new google.maps.LatLng(-23.987604, -46.288282));
			 
			map_array.push(new google.maps.LatLng(-23.987128, -46.287949));
			 
			map_array.push(new google.maps.LatLng(-23.988491, -46.288916));
			 
			map_array.push(new google.maps.LatLng(-23.989152, -46.289295));
			 
			map_array.push(new google.maps.LatLng(-23.987826, -46.288434));
			 
			map_array.push(new google.maps.LatLng(-23.988286, -46.289219));
			 
			map_array.push(new google.maps.LatLng(-23.989575, -46.287114));
			 
			map_array.push(new google.maps.LatLng(-23.988488, -46.288472));
			 
			map_array.push(new google.maps.LatLng(-23.988828, -46.288063));
			 
			map_array.push(new google.maps.LatLng(-23.988248, -46.28751));
			 
			map_array.push(new google.maps.LatLng(-23.988045, -46.28991));
			 
			map_array.push(new google.maps.LatLng(-23.989086, -46.287995));
			 
			map_array.push(new google.maps.LatLng(-23.987742, -46.288378));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.987534, -46.288234));
			 
			map_array.push(new google.maps.LatLng(-23.987551, -46.288245));
			 
			map_array.push(new google.maps.LatLng(-23.988207, -46.289108));
			 
			map_array.push(new google.maps.LatLng(-23.988281, -46.28867));
			 
			map_array.push(new google.maps.LatLng(-23.988285, -46.288668));
			 
			map_array.push(new google.maps.LatLng(-23.98869, -46.288054));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.988381, -46.288753));
			 
			map_array.push(new google.maps.LatLng(-23.988747, -46.288154));
			 
			map_array.push(new google.maps.LatLng(-23.988955, -46.288297));
			 
			map_array.push(new google.maps.LatLng(-23.988796, -46.287916));
			 
			map_array.push(new google.maps.LatLng(-23.988453, -46.289152));
			 
			map_array.push(new google.maps.LatLng(-23.98912, -46.287681));
			 
			map_array.push(new google.maps.LatLng(-23.987768, -46.288394));
			 
			map_array.push(new google.maps.LatLng(-23.987647, -46.288314));
			 
			map_array.push(new google.maps.LatLng(-23.986561, -46.287552));
			 
			map_array.push(new google.maps.LatLng(-23.987668, -46.288326));
			 
			map_array.push(new google.maps.LatLng(-23.988139, -46.289443));
			 
			map_array.push(new google.maps.LatLng(-23.988651, -46.288277));
			 
			map_array.push(new google.maps.LatLng(-23.988349, -46.288971));
			 
			map_array.push(new google.maps.LatLng(-23.988425, -46.28899));
			 
			map_array.push(new google.maps.LatLng(-23.988045, -46.28991));
			 
			map_array.push(new google.maps.LatLng(-23.988487, -46.288009));
			 
			map_array.push(new google.maps.LatLng(-23.988719, -46.288188));
			 
			map_array.push(new google.maps.LatLng(-23.98853, -46.288367));
			 
			map_array.push(new google.maps.LatLng(-23.989352, -46.287393));
			 
			map_array.push(new google.maps.LatLng(-23.988376, -46.289371));
			 
			map_array.push(new google.maps.LatLng(-23.987742, -46.288378));
			 
			map_array.push(new google.maps.LatLng(-23.988365, -46.288733));
			 
			map_array.push(new google.maps.LatLng(-23.987963, -46.288529));
			 
			map_array.push(new google.maps.LatLng(-23.986949, -46.287822));
			 
			map_array.push(new google.maps.LatLng(-23.987109, -46.287934));
			 
			map_array.push(new google.maps.LatLng(-23.988245, -46.288332));
			 
			map_array.push(new google.maps.LatLng(-23.988475, -46.288487));
			 
			map_array.push(new google.maps.LatLng(-23.988052, -46.288938));
			 
			map_array.push(new google.maps.LatLng(-23.988277, -46.288714));
			 
			map_array.push(new google.maps.LatLng(-23.987326, -46.288088));
			 
			map_array.push(new google.maps.LatLng(-23.987931, -46.288509));
			 
			map_array.push(new google.maps.LatLng(-23.988451, -46.288374));
			 
			map_array.push(new google.maps.LatLng(-23.987574, -46.288266));
			 
			map_array.push(new google.maps.LatLng(-23.988776, -46.288118));
			 
			map_array.push(new google.maps.LatLng(-23.987152, -46.287966));
			 
			map_array.push(new google.maps.LatLng(-23.988277, -46.288026));
			 
			map_array.push(new google.maps.LatLng(-23.987489, -46.288203));
			 
			map_array.push(new google.maps.LatLng(-23.987949, -46.289174));
			 
			map_array.push(new google.maps.LatLng(-23.988183, -46.289215));
			 
			map_array.push(new google.maps.LatLng(-23.989255, -46.287515));
			 
			map_array.push(new google.maps.LatLng(-23.987953, -46.287961));
			 
			map_array.push(new google.maps.LatLng(-23.988596, -46.288186));
			 
			map_array.push(new google.maps.LatLng(-23.989335, -46.288302));
			 
			map_array.push(new google.maps.LatLng(-23.989307, -46.288459));
			 
			map_array.push(new google.maps.LatLng(-23.987489, -46.2882));
			 
			map_array.push(new google.maps.LatLng(-23.988721, -46.288185));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.288695));
			 
			map_array.push(new google.maps.LatLng(-23.988794, -46.288293));
			 
			map_array.push(new google.maps.LatLng(-23.989318, -46.287435));
			 
			map_array.push(new google.maps.LatLng(-23.988882, -46.287982));
			 
			map_array.push(new google.maps.LatLng(-23.988808, -46.288075));
			 
			map_array.push(new google.maps.LatLng(-23.989085, -46.287727));
			 
			map_array.push(new google.maps.LatLng(-23.988405, -46.289352));
			 
			map_array.push(new google.maps.LatLng(-23.987997, -46.289447));
			 
			map_array.push(new google.maps.LatLng(-23.988538, -46.288374));
			 
			map_array.push(new google.maps.LatLng(-23.989152, -46.289295));
			 
			map_array.push(new google.maps.LatLng(-23.988565, -46.287815));
			 
			map_array.push(new google.maps.LatLng(-23.987489, -46.2882));
			 
			map_array.push(new google.maps.LatLng(-23.988681, -46.288236));
			 
			map_array.push(new google.maps.LatLng(-23.988481, -46.288656));
			 
			map_array.push(new google.maps.LatLng(-23.988573, -46.288019));
			 
			map_array.push(new google.maps.LatLng(-23.987946, -46.290411));
			 
			map_array.push(new google.maps.LatLng(-23.98813, -46.289051));
			 
			map_array.push(new google.maps.LatLng(-23.988807, -46.28808));
			 
			map_array.push(new google.maps.LatLng(-23.988069, -46.289807));
			 
			map_array.push(new google.maps.LatLng(-23.987031, -46.28788));
			 
			map_array.push(new google.maps.LatLng(-23.988026, -46.290002));
			 
			map_array.push(new google.maps.LatLng(-23.988356, -46.288693));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.988482, -46.288188));
			 
			map_array.push(new google.maps.LatLng(-23.988321, -46.288725));
			 
			map_array.push(new google.maps.LatLng(-23.988593, -46.288347));
			 
			map_array.push(new google.maps.LatLng(-23.986708, -46.287658));
			 
			map_array.push(new google.maps.LatLng(-23.987875, -46.288466));
			 
			map_array.push(new google.maps.LatLng(-23.988568, -46.288901));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.988826, -46.288612));
			 
			map_array.push(new google.maps.LatLng(-23.987626, -46.288295));
			 
			map_array.push(new google.maps.LatLng(-23.987461, -46.288184));
			 
			map_array.push(new google.maps.LatLng(-23.988207, -46.289079));
			 
			map_array.push(new google.maps.LatLng(-23.988262, -46.288886));
			 
			map_array.push(new google.maps.LatLng(-23.988202, -46.288627));
			 
			map_array.push(new google.maps.LatLng(-23.988468, -46.288917));
			 
			map_array.push(new google.maps.LatLng(-23.987921, -46.288501));
			 
			map_array.push(new google.maps.LatLng(-23.988881, -46.287982));
			 
			map_array.push(new google.maps.LatLng(-23.987247, -46.288037));
			 
			map_array.push(new google.maps.LatLng(-23.988297, -46.288754));
			 
			map_array.push(new google.maps.LatLng(-23.987583, -46.288265));
			 
			map_array.push(new google.maps.LatLng(-23.988512, -46.288345));
			 
			map_array.push(new google.maps.LatLng(-23.988261, -46.289029));
			 
			map_array.push(new google.maps.LatLng(-23.988329, -46.288465));
			 
			map_array.push(new google.maps.LatLng(-23.988502, -46.288139));
			 
			map_array.push(new google.maps.LatLng(-23.988189, -46.288583));
			 
			map_array.push(new google.maps.LatLng(-23.988633, -46.287658));
			 
			map_array.push(new google.maps.LatLng(-23.988379, -46.288712));
			 
			map_array.push(new google.maps.LatLng(-23.987412, -46.28815));
			 
			map_array.push(new google.maps.LatLng(-23.988308, -46.288954));
			 
			map_array.push(new google.maps.LatLng(-23.988079, -46.289317));
			 
			map_array.push(new google.maps.LatLng(-23.989352, -46.287393));
			 
			map_array.push(new google.maps.LatLng(-23.988215, -46.289058));
			 
			map_array.push(new google.maps.LatLng(-23.988604, -46.289189));
			 
			map_array.push(new google.maps.LatLng(-23.987894, -46.289508));
			 
			map_array.push(new google.maps.LatLng(-23.988831, -46.288935));
			 
			map_array.push(new google.maps.LatLng(-23.988026, -46.290002));
			 
			map_array.push(new google.maps.LatLng(-23.988588, -46.288353));
			 
			map_array.push(new google.maps.LatLng(-23.988275, -46.288828));
			 
			map_array.push(new google.maps.LatLng(-23.988742, -46.288157));
			 
			map_array.push(new google.maps.LatLng(-23.988461, -46.288778));
			 
			map_array.push(new google.maps.LatLng(-23.986819, -46.287733));
			 
			map_array.push(new google.maps.LatLng(-23.988597, -46.289643));
			 
			map_array.push(new google.maps.LatLng(-23.988112, -46.287572));
			 
			map_array.push(new google.maps.LatLng(-23.988842, -46.28803));
			 
			map_array.push(new google.maps.LatLng(-23.988665, -46.28826));
			 
			map_array.push(new google.maps.LatLng(-23.988168, -46.289088));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.988174, -46.288788));
			 
			map_array.push(new google.maps.LatLng(-23.988563, -46.28838));
			 
			map_array.push(new google.maps.LatLng(-23.988365, -46.288948));
			 
			map_array.push(new google.maps.LatLng(-23.988601, -46.288239));
			 
			map_array.push(new google.maps.LatLng(-23.988969, -46.287872));
			 
			map_array.push(new google.maps.LatLng(-23.988482, -46.288818));
			 
			map_array.push(new google.maps.LatLng(-23.98805, -46.289901));
			 
			map_array.push(new google.maps.LatLng(-23.98863, -46.288298));
			 
			map_array.push(new google.maps.LatLng(-23.988426, -46.289067));
			 
			map_array.push(new google.maps.LatLng(-23.986879, -46.287775));
			 
			map_array.push(new google.maps.LatLng(-23.987712, -46.288358));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.98885, -46.289098));
			 
			map_array.push(new google.maps.LatLng(-23.987535, -46.28824));
			 
			map_array.push(new google.maps.LatLng(-23.987583, -46.288265));
			 
			map_array.push(new google.maps.LatLng(-23.989111, -46.287695));
			 
			map_array.push(new google.maps.LatLng(-23.98906, -46.287759));
			 
			map_array.push(new google.maps.LatLng(-23.988207, -46.288542));
			 
			map_array.push(new google.maps.LatLng(-23.987712, -46.288358));
			 
			map_array.push(new google.maps.LatLng(-23.988265, -46.288468));
			 
			map_array.push(new google.maps.LatLng(-23.986691, -46.287644));
			 
			map_array.push(new google.maps.LatLng(-23.988212, -46.289074));
			 
			map_array.push(new google.maps.LatLng(-23.988438, -46.288507));
			 
			map_array.push(new google.maps.LatLng(-23.988418, -46.288877));
			 
			map_array.push(new google.maps.LatLng(-23.988167, -46.289305));
			 
			map_array.push(new google.maps.LatLng(-23.988613, -46.288855));
			 
			map_array.push(new google.maps.LatLng(-23.98795, -46.288145));
			 
			map_array.push(new google.maps.LatLng(-23.986803, -46.287723));
			 
			map_array.push(new google.maps.LatLng(-23.988625, -46.288094));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.988043, -46.288581));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288838));
			 
			map_array.push(new google.maps.LatLng(-23.988797, -46.288093));
			 
			map_array.push(new google.maps.LatLng(-23.988506, -46.288813));
			 
			map_array.push(new google.maps.LatLng(-23.98854, -46.288268));
			 
			map_array.push(new google.maps.LatLng(-23.989011, -46.28782));
			 
			map_array.push(new google.maps.LatLng(-23.988645, -46.289828));
			 
			map_array.push(new google.maps.LatLng(-23.989154, -46.289168));
			 
			map_array.push(new google.maps.LatLng(-23.988519, -46.288346));
			 
			map_array.push(new google.maps.LatLng(-23.989085, -46.287727));
			 
			map_array.push(new google.maps.LatLng(-23.987944, -46.289963));
			 
			map_array.push(new google.maps.LatLng(-23.988446, -46.288872));
			 
			map_array.push(new google.maps.LatLng(-23.988284, -46.288998));
			 
			map_array.push(new google.maps.LatLng(-23.987957, -46.290358));
			 
			map_array.push(new google.maps.LatLng(-23.987031, -46.28788));
			 
			map_array.push(new google.maps.LatLng(-23.988496, -46.288469));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.988651, -46.288277));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.988766, -46.288134));
			 
			map_array.push(new google.maps.LatLng(-23.987884, -46.287814));
			 
			map_array.push(new google.maps.LatLng(-23.988784, -46.289248));
			 
			map_array.push(new google.maps.LatLng(-23.988526, -46.288683));
			 
			map_array.push(new google.maps.LatLng(-23.988086, -46.288779));
			 
			map_array.push(new google.maps.LatLng(-23.988385, -46.288767));
			 
			map_array.push(new google.maps.LatLng(-23.987647, -46.288314));
			 
			map_array.push(new google.maps.LatLng(-23.988428, -46.288705));
			 
			map_array.push(new google.maps.LatLng(-23.988116, -46.289285));
			 
			map_array.push(new google.maps.LatLng(-23.989189, -46.287597));
			 
			map_array.push(new google.maps.LatLng(-23.98821, -46.289091));
			 
			map_array.push(new google.maps.LatLng(-23.988519, -46.288395));
			 
			map_array.push(new google.maps.LatLng(-23.988974, -46.288627));
			 
			map_array.push(new google.maps.LatLng(-23.987461, -46.288184));
			 
			map_array.push(new google.maps.LatLng(-23.988207, -46.289108));
			 
			map_array.push(new google.maps.LatLng(-23.988372, -46.288435));
			 
			map_array.push(new google.maps.LatLng(-23.988157, -46.289196));
			 
			map_array.push(new google.maps.LatLng(-23.989302, -46.287455));
			 
			map_array.push(new google.maps.LatLng(-23.987787, -46.288405));
			 
			map_array.push(new google.maps.LatLng(-23.987305, -46.288077));
			 
			map_array.push(new google.maps.LatLng(-23.988611, -46.288325));
			 
			map_array.push(new google.maps.LatLng(-23.98777, -46.288398));
			 
			map_array.push(new google.maps.LatLng(-23.988475, -46.289282));
			 
			map_array.push(new google.maps.LatLng(-23.988287, -46.289031));
			 
			map_array.push(new google.maps.LatLng(-23.988098, -46.289647));
			 
			map_array.push(new google.maps.LatLng(-23.988158, -46.289357));
			 
			map_array.push(new google.maps.LatLng(-23.988235, -46.288785));
			 
			map_array.push(new google.maps.LatLng(-23.988191, -46.289799));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.989265, -46.289234));
			 
			map_array.push(new google.maps.LatLng(-23.988253, -46.289076));
			 
			map_array.push(new google.maps.LatLng(-23.988882, -46.287982));
			 
			map_array.push(new google.maps.LatLng(-23.988399, -46.289451));
			 
			map_array.push(new google.maps.LatLng(-23.988621, -46.288835));
			 
			map_array.push(new google.maps.LatLng(-23.988922, -46.287931));
			 
			map_array.push(new google.maps.LatLng(-23.987973, -46.28889));
			 
			map_array.push(new google.maps.LatLng(-23.988486, -46.28863));
			 
			map_array.push(new google.maps.LatLng(-23.989043, -46.288498));
			 
			map_array.push(new google.maps.LatLng(-23.987338, -46.288099));
			 
			map_array.push(new google.maps.LatLng(-23.988386, -46.288443));
			 
			map_array.push(new google.maps.LatLng(-23.989166, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.988889, -46.287937));
			 
			map_array.push(new google.maps.LatLng(-23.988018, -46.288565));
			 
			map_array.push(new google.maps.LatLng(-23.988266, -46.288775));
			 
			map_array.push(new google.maps.LatLng(-23.988195, -46.288163));
			 
			map_array.push(new google.maps.LatLng(-23.988299, -46.289076));
			 
			map_array.push(new google.maps.LatLng(-23.988204, -46.289126));
			 
			map_array.push(new google.maps.LatLng(-23.988085, -46.289738));
			 
			map_array.push(new google.maps.LatLng(-23.988198, -46.289165));
			 
			map_array.push(new google.maps.LatLng(-23.988805, -46.288077));
			 
			map_array.push(new google.maps.LatLng(-23.987954, -46.289729));
			 
			map_array.push(new google.maps.LatLng(-23.988292, -46.289136));
			 
			map_array.push(new google.maps.LatLng(-23.988202, -46.288543));
			 
			map_array.push(new google.maps.LatLng(-23.987551, -46.288245));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288792));
			 
			map_array.push(new google.maps.LatLng(-23.988744, -46.288164));
			 
			map_array.push(new google.maps.LatLng(-23.987935, -46.290465));
			 
			map_array.push(new google.maps.LatLng(-23.98799, -46.290183));
			 
			map_array.push(new google.maps.LatLng(-23.988435, -46.288711));
			 
			map_array.push(new google.maps.LatLng(-23.988119, -46.289563));
			 
			map_array.push(new google.maps.LatLng(-23.577898, -46.724029));
			 
			map_array.push(new google.maps.LatLng(-23.987968, -46.288529));
			 
			map_array.push(new google.maps.LatLng(-23.988431, -46.28874));
			 
			map_array.push(new google.maps.LatLng(-23.988404, -46.28883));
			 
			map_array.push(new google.maps.LatLng(-23.988265, -46.288994));
			 
			map_array.push(new google.maps.LatLng(-23.988484, -46.287827));
			 
			map_array.push(new google.maps.LatLng(-23.988808, -46.288075));
			 
			map_array.push(new google.maps.LatLng(-23.988227, -46.288979));
			 
			map_array.push(new google.maps.LatLng(-23.98821, -46.289091));
			 
			map_array.push(new google.maps.LatLng(-23.988337, -46.289038));
			 
			map_array.push(new google.maps.LatLng(-23.988769, -46.288698));
			 
			map_array.push(new google.maps.LatLng(-23.987054, -46.287898));
			 
			map_array.push(new google.maps.LatLng(-23.987631, -46.288301));
			 
			map_array.push(new google.maps.LatLng(-23.988319, -46.288529));
			 
			map_array.push(new google.maps.LatLng(-23.988581, -46.288332));
			 
			map_array.push(new google.maps.LatLng(-23.988719, -46.288195));
			 
			map_array.push(new google.maps.LatLng(-23.988354, -46.289333));
			 
			map_array.push(new google.maps.LatLng(-23.98777, -46.288398));
			 
			map_array.push(new google.maps.LatLng(-23.988774, -46.288354));
			 
			map_array.push(new google.maps.LatLng(-23.988252, -46.288848));
			 
			map_array.push(new google.maps.LatLng(-23.988623, -46.288307));
			 
			map_array.push(new google.maps.LatLng(-23.98823, -46.288952));
			 
			map_array.push(new google.maps.LatLng(-23.988564, -46.288565));
			 
			map_array.push(new google.maps.LatLng(-23.988183, -46.288611));
			 
			map_array.push(new google.maps.LatLng(-23.988315, -46.288848));
			 
			map_array.push(new google.maps.LatLng(-23.989011, -46.28782));
			 
			map_array.push(new google.maps.LatLng(-23.988575, -46.288368));
			 
			map_array.push(new google.maps.LatLng(-23.987663, -46.288326));
			 
			map_array.push(new google.maps.LatLng(-23.988437, -46.288798));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.989178, -46.287608));
			 
			map_array.push(new google.maps.LatLng(-23.988651, -46.288277));
			 
			map_array.push(new google.maps.LatLng(-23.988389, -46.288834));
			 
			map_array.push(new google.maps.LatLng(-23.988262, -46.288845));
			 
			map_array.push(new google.maps.LatLng(-23.988035, -46.28929));
			 
			map_array.push(new google.maps.LatLng(-23.986667, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.987823, -46.288433));
			 
			map_array.push(new google.maps.LatLng(-23.987957, -46.290358));
			 
			map_array.push(new google.maps.LatLng(-23.988751, -46.28828));
			 
			map_array.push(new google.maps.LatLng(-23.989422, -46.287306));
			 
			map_array.push(new google.maps.LatLng(-23.988604, -46.287876));
			 
			map_array.push(new google.maps.LatLng(-23.988758, -46.288647));
			 
			map_array.push(new google.maps.LatLng(-23.989048, -46.289095));
			 
			map_array.push(new google.maps.LatLng(-23.988452, -46.288517));
			 
			map_array.push(new google.maps.LatLng(-23.987703, -46.28835));
			 
			map_array.push(new google.maps.LatLng(-23.987489, -46.288203));
			 
			map_array.push(new google.maps.LatLng(-23.988363, -46.288591));
			 
			map_array.push(new google.maps.LatLng(-23.988554, -46.288326));
			 
			map_array.push(new google.maps.LatLng(-23.987617, -46.288291));
			 
			map_array.push(new google.maps.LatLng(-23.988632, -46.288294));
			 
			map_array.push(new google.maps.LatLng(-23.986721, -46.287661));
			 
			map_array.push(new google.maps.LatLng(-23.988445, -46.288442));
			 
			map_array.push(new google.maps.LatLng(-23.988616, -46.288324));
			 
			map_array.push(new google.maps.LatLng(-23.98831, -46.288847));
			 
			map_array.push(new google.maps.LatLng(-23.988074, -46.289771));
			 
			map_array.push(new google.maps.LatLng(-23.987247, -46.288037));
			 
			map_array.push(new google.maps.LatLng(-23.988374, -46.2888));
			 
			map_array.push(new google.maps.LatLng(-23.98849, -46.288958));
			 
			map_array.push(new google.maps.LatLng(-23.988594, -46.288557));
			 
			map_array.push(new google.maps.LatLng(-23.988217, -46.289043));
			 
			map_array.push(new google.maps.LatLng(-23.988066, -46.289741));
			 
			map_array.push(new google.maps.LatLng(-23.987798, -46.288416));
			 
			map_array.push(new google.maps.LatLng(-23.988154, -46.289214));
			 
			map_array.push(new google.maps.LatLng(-23.988549, -46.288408));
			 
			map_array.push(new google.maps.LatLng(-23.988466, -46.288758));
			 
			map_array.push(new google.maps.LatLng(-23.987031, -46.28788));
			 
			map_array.push(new google.maps.LatLng(-23.988382, -46.288149));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.288695));
			 
			map_array.push(new google.maps.LatLng(-23.988597, -46.289643));
			 
			map_array.push(new google.maps.LatLng(-23.987986, -46.290209));
			 
			map_array.push(new google.maps.LatLng(-23.988464, -46.288807));
			 
			map_array.push(new google.maps.LatLng(-23.988769, -46.289803));
			 
			map_array.push(new google.maps.LatLng(-23.987247, -46.288037));
			 
			map_array.push(new google.maps.LatLng(-23.988951, -46.288992));
			 
			map_array.push(new google.maps.LatLng(-23.988852, -46.288024));
			 
			map_array.push(new google.maps.LatLng(-23.988104, -46.288443));
			 
			map_array.push(new google.maps.LatLng(-23.987628, -46.288296));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.98801, -46.28837));
			 
			map_array.push(new google.maps.LatLng(-23.988922, -46.287931));
			 
			map_array.push(new google.maps.LatLng(-23.988258, -46.288501));
			 
			map_array.push(new google.maps.LatLng(-23.989059, -46.288337));
			 
			map_array.push(new google.maps.LatLng(-23.577898, -46.724029));
			 
			map_array.push(new google.maps.LatLng(-23.986803, -46.287723));
			 
			map_array.push(new google.maps.LatLng(-23.987001, -46.287858));
			 
			map_array.push(new google.maps.LatLng(-23.98837, -46.289277));
			 
			map_array.push(new google.maps.LatLng(-23.987534, -46.288234));
			 
			map_array.push(new google.maps.LatLng(-23.98807, -46.289383));
			 
			map_array.push(new google.maps.LatLng(-23.989309, -46.287959));
			 
			map_array.push(new google.maps.LatLng(-23.98829, -46.288723));
			 
			map_array.push(new google.maps.LatLng(-23.988707, -46.288025));
			 
			map_array.push(new google.maps.LatLng(-23.988718, -46.287975));
			 
			map_array.push(new google.maps.LatLng(-23.987935, -46.290465));
			 
			map_array.push(new google.maps.LatLng(-23.988282, -46.288549));
			 
			map_array.push(new google.maps.LatLng(-23.988075, -46.28885));
			 
			map_array.push(new google.maps.LatLng(-23.987574, -46.288266));
			 
			map_array.push(new google.maps.LatLng(-23.988189, -46.289183));
			 
			map_array.push(new google.maps.LatLng(-23.988461, -46.288799));
			 
			map_array.push(new google.maps.LatLng(-23.988844, -46.28803));
			 
			map_array.push(new google.maps.LatLng(-23.988438, -46.288084));
			 
			map_array.push(new google.maps.LatLng(-23.98853, -46.288431));
			 
			map_array.push(new google.maps.LatLng(-23.987507, -46.288215));
			 
			map_array.push(new google.maps.LatLng(-23.988181, -46.289229));
			 
			map_array.push(new google.maps.LatLng(-23.98736, -46.288115));
			 
			map_array.push(new google.maps.LatLng(-23.988009, -46.29009));
			 
			map_array.push(new google.maps.LatLng(-23.98803, -46.289989));
			 
			map_array.push(new google.maps.LatLng(-23.988651, -46.288277));
			 
			map_array.push(new google.maps.LatLng(-23.989496, -46.287213));
			 
			map_array.push(new google.maps.LatLng(-23.987935, -46.290465));
			 
			map_array.push(new google.maps.LatLng(-23.988244, -46.289094));
			 
			map_array.push(new google.maps.LatLng(-23.988368, -46.288339));
			 
			map_array.push(new google.maps.LatLng(-23.98821, -46.289091));
			 
			map_array.push(new google.maps.LatLng(-23.988505, -46.289272));
			 
			map_array.push(new google.maps.LatLng(-23.987844, -46.289393));
			 
			map_array.push(new google.maps.LatLng(-23.988127, -46.289192));
			 
			map_array.push(new google.maps.LatLng(-23.988555, -46.288389));
			 
			map_array.push(new google.maps.LatLng(-23.988841, -46.288043));
			 
			map_array.push(new google.maps.LatLng(-23.98797, -46.290283));
			 
			map_array.push(new google.maps.LatLng(-23.987691, -46.288814));
			 
			map_array.push(new google.maps.LatLng(-23.989166, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.988385, -46.288851));
			 
			map_array.push(new google.maps.LatLng(-23.988558, -46.288388));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.987179, -46.289336));
			 
			map_array.push(new google.maps.LatLng(-23.988409, -46.288609));
			 
			map_array.push(new google.maps.LatLng(-23.988721, -46.288192));
			 
			map_array.push(new google.maps.LatLng(-23.987535, -46.28824));
			 
			map_array.push(new google.maps.LatLng(-23.988254, -46.289056));
			 
			map_array.push(new google.maps.LatLng(-23.98797, -46.290283));
			 
			map_array.push(new google.maps.LatLng(-23.988434, -46.288707));
			 
			map_array.push(new google.maps.LatLng(-23.987957, -46.290358));
			 
			map_array.push(new google.maps.LatLng(-23.989178, -46.287608));
			 
			map_array.push(new google.maps.LatLng(-23.988209, -46.289321));
			 
			map_array.push(new google.maps.LatLng(-23.989422, -46.287306));
			 
			map_array.push(new google.maps.LatLng(-23.988499, -46.289088));
			 
			map_array.push(new google.maps.LatLng(-23.987282, -46.288061));
			 
			map_array.push(new google.maps.LatLng(-23.98891, -46.289422));
			 
			map_array.push(new google.maps.LatLng(-23.988037, -46.288577));
			 
			map_array.push(new google.maps.LatLng(-23.988612, -46.288933));
			 
			map_array.push(new google.maps.LatLng(-23.987267, -46.288047));
			 
			map_array.push(new google.maps.LatLng(-23.987504, -46.289035));
			 
			map_array.push(new google.maps.LatLng(-23.98802, -46.289428));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.987461, -46.288184));
			 
			map_array.push(new google.maps.LatLng(-23.988649, -46.2892));
			 
			map_array.push(new google.maps.LatLng(-23.988087, -46.2889));
			 
			map_array.push(new google.maps.LatLng(-23.988217, -46.289043));
			 
			map_array.push(new google.maps.LatLng(-23.988007, -46.288556));
			 
			map_array.push(new google.maps.LatLng(-23.987282, -46.288061));
			 
			map_array.push(new google.maps.LatLng(-23.988413, -46.288703));
			 
			map_array.push(new google.maps.LatLng(-23.98863, -46.288302));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.288957));
			 
			map_array.push(new google.maps.LatLng(-23.987326, -46.288088));
			 
			map_array.push(new google.maps.LatLng(-23.988504, -46.288698));
			 
			map_array.push(new google.maps.LatLng(-23.987461, -46.288184));
			 
			map_array.push(new google.maps.LatLng(-23.987451, -46.288183));
			 
			map_array.push(new google.maps.LatLng(-23.988206, -46.289031));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.988498, -46.288458));
			 
			map_array.push(new google.maps.LatLng(-23.987995, -46.290163));
			 
			map_array.push(new google.maps.LatLng(-23.988477, -46.288731));
			 
			map_array.push(new google.maps.LatLng(-23.988383, -46.288706));
			 
			map_array.push(new google.maps.LatLng(-23.987729, -46.289606));
			 
			map_array.push(new google.maps.LatLng(-23.987412, -46.28815));
			 
			map_array.push(new google.maps.LatLng(-23.988805, -46.288077));
			 
			map_array.push(new google.maps.LatLng(-23.987712, -46.288358));
			 
			map_array.push(new google.maps.LatLng(-23.988187, -46.288293));
			 
			map_array.push(new google.maps.LatLng(-23.98803, -46.289989));
			 
			map_array.push(new google.maps.LatLng(-23.988143, -46.289435));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.988294, -46.288713));
			 
			map_array.push(new google.maps.LatLng(-23.988842, -46.28803));
			 
			map_array.push(new google.maps.LatLng(-23.988651, -46.288141));
			 
			map_array.push(new google.maps.LatLng(-23.987534, -46.288234));
			 
			map_array.push(new google.maps.LatLng(-23.988508, -46.288396));
			 
			map_array.push(new google.maps.LatLng(-23.989352, -46.287393));
			 
			map_array.push(new google.maps.LatLng(-23.988344, -46.288559));
			 
			map_array.push(new google.maps.LatLng(-23.987391, -46.288136));
			 
			map_array.push(new google.maps.LatLng(-23.987878, -46.288475));
			 
			map_array.push(new google.maps.LatLng(-23.988141, -46.287762));
			 
			map_array.push(new google.maps.LatLng(-23.986879, -46.287775));
			 
			map_array.push(new google.maps.LatLng(-23.988068, -46.28932));
			 
			map_array.push(new google.maps.LatLng(-23.988584, -46.288253));
			 
			map_array.push(new google.maps.LatLng(-23.988403, -46.288388));
			 
			map_array.push(new google.maps.LatLng(-23.987436, -46.288163));
			 
			map_array.push(new google.maps.LatLng(-23.98803, -46.289989));
			 
			map_array.push(new google.maps.LatLng(-23.987688, -46.289117));
			 
			map_array.push(new google.maps.LatLng(-23.988248, -46.288461));
			 
			map_array.push(new google.maps.LatLng(-23.988196, -46.288476));
			 
			map_array.push(new google.maps.LatLng(-23.988363, -46.28848));
			 
			map_array.push(new google.maps.LatLng(-23.987914, -46.288498));
			 
			map_array.push(new google.maps.LatLng(-23.988329, -46.288418));
			 
			map_array.push(new google.maps.LatLng(-23.988504, -46.288922));
			 
			map_array.push(new google.maps.LatLng(-23.987881, -46.28994));
			 
			map_array.push(new google.maps.LatLng(-23.988293, -46.288716));
			 
			map_array.push(new google.maps.LatLng(-23.988178, -46.289236));
			 
			map_array.push(new google.maps.LatLng(-23.988372, -46.288441));
			 
			map_array.push(new google.maps.LatLng(-23.988687, -46.289117));
			 
			map_array.push(new google.maps.LatLng(-23.988645, -46.289588));
			 
			map_array.push(new google.maps.LatLng(-23.987725, -46.288365));
			 
			map_array.push(new google.maps.LatLng(-23.988201, -46.288989));
			 
			map_array.push(new google.maps.LatLng(-23.988885, -46.288697));
			 
			map_array.push(new google.maps.LatLng(-23.988487, -46.288293));
			 
			map_array.push(new google.maps.LatLng(-23.988402, -46.288744));
			 
			map_array.push(new google.maps.LatLng(-23.987583, -46.288265));
			 
			map_array.push(new google.maps.LatLng(-23.988417, -46.288281));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.288695));
			 
			map_array.push(new google.maps.LatLng(-23.988584, -46.288253));
			 
			map_array.push(new google.maps.LatLng(-23.988355, -46.288788));
			 
			map_array.push(new google.maps.LatLng(-23.987842, -46.288451));
			 
			map_array.push(new google.maps.LatLng(-23.987877, -46.290749));
			 
			map_array.push(new google.maps.LatLng(-23.987935, -46.290465));
			 
			map_array.push(new google.maps.LatLng(-23.987071, -46.287908));
			 
			map_array.push(new google.maps.LatLng(-23.988169, -46.289281));
			 
			map_array.push(new google.maps.LatLng(-23.987466, -46.288187));
			 
			map_array.push(new google.maps.LatLng(-23.98877, -46.288121));
			 
			map_array.push(new google.maps.LatLng(-23.989166, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.987875, -46.288383));
			 
			map_array.push(new google.maps.LatLng(-23.988495, -46.288544));
			 
			map_array.push(new google.maps.LatLng(-23.98847, -46.288288));
			 
			map_array.push(new google.maps.LatLng(-23.988379, -46.289015));
			 
			map_array.push(new google.maps.LatLng(-23.988171, -46.289272));
			 
			map_array.push(new google.maps.LatLng(-23.988593, -46.288347));
			 
			map_array.push(new google.maps.LatLng(-23.988543, -46.288769));
			 
			map_array.push(new google.maps.LatLng(-23.987128, -46.287949));
			 
			map_array.push(new google.maps.LatLng(-23.988918, -46.289269));
			 
			map_array.push(new google.maps.LatLng(-23.987935, -46.290465));
			 
			map_array.push(new google.maps.LatLng(-23.988747, -46.288836));
			 
			map_array.push(new google.maps.LatLng(-23.987182, -46.287985));
			 
			map_array.push(new google.maps.LatLng(-23.988693, -46.289208));
			 
			map_array.push(new google.maps.LatLng(-23.986949, -46.287822));
			 
			map_array.push(new google.maps.LatLng(-23.988536, -46.288933));
			 
			map_array.push(new google.maps.LatLng(-23.988196, -46.288528));
			 
			map_array.push(new google.maps.LatLng(-23.987889, -46.2907));
			 
			map_array.push(new google.maps.LatLng(-23.988852, -46.288024));
			 
			map_array.push(new google.maps.LatLng(-23.988479, -46.288281));
			 
			map_array.push(new google.maps.LatLng(-23.987494, -46.288212));
			 
			map_array.push(new google.maps.LatLng(-23.989422, -46.287306));
			 
			map_array.push(new google.maps.LatLng(-23.988695, -46.288223));
			 
			map_array.push(new google.maps.LatLng(-23.988384, -46.289048));
			 
			map_array.push(new google.maps.LatLng(-23.989166, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.989244, -46.287528));
			 
			map_array.push(new google.maps.LatLng(-23.988098, -46.288193));
			 
			map_array.push(new google.maps.LatLng(-23.988462, -46.288298));
			 
			map_array.push(new google.maps.LatLng(-23.987586, -46.289926));
			 
			map_array.push(new google.maps.LatLng(-23.98803, -46.288895));
			 
			map_array.push(new google.maps.LatLng(-23.988477, -46.289489));
			 
			map_array.push(new google.maps.LatLng(-23.988697, -46.288417));
			 
			map_array.push(new google.maps.LatLng(-23.988045, -46.28991));
			 
			map_array.push(new google.maps.LatLng(-23.988382, -46.289137));
			 
			map_array.push(new google.maps.LatLng(-23.988173, -46.288222));
			 
			map_array.push(new google.maps.LatLng(-23.988882, -46.287981));
			 
			map_array.push(new google.maps.LatLng(-23.988079, -46.288693));
			 
			map_array.push(new google.maps.LatLng(-23.988519, -46.288897));
			 
			map_array.push(new google.maps.LatLng(-23.988282, -46.288741));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.988484, -46.288475));
			 
			map_array.push(new google.maps.LatLng(-23.989054, -46.289661));
			 
			map_array.push(new google.maps.LatLng(-23.988825, -46.288));
			 
			map_array.push(new google.maps.LatLng(-23.989259, -46.287503));
			 
			map_array.push(new google.maps.LatLng(-23.988171, -46.289279));
			 
			map_array.push(new google.maps.LatLng(-23.988922, -46.287931));
			 
			map_array.push(new google.maps.LatLng(-23.987437, -46.288164));
			 
			map_array.push(new google.maps.LatLng(-23.988446, -46.288804));
			 
			map_array.push(new google.maps.LatLng(-23.988347, -46.288372));
			 
			map_array.push(new google.maps.LatLng(-23.986949, -46.287822));
			 
			map_array.push(new google.maps.LatLng(-23.988067, -46.288723));
			 
			map_array.push(new google.maps.LatLng(-23.986949, -46.287822));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.987992, -46.288548));
			 
			map_array.push(new google.maps.LatLng(-23.988136, -46.289472));
			 
			map_array.push(new google.maps.LatLng(-23.988567, -46.288228));
			 
			map_array.push(new google.maps.LatLng(-23.987577, -46.288262));
			 
			map_array.push(new google.maps.LatLng(-23.987461, -46.288184));
			 
			map_array.push(new google.maps.LatLng(-23.988714, -46.288084));
			 
			map_array.push(new google.maps.LatLng(-23.987374, -46.288128));
			 
			map_array.push(new google.maps.LatLng(-23.986588, -46.287572));
			 
			map_array.push(new google.maps.LatLng(-23.987182, -46.287985));
			 
			map_array.push(new google.maps.LatLng(-23.987969, -46.289258));
			 
			map_array.push(new google.maps.LatLng(-23.988388, -46.288853));
			 
			map_array.push(new google.maps.LatLng(-23.988198, -46.289165));
			 
			map_array.push(new google.maps.LatLng(-23.988197, -46.288709));
			 
			map_array.push(new google.maps.LatLng(-23.988419, -46.289378));
			 
			map_array.push(new google.maps.LatLng(-23.988804, -46.288635));
			 
			map_array.push(new google.maps.LatLng(-23.98774, -46.288822));
			 
			map_array.push(new google.maps.LatLng(-23.988623, -46.288785));
			 
			map_array.push(new google.maps.LatLng(-23.988781, -46.288109));
			 
			map_array.push(new google.maps.LatLng(-23.989016, -46.287812));
			 
			map_array.push(new google.maps.LatLng(-23.988443, -46.288371));
			 
			map_array.push(new google.maps.LatLng(-23.988529, -46.288652));
			 
			map_array.push(new google.maps.LatLng(-23.98797, -46.290283));
			 
			map_array.push(new google.maps.LatLng(-23.987197, -46.287998));
			 
			map_array.push(new google.maps.LatLng(-23.987574, -46.288266));
			 
			map_array.push(new google.maps.LatLng(-23.98865, -46.28858));
			 
			map_array.push(new google.maps.LatLng(-23.988938, -46.288961));
			 
			map_array.push(new google.maps.LatLng(-23.988267, -46.288791));
			 
			map_array.push(new google.maps.LatLng(-23.988605, -46.287959));
			 
			map_array.push(new google.maps.LatLng(-23.988132, -46.289911));
			 
			map_array.push(new google.maps.LatLng(-23.988831, -46.288935));
			 
			map_array.push(new google.maps.LatLng(-23.988262, -46.288854));
			 
			map_array.push(new google.maps.LatLng(-23.988027, -46.288894));
			 
			map_array.push(new google.maps.LatLng(-23.98736, -46.288115));
			 
			map_array.push(new google.maps.LatLng(-23.988274, -46.288642));
			 
			map_array.push(new google.maps.LatLng(-23.988673, -46.289034));
			 
			map_array.push(new google.maps.LatLng(-23.988863, -46.288516));
			 
			map_array.push(new google.maps.LatLng(-23.987995, -46.290163));
			 
			map_array.push(new google.maps.LatLng(-23.988206, -46.289007));
			 
			map_array.push(new google.maps.LatLng(-23.987983, -46.288542));
			 
			map_array.push(new google.maps.LatLng(-23.988161, -46.289323));
			 
			map_array.push(new google.maps.LatLng(-23.988291, -46.288968));
			 
			map_array.push(new google.maps.LatLng(-23.98845, -46.288966));
			 
			map_array.push(new google.maps.LatLng(-23.988651, -46.288277));
			 
			map_array.push(new google.maps.LatLng(-23.988866, -46.289358));
			 
			map_array.push(new google.maps.LatLng(-23.988616, -46.288324));
			 
			map_array.push(new google.maps.LatLng(-23.98826, -46.288278));
			 
			map_array.push(new google.maps.LatLng(-23.988266, -46.2891));
			 
			map_array.push(new google.maps.LatLng(-23.987203, -46.288003));
			 
			map_array.push(new google.maps.LatLng(-23.987941, -46.289652));
			 
			map_array.push(new google.maps.LatLng(-23.988593, -46.288347));
			 
			map_array.push(new google.maps.LatLng(-23.988464, -46.288753));
			 
			map_array.push(new google.maps.LatLng(-23.988742, -46.288157));
			 
			map_array.push(new google.maps.LatLng(-23.988752, -46.288347));
			 
			map_array.push(new google.maps.LatLng(-23.988459, -46.288732));
			 
			map_array.push(new google.maps.LatLng(-23.98825, -46.288357));
			 
			map_array.push(new google.maps.LatLng(-23.987461, -46.288184));
			 
			map_array.push(new google.maps.LatLng(-23.989335, -46.287414));
			 
			map_array.push(new google.maps.LatLng(-23.987461, -46.288184));
			 
			map_array.push(new google.maps.LatLng(-23.988882, -46.287981));
			 
			map_array.push(new google.maps.LatLng(-23.988681, -46.288236));
			 
			map_array.push(new google.maps.LatLng(-23.987412, -46.28815));
			 
			map_array.push(new google.maps.LatLng(-23.989375, -46.287365));
			 
			map_array.push(new google.maps.LatLng(-23.988652, -46.288122));
			 
			map_array.push(new google.maps.LatLng(-23.987942, -46.288516));
			 
			map_array.push(new google.maps.LatLng(-23.988788, -46.28941));
			 
			map_array.push(new google.maps.LatLng(-23.986861, -46.287761));
			 
			map_array.push(new google.maps.LatLng(-23.988469, -46.288776));
			 
			map_array.push(new google.maps.LatLng(-23.988508, -46.288396));
			 
			map_array.push(new google.maps.LatLng(-23.988264, -46.288589));
			 
			map_array.push(new google.maps.LatLng(-23.987441, -46.289939));
			 
			map_array.push(new google.maps.LatLng(-23.98906, -46.287759));
			 
			map_array.push(new google.maps.LatLng(-23.987182, -46.287985));
			 
			map_array.push(new google.maps.LatLng(-23.98906, -46.287759));
			 
			map_array.push(new google.maps.LatLng(-23.98841, -46.288766));
			 
			map_array.push(new google.maps.LatLng(-23.98844, -46.288654));
			 
			map_array.push(new google.maps.LatLng(-23.988115, -46.28863));
			 
			map_array.push(new google.maps.LatLng(-23.988515, -46.288275));
			 
			map_array.push(new google.maps.LatLng(-23.988422, -46.28841));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.987668, -46.288326));
			 
			map_array.push(new google.maps.LatLng(-23.988772, -46.28812));
			 
			map_array.push(new google.maps.LatLng(-23.988863, -46.287999));
			 
			map_array.push(new google.maps.LatLng(-23.989551, -46.288662));
			 
			map_array.push(new google.maps.LatLng(-23.988568, -46.288752));
			 
			map_array.push(new google.maps.LatLng(-23.988732, -46.288113));
			 
			map_array.push(new google.maps.LatLng(-23.987267, -46.288047));
			 
			map_array.push(new google.maps.LatLng(-23.988738, -46.289521));
			 
			map_array.push(new google.maps.LatLng(-23.989011, -46.28782));
			 
			map_array.push(new google.maps.LatLng(-23.987391, -46.288136));
			 
			map_array.push(new google.maps.LatLng(-23.988534, -46.288049));
			 
			map_array.push(new google.maps.LatLng(-23.989162, -46.287634));
			 
			map_array.push(new google.maps.LatLng(-23.988117, -46.289444));
			 
			map_array.push(new google.maps.LatLng(-23.98866, -46.288683));
			 
			map_array.push(new google.maps.LatLng(-23.987027, -46.287882));
			 
			map_array.push(new google.maps.LatLng(-23.987375, -46.28812));
			 
			map_array.push(new google.maps.LatLng(-23.988374, -46.289371));
			 
			map_array.push(new google.maps.LatLng(-23.988404, -46.288497));
			 
			map_array.push(new google.maps.LatLng(-23.987787, -46.288405));
			 
			map_array.push(new google.maps.LatLng(-23.989012, -46.287821));
			 
			map_array.push(new google.maps.LatLng(-23.989067, -46.287748));
			 
			map_array.push(new google.maps.LatLng(-23.9882, -46.288955));
			 
			map_array.push(new google.maps.LatLng(-23.988729, -46.288177));
			 
			map_array.push(new google.maps.LatLng(-23.988819, -46.288065));
			 
			map_array.push(new google.maps.LatLng(-23.989458, -46.28726));
			 
			map_array.push(new google.maps.LatLng(-23.987326, -46.288088));
			 
			map_array.push(new google.maps.LatLng(-23.988194, -46.289179));
			 
			map_array.push(new google.maps.LatLng(-23.988254, -46.288441));
			 
			map_array.push(new google.maps.LatLng(-23.987913, -46.290579));
			 
			map_array.push(new google.maps.LatLng(-23.987461, -46.288184));
			 
			map_array.push(new google.maps.LatLng(-23.988533, -46.288887));
			 
			map_array.push(new google.maps.LatLng(-23.988342, -46.288734));
			 
			map_array.push(new google.maps.LatLng(-23.988011, -46.288777));
			 
			map_array.push(new google.maps.LatLng(-23.988278, -46.289137));
			 
			map_array.push(new google.maps.LatLng(-23.988186, -46.289015));
			 
			map_array.push(new google.maps.LatLng(-23.988524, -46.288354));
			 
			map_array.push(new google.maps.LatLng(-23.988719, -46.288188));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.988152, -46.288994));
			 
			map_array.push(new google.maps.LatLng(-23.988533, -46.288803));
			 
			map_array.push(new google.maps.LatLng(-23.988581, -46.288388));
			 
			map_array.push(new google.maps.LatLng(-23.986561, -46.287552));
			 
			map_array.push(new google.maps.LatLng(-23.987191, -46.287993));
			 
			map_array.push(new google.maps.LatLng(-23.987577, -46.288263));
			 
			map_array.push(new google.maps.LatLng(-23.987045, -46.28789));
			 
			map_array.push(new google.maps.LatLng(-23.988492, -46.288464));
			 
			map_array.push(new google.maps.LatLng(-23.988808, -46.288075));
			 
			map_array.push(new google.maps.LatLng(-23.988051, -46.288521));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.988474, -46.28804));
			 
			map_array.push(new google.maps.LatLng(-23.989352, -46.287393));
			 
			map_array.push(new google.maps.LatLng(-23.988697, -46.288573));
			 
			map_array.push(new google.maps.LatLng(-23.988747, -46.288153));
			 
			map_array.push(new google.maps.LatLng(-23.988169, -46.288947));
			 
			map_array.push(new google.maps.LatLng(-23.98717, -46.28798));
			 
			map_array.push(new google.maps.LatLng(-23.988292, -46.289219));
			 
			map_array.push(new google.maps.LatLng(-23.988482, -46.28876));
			 
			map_array.push(new google.maps.LatLng(-23.987494, -46.288212));
			 
			map_array.push(new google.maps.LatLng(-23.988561, -46.288466));
			 
			map_array.push(new google.maps.LatLng(-23.987696, -46.288348));
			 
			map_array.push(new google.maps.LatLng(-23.988445, -46.288515));
			 
			map_array.push(new google.maps.LatLng(-23.988462, -46.28877));
			 
			map_array.push(new google.maps.LatLng(-23.987282, -46.288061));
			 
			map_array.push(new google.maps.LatLng(-23.98821, -46.288432));
			 
			map_array.push(new google.maps.LatLng(-23.988065, -46.288595));
			 
			map_array.push(new google.maps.LatLng(-23.988109, -46.28959));
			 
			map_array.push(new google.maps.LatLng(-23.987263, -46.288043));
			 
			map_array.push(new google.maps.LatLng(-23.988744, -46.288132));
			 
			map_array.push(new google.maps.LatLng(-23.987374, -46.288128));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.989293, -46.288728));
			 
			map_array.push(new google.maps.LatLng(-23.988585, -46.28827));
			 
			map_array.push(new google.maps.LatLng(-23.988805, -46.288077));
			 
			map_array.push(new google.maps.LatLng(-23.988512, -46.288185));
			 
			map_array.push(new google.maps.LatLng(-23.987611, -46.288291));
			 
			map_array.push(new google.maps.LatLng(-23.987817, -46.288427));
			 
			map_array.push(new google.maps.LatLng(-23.988481, -46.288486));
			 
			map_array.push(new google.maps.LatLng(-23.988762, -46.288439));
			 
			map_array.push(new google.maps.LatLng(-23.98797, -46.290283));
			 
			map_array.push(new google.maps.LatLng(-23.988482, -46.289069));
			 
			map_array.push(new google.maps.LatLng(-23.988432, -46.288824));
			 
			map_array.push(new google.maps.LatLng(-23.988467, -46.288838));
			 
			map_array.push(new google.maps.LatLng(-23.988818, -46.287758));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.987957, -46.290358));
			 
			map_array.push(new google.maps.LatLng(-23.988081, -46.289744));
			 
			map_array.push(new google.maps.LatLng(-23.988315, -46.288033));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.986949, -46.287822));
			 
			map_array.push(new google.maps.LatLng(-23.988204, -46.289126));
			 
			map_array.push(new google.maps.LatLng(-23.989496, -46.287213));
			 
			map_array.push(new google.maps.LatLng(-23.988197, -46.288444));
			 
			map_array.push(new google.maps.LatLng(-23.988669, -46.288251));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.987338, -46.288099));
			 
			map_array.push(new google.maps.LatLng(-23.98822, -46.289002));
			 
			map_array.push(new google.maps.LatLng(-23.988421, -46.288174));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.288695));
			 
			map_array.push(new google.maps.LatLng(-23.987412, -46.28815));
			 
			map_array.push(new google.maps.LatLng(-23.988596, -46.288088));
			 
			map_array.push(new google.maps.LatLng(-23.988282, -46.289026));
			 
			map_array.push(new google.maps.LatLng(-23.988787, -46.288104));
			 
			map_array.push(new google.maps.LatLng(-23.988368, -46.288792));
			 
			map_array.push(new google.maps.LatLng(-23.988322, -46.288192));
			 
			map_array.push(new google.maps.LatLng(-23.988093, -46.288613));
			 
			map_array.push(new google.maps.LatLng(-23.987647, -46.288314));
			 
			map_array.push(new google.maps.LatLng(-23.988201, -46.289145));
			 
			map_array.push(new google.maps.LatLng(-23.987321, -46.288083));
			 
			map_array.push(new google.maps.LatLng(-23.988414, -46.288813));
			 
			map_array.push(new google.maps.LatLng(-23.987338, -46.288099));
			 
			map_array.push(new google.maps.LatLng(-23.986834, -46.287743));
			 
			map_array.push(new google.maps.LatLng(-23.988185, -46.289256));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.988196, -46.289142));
			 
			map_array.push(new google.maps.LatLng(-23.988452, -46.289981));
			 
			map_array.push(new google.maps.LatLng(-23.988149, -46.288435));
			 
			map_array.push(new google.maps.LatLng(-23.98852, -46.288964));
			 
			map_array.push(new google.maps.LatLng(-23.988299, -46.288661));
			 
			map_array.push(new google.maps.LatLng(-23.988349, -46.288547));
			 
			map_array.push(new google.maps.LatLng(-23.988045, -46.28991));
			 
			map_array.push(new google.maps.LatLng(-23.988387, -46.289049));
			 
			map_array.push(new google.maps.LatLng(-23.988239, -46.288936));
			 
			map_array.push(new google.maps.LatLng(-23.98826, -46.288382));
			 
			map_array.push(new google.maps.LatLng(-23.988588, -46.289142));
			 
			map_array.push(new google.maps.LatLng(-23.988911, -46.287952));
			 
			map_array.push(new google.maps.LatLng(-23.987926, -46.290501));
			 
			map_array.push(new google.maps.LatLng(-23.987611, -46.288291));
			 
			map_array.push(new google.maps.LatLng(-23.986975, -46.287843));
			 
			map_array.push(new google.maps.LatLng(-23.987423, -46.288153));
			 
			map_array.push(new google.maps.LatLng(-23.989352, -46.287393));
			 
			map_array.push(new google.maps.LatLng(-23.987853, -46.288853));
			 
			map_array.push(new google.maps.LatLng(-23.988559, -46.289354));
			 
			map_array.push(new google.maps.LatLng(-23.988693, -46.288221));
			 
			map_array.push(new google.maps.LatLng(-23.988234, -46.289025));
			 
			map_array.push(new google.maps.LatLng(-23.988806, -46.288077));
			 
			map_array.push(new google.maps.LatLng(-23.988341, -46.288893));
			 
			map_array.push(new google.maps.LatLng(-23.987031, -46.28788));
			 
			map_array.push(new google.maps.LatLng(-23.988396, -46.288451));
			 
			map_array.push(new google.maps.LatLng(-23.988357, -46.288731));
			 
			map_array.push(new google.maps.LatLng(-23.989166, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.987535, -46.28824));
			 
			map_array.push(new google.maps.LatLng(-23.98843, -46.288252));
			 
			map_array.push(new google.maps.LatLng(-23.988822, -46.289481));
			 
			map_array.push(new google.maps.LatLng(-23.987862, -46.290813));
			 
			map_array.push(new google.maps.LatLng(-23.988648, -46.288222));
			 
			map_array.push(new google.maps.LatLng(-23.98787, -46.288464));
			 
			map_array.push(new google.maps.LatLng(-23.98797, -46.289347));
			 
			map_array.push(new google.maps.LatLng(-23.988235, -46.28893));
			 
			map_array.push(new google.maps.LatLng(-23.988119, -46.289544));
			 
			map_array.push(new google.maps.LatLng(-23.987375, -46.28812));
			 
			map_array.push(new google.maps.LatLng(-23.987902, -46.288485));
			 
			map_array.push(new google.maps.LatLng(-23.986667, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.988476, -46.288303));
			 
			map_array.push(new google.maps.LatLng(-23.988174, -46.288494));
			 
			map_array.push(new google.maps.LatLng(-23.987705, -46.28835));
			 
			map_array.push(new google.maps.LatLng(-23.988651, -46.288277));
			 
			map_array.push(new google.maps.LatLng(-23.98839, -46.288508));
			 
			map_array.push(new google.maps.LatLng(-23.987631, -46.288302));
			 
			map_array.push(new google.maps.LatLng(-23.986691, -46.287644));
			 
			map_array.push(new google.maps.LatLng(-23.98906, -46.287759));
			 
			map_array.push(new google.maps.LatLng(-23.989352, -46.287393));
			 
			map_array.push(new google.maps.LatLng(-23.988105, -46.289407));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.988932, -46.28814));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.986892, -46.287785));
			 
			map_array.push(new google.maps.LatLng(-23.988967, -46.288812));
			 
			map_array.push(new google.maps.LatLng(-23.988521, -46.288724));
			 
			map_array.push(new google.maps.LatLng(-23.989283, -46.288233));
			 
			map_array.push(new google.maps.LatLng(-23.988242, -46.288563));
			 
			map_array.push(new google.maps.LatLng(-23.988304, -46.288474));
			 
			map_array.push(new google.maps.LatLng(-23.988412, -46.288074));
			 
			map_array.push(new google.maps.LatLng(-23.988887, -46.287978));
			 
			map_array.push(new google.maps.LatLng(-23.988406, -46.288502));
			 
			map_array.push(new google.maps.LatLng(-23.988321, -46.288805));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.988391, -46.288777));
			 
			map_array.push(new google.maps.LatLng(-23.988636, -46.288531));
			 
			map_array.push(new google.maps.LatLng(-23.988804, -46.289274));
			 
			map_array.push(new google.maps.LatLng(-23.988926, -46.288944));
			 
			map_array.push(new google.maps.LatLng(-23.98873, -46.287862));
			 
			map_array.push(new google.maps.LatLng(-23.988677, -46.288237));
			 
			map_array.push(new google.maps.LatLng(-23.987338, -46.288099));
			 
			map_array.push(new google.maps.LatLng(-23.988802, -46.288806));
			 
			map_array.push(new google.maps.LatLng(-23.987578, -46.288264));
			 
			map_array.push(new google.maps.LatLng(-23.989352, -46.287393));
			 
			map_array.push(new google.maps.LatLng(-23.986949, -46.287822));
			 
			map_array.push(new google.maps.LatLng(-23.988719, -46.288188));
			 
			map_array.push(new google.maps.LatLng(-23.987412, -46.28815));
			 
			map_array.push(new google.maps.LatLng(-23.988283, -46.289023));
			 
			map_array.push(new google.maps.LatLng(-23.988428, -46.28802));
			 
			map_array.push(new google.maps.LatLng(-23.988677, -46.288241));
			 
			map_array.push(new google.maps.LatLng(-23.988198, -46.289165));
			 
			map_array.push(new google.maps.LatLng(-23.988621, -46.289095));
			 
			map_array.push(new google.maps.LatLng(-23.989011, -46.28782));
			 
			map_array.push(new google.maps.LatLng(-23.98912, -46.287681));
			 
			map_array.push(new google.maps.LatLng(-23.988418, -46.289078));
			 
			map_array.push(new google.maps.LatLng(-23.98867, -46.28851));
			 
			map_array.push(new google.maps.LatLng(-23.987391, -46.288136));
			 
			map_array.push(new google.maps.LatLng(-23.988965, -46.287884));
			 
			map_array.push(new google.maps.LatLng(-23.987412, -46.28815));
			 
			map_array.push(new google.maps.LatLng(-23.987991, -46.289117));
			 
			map_array.push(new google.maps.LatLng(-23.987712, -46.288358));
			 
			map_array.push(new google.maps.LatLng(-23.988191, -46.289175));
			 
			map_array.push(new google.maps.LatLng(-23.988013, -46.290073));
			 
			map_array.push(new google.maps.LatLng(-23.988498, -46.288904));
			 
			map_array.push(new google.maps.LatLng(-23.98895, -46.288521));
			 
			map_array.push(new google.maps.LatLng(-23.988353, -46.28889));
			 
			map_array.push(new google.maps.LatLng(-23.987913, -46.290579));
			 
			map_array.push(new google.maps.LatLng(-23.988807, -46.28808));
			 
			map_array.push(new google.maps.LatLng(-23.986892, -46.287785));
			 
			map_array.push(new google.maps.LatLng(-23.988976, -46.28867));
			 
			map_array.push(new google.maps.LatLng(-23.988245, -46.288682));
			 
			map_array.push(new google.maps.LatLng(-23.987159, -46.287977));
			 
			map_array.push(new google.maps.LatLng(-23.987926, -46.290501));
			 
			map_array.push(new google.maps.LatLng(-23.988158, -46.289357));
			 
			map_array.push(new google.maps.LatLng(-23.987203, -46.288003));
			 
			map_array.push(new google.maps.LatLng(-23.987921, -46.288501));
			 
			map_array.push(new google.maps.LatLng(-23.988732, -46.288185));
			 
			map_array.push(new google.maps.LatLng(-23.989255, -46.287515));
			 
			map_array.push(new google.maps.LatLng(-23.988215, -46.288122));
			 
			map_array.push(new google.maps.LatLng(-23.988265, -46.288778));
			 
			map_array.push(new google.maps.LatLng(-23.988684, -46.289374));
			 
			map_array.push(new google.maps.LatLng(-23.988455, -46.288444));
			 
			map_array.push(new google.maps.LatLng(-23.987988, -46.288542));
			 
			map_array.push(new google.maps.LatLng(-23.988099, -46.289636));
			 
			map_array.push(new google.maps.LatLng(-23.988319, -46.288201));
			 
			map_array.push(new google.maps.LatLng(-23.988665, -46.288446));
			 
			map_array.push(new google.maps.LatLng(-23.987821, -46.288429));
			 
			map_array.push(new google.maps.LatLng(-23.989111, -46.287695));
			 
			map_array.push(new google.maps.LatLng(-23.987712, -46.288358));
			 
			map_array.push(new google.maps.LatLng(-23.9874, -46.288142));
			 
			map_array.push(new google.maps.LatLng(-23.988458, -46.289241));
			 
			map_array.push(new google.maps.LatLng(-23.988769, -46.288069));
			 
			map_array.push(new google.maps.LatLng(-23.98848, -46.288025));
			 
			map_array.push(new google.maps.LatLng(-23.989108, -46.287695));
			 
			map_array.push(new google.maps.LatLng(-23.988702, -46.28821));
			 
			map_array.push(new google.maps.LatLng(-23.987766, -46.288392));
			 
			map_array.push(new google.maps.LatLng(-23.988126, -46.288881));
			 
			map_array.push(new google.maps.LatLng(-23.988543, -46.288417));
			 
			map_array.push(new google.maps.LatLng(-23.988438, -46.288136));
			 
			map_array.push(new google.maps.LatLng(-23.988198, -46.289165));
			 
			map_array.push(new google.maps.LatLng(-23.9883, -46.2887));
			 
			map_array.push(new google.maps.LatLng(-23.988344, -46.288477));
			 
			map_array.push(new google.maps.LatLng(-23.988514, -46.288396));
			 
			map_array.push(new google.maps.LatLng(-23.987203, -46.288003));
			 
			map_array.push(new google.maps.LatLng(-23.986949, -46.287822));
			 
			map_array.push(new google.maps.LatLng(-23.988529, -46.288421));
			 
			map_array.push(new google.maps.LatLng(-23.988334, -46.288117));
			 
			map_array.push(new google.maps.LatLng(-23.988672, -46.288251));
			 
			map_array.push(new google.maps.LatLng(-23.988522, -46.28922));
			 
			map_array.push(new google.maps.LatLng(-23.98842, -46.28819));
			 
			map_array.push(new google.maps.LatLng(-23.988018, -46.289351));
			 
			map_array.push(new google.maps.LatLng(-23.988804, -46.288402));
			 
			map_array.push(new google.maps.LatLng(-23.986721, -46.287661));
			 
			map_array.push(new google.maps.LatLng(-23.986767, -46.287696));
			 
			map_array.push(new google.maps.LatLng(-23.989422, -46.287306));
			 
			map_array.push(new google.maps.LatLng(-23.987947, -46.288739));
			 
			map_array.push(new google.maps.LatLng(-23.989011, -46.28782));
			 
			map_array.push(new google.maps.LatLng(-23.988257, -46.288963));
			 
			map_array.push(new google.maps.LatLng(-23.986708, -46.287658));
			 
			map_array.push(new google.maps.LatLng(-23.988805, -46.288077));
			 
			map_array.push(new google.maps.LatLng(-23.988374, -46.288718));
			 
			map_array.push(new google.maps.LatLng(-23.988232, -46.289741));
			 
			map_array.push(new google.maps.LatLng(-23.98853, -46.288431));
			 
			map_array.push(new google.maps.LatLng(-23.988034, -46.289317));
			 
			map_array.push(new google.maps.LatLng(-23.988211, -46.288876));
			 
			map_array.push(new google.maps.LatLng(-23.988537, -46.288023));
			 
			map_array.push(new google.maps.LatLng(-23.988238, -46.287968));
			 
			map_array.push(new google.maps.LatLng(-23.988186, -46.288891));
			 
			map_array.push(new google.maps.LatLng(-23.98856, -46.288274));
			 
			map_array.push(new google.maps.LatLng(-23.98843, -46.28913));
			 
			map_array.push(new google.maps.LatLng(-23.988956, -46.288435));
			 
			map_array.push(new google.maps.LatLng(-23.988596, -46.289255));
			 
			map_array.push(new google.maps.LatLng(-23.988774, -46.288117));
			 
			map_array.push(new google.maps.LatLng(-23.988776, -46.288118));
			 
			map_array.push(new google.maps.LatLng(-23.988508, -46.288004));
			 
			map_array.push(new google.maps.LatLng(-23.987583, -46.288265));
			 
			map_array.push(new google.maps.LatLng(-23.988805, -46.288077));
			 
			map_array.push(new google.maps.LatLng(-23.988757, -46.288142));
			 
			map_array.push(new google.maps.LatLng(-23.98895, -46.287904));
			 
			map_array.push(new google.maps.LatLng(-23.988306, -46.288604));
			 
			map_array.push(new google.maps.LatLng(-23.988012, -46.289255));
			 
			map_array.push(new google.maps.LatLng(-23.989386, -46.28735));
			 
			map_array.push(new google.maps.LatLng(-23.988307, -46.28839));
			 
			map_array.push(new google.maps.LatLng(-23.988329, -46.288814));
			 
			map_array.push(new google.maps.LatLng(-23.988481, -46.288756));
			 
			map_array.push(new google.maps.LatLng(-23.988207, -46.289108));
			 
			map_array.push(new google.maps.LatLng(-23.987994, -46.28946));
			 
			map_array.push(new google.maps.LatLng(-23.988325, -46.288674));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288651));
			 
			map_array.push(new google.maps.LatLng(-23.986561, -46.287552));
			 
			map_array.push(new google.maps.LatLng(-23.9885, -46.288084));
			 
			map_array.push(new google.maps.LatLng(-23.988476, -46.289422));
			 
			map_array.push(new google.maps.LatLng(-23.988922, -46.287931));
			 
			map_array.push(new google.maps.LatLng(-23.988385, -46.288753));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.988234, -46.289072));
			 
			map_array.push(new google.maps.LatLng(-23.986561, -46.287552));
			 
			map_array.push(new google.maps.LatLng(-23.988901, -46.289132));
			 
			map_array.push(new google.maps.LatLng(-23.988377, -46.28874));
			 
			map_array.push(new google.maps.LatLng(-23.988164, -46.289325));
			 
			map_array.push(new google.maps.LatLng(-23.987611, -46.288291));
			 
			map_array.push(new google.maps.LatLng(-23.987644, -46.288868));
			 
			map_array.push(new google.maps.LatLng(-23.988371, -46.288773));
			 
			map_array.push(new google.maps.LatLng(-23.986588, -46.287572));
			 
			map_array.push(new google.maps.LatLng(-23.988521, -46.289105));
			 
			map_array.push(new google.maps.LatLng(-23.987712, -46.288354));
			 
			map_array.push(new google.maps.LatLng(-23.988902, -46.287955));
			 
			map_array.push(new google.maps.LatLng(-23.988868, -46.288001));
			 
			map_array.push(new google.maps.LatLng(-23.988497, -46.288797));
			 
			map_array.push(new google.maps.LatLng(-23.988754, -46.288178));
			 
			map_array.push(new google.maps.LatLng(-23.988484, -46.28851));
			 
			map_array.push(new google.maps.LatLng(-23.987995, -46.290163));
			 
			map_array.push(new google.maps.LatLng(-23.988472, -46.288609));
			 
			map_array.push(new google.maps.LatLng(-23.989076, -46.287738));
			 
			map_array.push(new google.maps.LatLng(-23.987913, -46.290579));
			 
			map_array.push(new google.maps.LatLng(-23.988722, -46.288028));
			 
			map_array.push(new google.maps.LatLng(-23.988956, -46.289494));
			 
			map_array.push(new google.maps.LatLng(-23.987083, -46.287917));
			 
			map_array.push(new google.maps.LatLng(-23.988371, -46.288703));
			 
			map_array.push(new google.maps.LatLng(-23.988104, -46.288523));
			 
			map_array.push(new google.maps.LatLng(-23.988414, -46.28856));
			 
			map_array.push(new google.maps.LatLng(-23.988342, -46.288775));
			 
			map_array.push(new google.maps.LatLng(-23.987412, -46.28815));
			 
			map_array.push(new google.maps.LatLng(-23.988383, -46.288826));
			 
			map_array.push(new google.maps.LatLng(-23.577898, -46.724029));
			 
			map_array.push(new google.maps.LatLng(-23.98854, -46.288947));
			 
			map_array.push(new google.maps.LatLng(-23.988486, -46.28833));
			 
			map_array.push(new google.maps.LatLng(-23.988317, -46.288949));
			 
			map_array.push(new google.maps.LatLng(-23.988216, -46.289049));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.988387, -46.288891));
			 
			map_array.push(new google.maps.LatLng(-23.988512, -46.28858));
			 
			map_array.push(new google.maps.LatLng(-23.988461, -46.289009));
			 
			map_array.push(new google.maps.LatLng(-23.987838, -46.290965));
			 
			map_array.push(new google.maps.LatLng(-23.988842, -46.288031));
			 
			map_array.push(new google.maps.LatLng(-23.988214, -46.289066));
			 
			map_array.push(new google.maps.LatLng(-23.988884, -46.288796));
			 
			map_array.push(new google.maps.LatLng(-23.988265, -46.28886));
			 
			map_array.push(new google.maps.LatLng(-23.988006, -46.288555));
			 
			map_array.push(new google.maps.LatLng(-23.988192, -46.289209));
			 
			map_array.push(new google.maps.LatLng(-23.988361, -46.288379));
			 
			map_array.push(new google.maps.LatLng(-23.989067, -46.287748));
			 
			map_array.push(new google.maps.LatLng(-23.988614, -46.288937));
			 
			map_array.push(new google.maps.LatLng(-23.987442, -46.28817));
			 
			map_array.push(new google.maps.LatLng(-23.986691, -46.287644));
			 
			map_array.push(new google.maps.LatLng(-23.987875, -46.288466));
			 
			map_array.push(new google.maps.LatLng(-23.988598, -46.288304));
			 
			map_array.push(new google.maps.LatLng(-23.988584, -46.288325));
			 
			map_array.push(new google.maps.LatLng(-23.987628, -46.288296));
			 
			map_array.push(new google.maps.LatLng(-23.989422, -46.287306));
			 
			map_array.push(new google.maps.LatLng(-23.98838, -46.288546));
			 
			map_array.push(new google.maps.LatLng(-23.988136, -46.289472));
			 
			map_array.push(new google.maps.LatLng(-23.988508, -46.289702));
			 
			map_array.push(new google.maps.LatLng(-23.988999, -46.288658));
			 
			map_array.push(new google.maps.LatLng(-23.988776, -46.288118));
			 
			map_array.push(new google.maps.LatLng(-23.988852, -46.288024));
			 
			map_array.push(new google.maps.LatLng(-23.987995, -46.290163));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.986667, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.987311, -46.288078));
			 
			map_array.push(new google.maps.LatLng(-23.988098, -46.289647));
			 
			map_array.push(new google.maps.LatLng(-23.987128, -46.287949));
			 
			map_array.push(new google.maps.LatLng(-23.987974, -46.290267));
			 
			map_array.push(new google.maps.LatLng(-23.987412, -46.28815));
			 
			map_array.push(new google.maps.LatLng(-23.987973, -46.28889));
			 
			map_array.push(new google.maps.LatLng(-23.987815, -46.289207));
			 
			map_array.push(new google.maps.LatLng(-23.988486, -46.28848));
			 
			map_array.push(new google.maps.LatLng(-23.988332, -46.288858));
			 
			map_array.push(new google.maps.LatLng(-23.988432, -46.289091));
			 
			map_array.push(new google.maps.LatLng(-23.988252, -46.28922));
			 
			map_array.push(new google.maps.LatLng(-23.987915, -46.290549));
			 
			map_array.push(new google.maps.LatLng(-23.988321, -46.287716));
			 
			map_array.push(new google.maps.LatLng(-23.988721, -46.28793));
			 
			map_array.push(new google.maps.LatLng(-23.987988, -46.288841));
			 
			map_array.push(new google.maps.LatLng(-23.989053, -46.288171));
			 
			map_array.push(new google.maps.LatLng(-23.988203, -46.289132));
			 
			map_array.push(new google.maps.LatLng(-23.987712, -46.288358));
			 
			map_array.push(new google.maps.LatLng(-23.989125, -46.288488));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.986861, -46.287761));
			 
			map_array.push(new google.maps.LatLng(-23.989304, -46.289015));
			 
			map_array.push(new google.maps.LatLng(-23.988215, -46.289058));
			 
			map_array.push(new google.maps.LatLng(-23.988625, -46.289284));
			 
			map_array.push(new google.maps.LatLng(-23.987853, -46.288451));
			 
			map_array.push(new google.maps.LatLng(-23.989114, -46.287689));
			 
			map_array.push(new google.maps.LatLng(-23.988582, -46.288953));
			 
			map_array.push(new google.maps.LatLng(-23.988631, -46.28847));
			 
			map_array.push(new google.maps.LatLng(-23.988752, -46.288856));
			 
			map_array.push(new google.maps.LatLng(-23.98712, -46.287943));
			 
			map_array.push(new google.maps.LatLng(-23.988018, -46.288565));
			 
			map_array.push(new google.maps.LatLng(-23.988948, -46.288836));
			 
			map_array.push(new google.maps.LatLng(-23.988208, -46.288448));
			 
			map_array.push(new google.maps.LatLng(-23.988135, -46.288341));
			 
			map_array.push(new google.maps.LatLng(-23.988706, -46.288201));
			 
			map_array.push(new google.maps.LatLng(-23.988371, -46.288006));
			 
			map_array.push(new google.maps.LatLng(-23.987913, -46.290579));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.288695));
			 
			map_array.push(new google.maps.LatLng(-23.988127, -46.288273));
			 
			map_array.push(new google.maps.LatLng(-23.98797, -46.290283));
			 
			map_array.push(new google.maps.LatLng(-23.98906, -46.287759));
			 
			map_array.push(new google.maps.LatLng(-23.987461, -46.288184));
			 
			map_array.push(new google.maps.LatLng(-23.987608, -46.288285));
			 
			map_array.push(new google.maps.LatLng(-23.98846, -46.288735));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.288695));
			 
			map_array.push(new google.maps.LatLng(-23.987882, -46.288477));
			 
			map_array.push(new google.maps.LatLng(-23.987647, -46.288314));
			 
			map_array.push(new google.maps.LatLng(-23.986788, -46.287711));
			 
			map_array.push(new google.maps.LatLng(-23.988852, -46.288024));
			 
			map_array.push(new google.maps.LatLng(-23.989081, -46.289249));
			 
			map_array.push(new google.maps.LatLng(-23.988831, -46.288902));
			 
			map_array.push(new google.maps.LatLng(-23.989352, -46.287393));
			 
			map_array.push(new google.maps.LatLng(-23.988234, -46.288929));
			 
			map_array.push(new google.maps.LatLng(-23.98731, -46.28808));
			 
			map_array.push(new google.maps.LatLng(-23.988325, -46.288861));
			 
			map_array.push(new google.maps.LatLng(-23.988757, -46.288142));
			 
			map_array.push(new google.maps.LatLng(-23.988849, -46.288258));
			 
			map_array.push(new google.maps.LatLng(-23.98854, -46.288933));
			 
			map_array.push(new google.maps.LatLng(-23.988217, -46.289046));
			 
			map_array.push(new google.maps.LatLng(-23.98845, -46.288521));
			 
			map_array.push(new google.maps.LatLng(-23.987629, -46.288303));
			 
			map_array.push(new google.maps.LatLng(-23.989111, -46.287695));
			 
			map_array.push(new google.maps.LatLng(-23.987906, -46.288493));
			 
			map_array.push(new google.maps.LatLng(-23.988133, -46.288444));
			 
			map_array.push(new google.maps.LatLng(-23.988483, -46.28821));
			 
			map_array.push(new google.maps.LatLng(-23.988424, -46.289058));
			 
			map_array.push(new google.maps.LatLng(-23.98895, -46.288521));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.989575, -46.287114));
			 
			map_array.push(new google.maps.LatLng(-23.988267, -46.289051));
			 
			map_array.push(new google.maps.LatLng(-23.988636, -46.288808));
			 
			map_array.push(new google.maps.LatLng(-23.987592, -46.288274));
			 
			map_array.push(new google.maps.LatLng(-23.987305, -46.288077));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.289013));
			 
			map_array.push(new google.maps.LatLng(-23.98808, -46.288422));
			 
			map_array.push(new google.maps.LatLng(-23.98966, -46.28701));
			 
			map_array.push(new google.maps.LatLng(-23.98863, -46.288302));
			 
			map_array.push(new google.maps.LatLng(-23.98831, -46.288877));
			 
			map_array.push(new google.maps.LatLng(-23.989059, -46.287762));
			 
			map_array.push(new google.maps.LatLng(-23.989479, -46.287225));
			 
			map_array.push(new google.maps.LatLng(-23.987128, -46.287949));
			 
			map_array.push(new google.maps.LatLng(-23.988567, -46.288194));
			 
			map_array.push(new google.maps.LatLng(-23.988491, -46.289228));
			 
			map_array.push(new google.maps.LatLng(-23.987263, -46.288043));
			 
			map_array.push(new google.maps.LatLng(-23.989166, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.987383, -46.288126));
			 
			map_array.push(new google.maps.LatLng(-23.988742, -46.288157));
			 
			map_array.push(new google.maps.LatLng(-23.988702, -46.28821));
			 
			map_array.push(new google.maps.LatLng(-23.988511, -46.288771));
			 
			map_array.push(new google.maps.LatLng(-23.9892, -46.287583));
			 
			map_array.push(new google.maps.LatLng(-23.987574, -46.288266));
			 
			map_array.push(new google.maps.LatLng(-23.98786, -46.288922));
			 
			map_array.push(new google.maps.LatLng(-23.988852, -46.288024));
			 
			map_array.push(new google.maps.LatLng(-23.988634, -46.288355));
			 
			map_array.push(new google.maps.LatLng(-23.988617, -46.288317));
			 
			map_array.push(new google.maps.LatLng(-23.988835, -46.288098));
			 
			map_array.push(new google.maps.LatLng(-23.987915, -46.288495));
			 
			map_array.push(new google.maps.LatLng(-23.988444, -46.288723));
			 
			map_array.push(new google.maps.LatLng(-23.988428, -46.288325));
			 
			map_array.push(new google.maps.LatLng(-23.988405, -46.288867));
			 
			map_array.push(new google.maps.LatLng(-23.9883, -46.288964));
			 
			map_array.push(new google.maps.LatLng(-23.988095, -46.289682));
			 
			map_array.push(new google.maps.LatLng(-23.98775, -46.28838));
			 
			map_array.push(new google.maps.LatLng(-23.986892, -46.287785));
			 
			map_array.push(new google.maps.LatLng(-23.987136, -46.287957));
			 
			map_array.push(new google.maps.LatLng(-23.987333, -46.288096));
			 
			map_array.push(new google.maps.LatLng(-23.988401, -46.287863));
			 
			map_array.push(new google.maps.LatLng(-23.988545, -46.288243));
			 
			map_array.push(new google.maps.LatLng(-23.988425, -46.288671));
			 
			map_array.push(new google.maps.LatLng(-23.987716, -46.289139));
			 
			map_array.push(new google.maps.LatLng(-23.988003, -46.290113));
			 
			map_array.push(new google.maps.LatLng(-23.988561, -46.288903));
			 
			map_array.push(new google.maps.LatLng(-23.986708, -46.287658));
			 
			map_array.push(new google.maps.LatLng(-23.988404, -46.288599));
			 
			map_array.push(new google.maps.LatLng(-23.988523, -46.289027));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.988468, -46.288792));
			 
			map_array.push(new google.maps.LatLng(-23.986989, -46.28909));
			 
			map_array.push(new google.maps.LatLng(-23.988407, -46.2883));
			 
			map_array.push(new google.maps.LatLng(-23.987775, -46.289311));
			 
			map_array.push(new google.maps.LatLng(-23.988494, -46.288655));
			 
			map_array.push(new google.maps.LatLng(-23.98717, -46.28798));
			 
			map_array.push(new google.maps.LatLng(-23.988379, -46.288201));
			 
			map_array.push(new google.maps.LatLng(-23.988201, -46.289145));
			 
			map_array.push(new google.maps.LatLng(-23.988109, -46.28959));
			 
			map_array.push(new google.maps.LatLng(-23.989166, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.988279, -46.288756));
			 
			map_array.push(new google.maps.LatLng(-23.988651, -46.28875));
			 
			map_array.push(new google.maps.LatLng(-23.988208, -46.288557));
			 
			map_array.push(new google.maps.LatLng(-23.988215, -46.288641));
			 
			map_array.push(new google.maps.LatLng(-23.988201, -46.289149));
			 
			map_array.push(new google.maps.LatLng(-23.986879, -46.287775));
			 
			map_array.push(new google.maps.LatLng(-23.98885, -46.287905));
			 
			map_array.push(new google.maps.LatLng(-23.98712, -46.287943));
			 
			map_array.push(new google.maps.LatLng(-23.989066, -46.288986));
			 
			map_array.push(new google.maps.LatLng(-23.988452, -46.28877));
			 
			map_array.push(new google.maps.LatLng(-23.988543, -46.288407));
			 
			map_array.push(new google.maps.LatLng(-23.988467, -46.289123));
			 
			map_array.push(new google.maps.LatLng(-23.988776, -46.288118));
			 
			map_array.push(new google.maps.LatLng(-23.987798, -46.289636));
			 
			map_array.push(new google.maps.LatLng(-23.988779, -46.289135));
			 
			map_array.push(new google.maps.LatLng(-23.988133, -46.288975));
			 
			map_array.push(new google.maps.LatLng(-23.986964, -46.287834));
			 
			map_array.push(new google.maps.LatLng(-23.988611, -46.288325));
			 
			map_array.push(new google.maps.LatLng(-23.988201, -46.289072));
			 
			map_array.push(new google.maps.LatLng(-23.989195, -46.28759));
			 
			map_array.push(new google.maps.LatLng(-23.988892, -46.288387));
			 
			map_array.push(new google.maps.LatLng(-23.988531, -46.288909));
			 
			map_array.push(new google.maps.LatLng(-23.98814, -46.289325));
			 
			map_array.push(new google.maps.LatLng(-23.987417, -46.288153));
			 
			map_array.push(new google.maps.LatLng(-23.988901, -46.289132));
			 
			map_array.push(new google.maps.LatLng(-23.98863, -46.288302));
			 
			map_array.push(new google.maps.LatLng(-23.988658, -46.288078));
			 
			map_array.push(new google.maps.LatLng(-23.987931, -46.288509));
			 
			map_array.push(new google.maps.LatLng(-23.98736, -46.288115));
			 
			map_array.push(new google.maps.LatLng(-23.988882, -46.287981));
			 
			map_array.push(new google.maps.LatLng(-23.988198, -46.289165));
			 
			map_array.push(new google.maps.LatLng(-23.988458, -46.288328));
			 
			map_array.push(new google.maps.LatLng(-23.987926, -46.290501));
			 
			map_array.push(new google.maps.LatLng(-23.987432, -46.28816));
			 
			map_array.push(new google.maps.LatLng(-23.988776, -46.288118));
			 
			map_array.push(new google.maps.LatLng(-23.988774, -46.288117));
			 
			map_array.push(new google.maps.LatLng(-23.988722, -46.288085));
			 
			map_array.push(new google.maps.LatLng(-23.987561, -46.288253));
			 
			map_array.push(new google.maps.LatLng(-23.988816, -46.288114));
			 
			map_array.push(new google.maps.LatLng(-23.989166, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.988028, -46.290017));
			 
			map_array.push(new google.maps.LatLng(-23.988423, -46.288645));
			 
			map_array.push(new google.maps.LatLng(-23.986561, -46.287552));
			 
			map_array.push(new google.maps.LatLng(-23.988575, -46.288137));
			 
			map_array.push(new google.maps.LatLng(-23.988512, -46.288449));
			 
			map_array.push(new google.maps.LatLng(-23.988441, -46.288352));
			 
			map_array.push(new google.maps.LatLng(-23.988373, -46.288739));
			 
			map_array.push(new google.maps.LatLng(-23.988391, -46.288941));
			 
			map_array.push(new google.maps.LatLng(-23.98884, -46.28804));
			 
			map_array.push(new google.maps.LatLng(-23.98813, -46.289091));
			 
			map_array.push(new google.maps.LatLng(-23.988344, -46.287883));
			 
			map_array.push(new google.maps.LatLng(-23.989255, -46.287515));
			 
			map_array.push(new google.maps.LatLng(-23.987709, -46.288352));
			 
			map_array.push(new google.maps.LatLng(-23.988431, -46.288723));
			 
			map_array.push(new google.maps.LatLng(-23.98806, -46.289836));
			 
			map_array.push(new google.maps.LatLng(-23.988141, -46.288839));
			 
			map_array.push(new google.maps.LatLng(-23.986949, -46.287822));
			 
			map_array.push(new google.maps.LatLng(-23.988476, -46.288491));
			 
			map_array.push(new google.maps.LatLng(-23.986861, -46.287761));
			 
			map_array.push(new google.maps.LatLng(-23.988289, -46.289283));
			 
			map_array.push(new google.maps.LatLng(-23.988195, -46.289187));
			 
			map_array.push(new google.maps.LatLng(-23.988461, -46.288769));
			 
			map_array.push(new google.maps.LatLng(-23.9885, -46.28891));
			 
			map_array.push(new google.maps.LatLng(-23.988646, -46.288816));
			 
			map_array.push(new google.maps.LatLng(-23.9883, -46.288998));
			 
			map_array.push(new google.maps.LatLng(-23.987203, -46.288003));
			 
			map_array.push(new google.maps.LatLng(-23.988086, -46.2897));
			 
			map_array.push(new google.maps.LatLng(-23.988498, -46.288782));
			 
			map_array.push(new google.maps.LatLng(-23.987936, -46.289426));
			 
			map_array.push(new google.maps.LatLng(-23.988224, -46.289002));
			 
			map_array.push(new google.maps.LatLng(-23.988455, -46.288715));
			 
			map_array.push(new google.maps.LatLng(-23.987913, -46.290579));
			 
			map_array.push(new google.maps.LatLng(-23.98786, -46.289068));
			 
			map_array.push(new google.maps.LatLng(-23.988302, -46.289084));
			 
			map_array.push(new google.maps.LatLng(-23.987383, -46.288126));
			 
			map_array.push(new google.maps.LatLng(-23.988468, -46.288393));
			 
			map_array.push(new google.maps.LatLng(-23.987203, -46.288003));
			 
			map_array.push(new google.maps.LatLng(-23.988575, -46.288368));
			 
			map_array.push(new google.maps.LatLng(-23.98929, -46.289123));
			 
			map_array.push(new google.maps.LatLng(-23.98768, -46.288337));
			 
			map_array.push(new google.maps.LatLng(-23.987418, -46.288154));
			 
			map_array.push(new google.maps.LatLng(-23.988353, -46.288769));
			 
			map_array.push(new google.maps.LatLng(-23.988575, -46.288137));
			 
			map_array.push(new google.maps.LatLng(-23.988192, -46.289209));
			 
			map_array.push(new google.maps.LatLng(-23.988583, -46.28828));
			 
			map_array.push(new google.maps.LatLng(-23.988001, -46.289138));
			 
			map_array.push(new google.maps.LatLng(-23.988204, -46.289126));
			 
			map_array.push(new google.maps.LatLng(-23.987697, -46.288344));
			 
			map_array.push(new google.maps.LatLng(-23.988563, -46.288339));
			 
			map_array.push(new google.maps.LatLng(-23.988634, -46.289287));
			 
			map_array.push(new google.maps.LatLng(-23.988398, -46.289122));
			 
			map_array.push(new google.maps.LatLng(-23.988924, -46.287928));
			 
			map_array.push(new google.maps.LatLng(-23.988731, -46.288179));
			 
			map_array.push(new google.maps.LatLng(-23.988056, -46.289873));
			 
			map_array.push(new google.maps.LatLng(-23.988587, -46.288209));
			 
			map_array.push(new google.maps.LatLng(-23.988432, -46.288806));
			 
			map_array.push(new google.maps.LatLng(-23.987263, -46.288043));
			 
			map_array.push(new google.maps.LatLng(-23.988602, -46.289088));
			 
			map_array.push(new google.maps.LatLng(-23.988317, -46.289013));
			 
			map_array.push(new google.maps.LatLng(-23.98838, -46.28835));
			 
			map_array.push(new google.maps.LatLng(-23.987551, -46.288245));
			 
			map_array.push(new google.maps.LatLng(-23.988378, -46.288872));
			 
			map_array.push(new google.maps.LatLng(-23.986879, -46.287775));
			 
			map_array.push(new google.maps.LatLng(-23.988006, -46.288555));
			 
			map_array.push(new google.maps.LatLng(-23.986803, -46.287723));
			 
			map_array.push(new google.maps.LatLng(-23.988452, -46.288881));
			 
			map_array.push(new google.maps.LatLng(-23.988573, -46.28823));
			 
			map_array.push(new google.maps.LatLng(-23.988969, -46.287872));
			 
			map_array.push(new google.maps.LatLng(-23.988498, -46.288457));
			 
			map_array.push(new google.maps.LatLng(-23.988171, -46.289284));
			 
			map_array.push(new google.maps.LatLng(-23.987159, -46.287977));
			 
			map_array.push(new google.maps.LatLng(-23.987767, -46.289685));
			 
			map_array.push(new google.maps.LatLng(-23.988615, -46.288256));
			 
			map_array.push(new google.maps.LatLng(-23.988199, -46.288789));
			 
			map_array.push(new google.maps.LatLng(-23.989166, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.987881, -46.28918));
			 
			map_array.push(new google.maps.LatLng(-23.988035, -46.28805));
			 
			map_array.push(new google.maps.LatLng(-23.988113, -46.289577));
			 
			map_array.push(new google.maps.LatLng(-23.988149, -46.288738));
			 
			map_array.push(new google.maps.LatLng(-23.988192, -46.288863));
			 
			map_array.push(new google.maps.LatLng(-23.987383, -46.288126));
			 
			map_array.push(new google.maps.LatLng(-23.988385, -46.288082));
			 
			map_array.push(new google.maps.LatLng(-23.98823, -46.288498));
			 
			map_array.push(new google.maps.LatLng(-23.98855, -46.288979));
			 
			map_array.push(new google.maps.LatLng(-23.986879, -46.287775));
			 
			map_array.push(new google.maps.LatLng(-23.988214, -46.289004));
			 
			map_array.push(new google.maps.LatLng(-23.98864, -46.288289));
			 
			map_array.push(new google.maps.LatLng(-23.988662, -46.287984));
			 
			map_array.push(new google.maps.LatLng(-23.987913, -46.290579));
			 
			map_array.push(new google.maps.LatLng(-23.987742, -46.288378));
			 
			map_array.push(new google.maps.LatLng(-23.989266, -46.288612));
			 
			map_array.push(new google.maps.LatLng(-23.987551, -46.288245));
			 
			map_array.push(new google.maps.LatLng(-23.98736, -46.288115));
			 
			map_array.push(new google.maps.LatLng(-23.988611, -46.288325));
			 
			map_array.push(new google.maps.LatLng(-23.98841, -46.288214));
			 
			map_array.push(new google.maps.LatLng(-23.988074, -46.289766));
			 
			map_array.push(new google.maps.LatLng(-23.987437, -46.288164));
			 
			map_array.push(new google.maps.LatLng(-23.988706, -46.288205));
			 
			map_array.push(new google.maps.LatLng(-23.988681, -46.287655));
			 
			map_array.push(new google.maps.LatLng(-23.986989, -46.287855));
			 
			map_array.push(new google.maps.LatLng(-23.988665, -46.288959));
			 
			map_array.push(new google.maps.LatLng(-23.988483, -46.288795));
			 
			map_array.push(new google.maps.LatLng(-23.987258, -46.288039));
			 
			map_array.push(new google.maps.LatLng(-23.987574, -46.288266));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.989111, -46.287695));
			 
			map_array.push(new google.maps.LatLng(-23.986914, -46.287796));
			 
			map_array.push(new google.maps.LatLng(-23.988614, -46.288135));
			 
			map_array.push(new google.maps.LatLng(-23.988922, -46.287931));
			 
			map_array.push(new google.maps.LatLng(-23.988516, -46.288314));
			 
			map_array.push(new google.maps.LatLng(-23.988496, -46.288469));
			 
			map_array.push(new google.maps.LatLng(-23.98817, -46.28929));
			 
			map_array.push(new google.maps.LatLng(-23.988267, -46.288255));
			 
			map_array.push(new google.maps.LatLng(-23.988419, -46.288785));
			 
			map_array.push(new google.maps.LatLng(-23.988807, -46.28808));
			 
			map_array.push(new google.maps.LatLng(-23.988304, -46.288768));
			 
			map_array.push(new google.maps.LatLng(-23.988674, -46.28757));
			 
			map_array.push(new google.maps.LatLng(-23.987412, -46.28815));
			 
			map_array.push(new google.maps.LatLng(-23.98852, -46.288472));
			 
			map_array.push(new google.maps.LatLng(-23.987889, -46.2907));
			 
			map_array.push(new google.maps.LatLng(-23.988498, -46.288777));
			 
			map_array.push(new google.maps.LatLng(-23.988755, -46.288831));
			 
			map_array.push(new google.maps.LatLng(-23.988368, -46.288995));
			 
			map_array.push(new google.maps.LatLng(-23.988629, -46.28835));
			 
			map_array.push(new google.maps.LatLng(-23.989011, -46.28782));
			 
			map_array.push(new google.maps.LatLng(-23.988522, -46.288836));
			 
			map_array.push(new google.maps.LatLng(-23.988422, -46.288897));
			 
			map_array.push(new google.maps.LatLng(-23.988182, -46.289278));
			 
			map_array.push(new google.maps.LatLng(-23.98837, -46.288505));
			 
			map_array.push(new google.maps.LatLng(-23.988382, -46.288281));
			 
			map_array.push(new google.maps.LatLng(-23.98885, -46.288024));
			 
			map_array.push(new google.maps.LatLng(-23.988476, -46.287398));
			 
			map_array.push(new google.maps.LatLng(-23.987409, -46.288146));
			 
			map_array.push(new google.maps.LatLng(-23.988593, -46.288347));
			 
			map_array.push(new google.maps.LatLng(-23.988924, -46.287928));
			 
			map_array.push(new google.maps.LatLng(-23.988684, -46.288229));
			 
			map_array.push(new google.maps.LatLng(-23.988295, -46.288663));
			 
			map_array.push(new google.maps.LatLng(-23.988693, -46.288221));
			 
			map_array.push(new google.maps.LatLng(-23.988261, -46.289073));
			 
			map_array.push(new google.maps.LatLng(-23.988026, -46.290002));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.987203, -46.288003));
			 
			map_array.push(new google.maps.LatLng(-23.988587, -46.288134));
			 
			map_array.push(new google.maps.LatLng(-23.988667, -46.288047));
			 
			map_array.push(new google.maps.LatLng(-23.988965, -46.287877));
			 
			map_array.push(new google.maps.LatLng(-23.988762, -46.288926));
			 
			map_array.push(new google.maps.LatLng(-23.987031, -46.28788));
			 
			map_array.push(new google.maps.LatLng(-23.986667, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.986922, -46.287805));
			 
			map_array.push(new google.maps.LatLng(-23.987486, -46.288197));
			 
			map_array.push(new google.maps.LatLng(-23.988055, -46.289852));
			 
			map_array.push(new google.maps.LatLng(-23.98859, -46.288424));
			 
			map_array.push(new google.maps.LatLng(-23.987711, -46.288356));
			 
			map_array.push(new google.maps.LatLng(-23.989064, -46.288789));
			 
			map_array.push(new google.maps.LatLng(-23.987663, -46.288326));
			 
			map_array.push(new google.maps.LatLng(-23.988269, -46.288855));
			 
			map_array.push(new google.maps.LatLng(-23.98813, -46.289084));
			 
			map_array.push(new google.maps.LatLng(-23.988247, -46.288818));
			 
			map_array.push(new google.maps.LatLng(-23.988155, -46.28939));
			 
			map_array.push(new google.maps.LatLng(-23.988201, -46.289145));
			 
			map_array.push(new google.maps.LatLng(-23.988593, -46.288357));
			 
			map_array.push(new google.maps.LatLng(-23.988525, -46.289041));
			 
			map_array.push(new google.maps.LatLng(-23.988348, -46.288415));
			 
			map_array.push(new google.maps.LatLng(-23.988026, -46.290002));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.988361, -46.288447));
			 
			map_array.push(new google.maps.LatLng(-23.988611, -46.288325));
			 
			map_array.push(new google.maps.LatLng(-23.987854, -46.287989));
			 
			map_array.push(new google.maps.LatLng(-23.988777, -46.287949));
			 
			map_array.push(new google.maps.LatLng(-23.988581, -46.288361));
			 
			map_array.push(new google.maps.LatLng(-23.988743, -46.287814));
			 
			map_array.push(new google.maps.LatLng(-23.988888, -46.28798));
			 
			map_array.push(new google.maps.LatLng(-23.988771, -46.288132));
			 
			map_array.push(new google.maps.LatLng(-23.988318, -46.288803));
			 
			map_array.push(new google.maps.LatLng(-23.988889, -46.288202));
			 
			map_array.push(new google.maps.LatLng(-23.98863, -46.288302));
			 
			map_array.push(new google.maps.LatLng(-23.988241, -46.289038));
			 
			map_array.push(new google.maps.LatLng(-23.987551, -46.288245));
			 
			map_array.push(new google.maps.LatLng(-23.988165, -46.289119));
			 
			map_array.push(new google.maps.LatLng(-23.988444, -46.28878));
			 
			map_array.push(new google.maps.LatLng(-23.987136, -46.287957));
			 
			map_array.push(new google.maps.LatLng(-23.988195, -46.289187));
			 
			map_array.push(new google.maps.LatLng(-23.988241, -46.288879));
			 
			map_array.push(new google.maps.LatLng(-23.988667, -46.288809));
			 
			map_array.push(new google.maps.LatLng(-23.987461, -46.288184));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.988156, -46.289352));
			 
			map_array.push(new google.maps.LatLng(-23.988164, -46.289315));
			 
			map_array.push(new google.maps.LatLng(-23.987577, -46.288262));
			 
			map_array.push(new google.maps.LatLng(-23.987612, -46.288287));
			 
			map_array.push(new google.maps.LatLng(-23.987889, -46.2907));
			 
			map_array.push(new google.maps.LatLng(-23.989496, -46.287213));
			 
			map_array.push(new google.maps.LatLng(-23.988339, -46.288713));
			 
			map_array.push(new google.maps.LatLng(-23.989233, -46.287542));
			 
			map_array.push(new google.maps.LatLng(-23.988348, -46.288546));
			 
			map_array.push(new google.maps.LatLng(-23.987507, -46.288215));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.988163, -46.288485));
			 
			map_array.push(new google.maps.LatLng(-23.98906, -46.287759));
			 
			map_array.push(new google.maps.LatLng(-23.988293, -46.289225));
			 
			map_array.push(new google.maps.LatLng(-23.987305, -46.288077));
			 
			map_array.push(new google.maps.LatLng(-23.988153, -46.288811));
			 
			map_array.push(new google.maps.LatLng(-23.988677, -46.288729));
			 
			map_array.push(new google.maps.LatLng(-23.988924, -46.287928));
			 
			map_array.push(new google.maps.LatLng(-23.988325, -46.288307));
			 
			map_array.push(new google.maps.LatLng(-23.988852, -46.288024));
			 
			map_array.push(new google.maps.LatLng(-23.986964, -46.287834));
			 
			map_array.push(new google.maps.LatLng(-23.988078, -46.289126));
			 
			map_array.push(new google.maps.LatLng(-23.987412, -46.28815));
			 
			map_array.push(new google.maps.LatLng(-23.988784, -46.289061));
			 
			map_array.push(new google.maps.LatLng(-23.986803, -46.287723));
			 
			map_array.push(new google.maps.LatLng(-23.988803, -46.288835));
			 
			map_array.push(new google.maps.LatLng(-23.988321, -46.289021));
			 
			map_array.push(new google.maps.LatLng(-23.988304, -46.289117));
			 
			map_array.push(new google.maps.LatLng(-23.98837, -46.288318));
			 
			map_array.push(new google.maps.LatLng(-23.987883, -46.288471));
			 
			map_array.push(new google.maps.LatLng(-23.987592, -46.288274));
			 
			map_array.push(new google.maps.LatLng(-23.989159, -46.288752));
			 
			map_array.push(new google.maps.LatLng(-23.988095, -46.288955));
			 
			map_array.push(new google.maps.LatLng(-23.987995, -46.290163));
			 
			map_array.push(new google.maps.LatLng(-23.987577, -46.288263));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.988113, -46.289504));
			 
			map_array.push(new google.maps.LatLng(-23.986975, -46.287843));
			 
			map_array.push(new google.maps.LatLng(-23.98864, -46.288289));
			 
			map_array.push(new google.maps.LatLng(-23.987442, -46.28817));
			 
			map_array.push(new google.maps.LatLng(-23.987935, -46.290465));
			 
			map_array.push(new google.maps.LatLng(-23.988209, -46.288475));
			 
			map_array.push(new google.maps.LatLng(-23.988267, -46.288498));
			 
			map_array.push(new google.maps.LatLng(-23.98818, -46.288913));
			 
			map_array.push(new google.maps.LatLng(-23.989422, -46.287306));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.988779, -46.289263));
			 
			map_array.push(new google.maps.LatLng(-23.988563, -46.28838));
			 
			map_array.push(new google.maps.LatLng(-23.987065, -46.287907));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.988552, -46.288822));
			 
			map_array.push(new google.maps.LatLng(-23.988753, -46.288142));
			 
			map_array.push(new google.maps.LatLng(-23.987461, -46.288184));
			 
			map_array.push(new google.maps.LatLng(-23.988744, -46.288164));
			 
			map_array.push(new google.maps.LatLng(-23.988383, -46.288446));
			 
			map_array.push(new google.maps.LatLng(-23.988501, -46.288462));
			 
			map_array.push(new google.maps.LatLng(-23.987282, -46.288061));
			 
			map_array.push(new google.maps.LatLng(-23.989078, -46.287733));
			 
			map_array.push(new google.maps.LatLng(-23.98832, -46.288479));
			 
			map_array.push(new google.maps.LatLng(-23.988601, -46.288239));
			 
			map_array.push(new google.maps.LatLng(-23.987988, -46.288379));
			 
			map_array.push(new google.maps.LatLng(-23.987045, -46.28789));
			 
			map_array.push(new google.maps.LatLng(-23.988185, -46.288434));
			 
			map_array.push(new google.maps.LatLng(-23.98814, -46.287983));
			 
			map_array.push(new google.maps.LatLng(-23.987902, -46.288485));
			 
			map_array.push(new google.maps.LatLng(-23.988528, -46.288731));
			 
			map_array.push(new google.maps.LatLng(-23.988012, -46.290072));
			 
			map_array.push(new google.maps.LatLng(-23.987186, -46.287996));
			 
			map_array.push(new google.maps.LatLng(-23.988881, -46.289115));
			 
			map_array.push(new google.maps.LatLng(-23.988299, -46.288851));
			 
			map_array.push(new google.maps.LatLng(-23.988805, -46.288007));
			 
			map_array.push(new google.maps.LatLng(-23.988058, -46.289432));
			 
			map_array.push(new google.maps.LatLng(-23.986975, -46.287843));
			 
			map_array.push(new google.maps.LatLng(-23.988892, -46.288387));
			 
			map_array.push(new google.maps.LatLng(-23.988372, -46.288902));
			 
			map_array.push(new google.maps.LatLng(-23.988687, -46.28821));
			 
			map_array.push(new google.maps.LatLng(-23.988132, -46.289222));
			 
			map_array.push(new google.maps.LatLng(-23.98725, -46.288033));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.988045, -46.28991));
			 
			map_array.push(new google.maps.LatLng(-23.988612, -46.288829));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.988194, -46.288327));
			 
			map_array.push(new google.maps.LatLng(-23.987913, -46.290579));
			 
			map_array.push(new google.maps.LatLng(-23.988312, -46.288654));
			 
			map_array.push(new google.maps.LatLng(-23.988059, -46.288562));
			 
			map_array.push(new google.maps.LatLng(-23.988717, -46.288529));
			 
			map_array.push(new google.maps.LatLng(-23.987863, -46.288464));
			 
			map_array.push(new google.maps.LatLng(-23.988194, -46.289155));
			 
			map_array.push(new google.maps.LatLng(-23.988484, -46.288677));
			 
			map_array.push(new google.maps.LatLng(-23.988217, -46.289043));
			 
			map_array.push(new google.maps.LatLng(-23.987782, -46.288402));
			 
			map_array.push(new google.maps.LatLng(-23.988554, -46.288115));
			 
			map_array.push(new google.maps.LatLng(-23.988215, -46.289058));
			 
			map_array.push(new google.maps.LatLng(-23.987897, -46.288487));
			 
			map_array.push(new google.maps.LatLng(-23.988202, -46.289108));
			 
			map_array.push(new google.maps.LatLng(-23.988499, -46.288978));
			 
			map_array.push(new google.maps.LatLng(-23.988238, -46.288968));
			 
			map_array.push(new google.maps.LatLng(-23.988377, -46.287977));
			 
			map_array.push(new google.maps.LatLng(-23.988873, -46.288584));
			 
			map_array.push(new google.maps.LatLng(-23.987305, -46.288077));
			 
			map_array.push(new google.maps.LatLng(-23.98853, -46.288431));
			 
			map_array.push(new google.maps.LatLng(-23.988873, -46.28785));
			 
			map_array.push(new google.maps.LatLng(-23.988587, -46.288209));
			 
			map_array.push(new google.maps.LatLng(-23.987486, -46.288199));
			 
			map_array.push(new google.maps.LatLng(-23.988448, -46.288756));
			 
			map_array.push(new google.maps.LatLng(-23.988187, -46.289222));
			 
			map_array.push(new google.maps.LatLng(-23.986892, -46.287785));
			 
			map_array.push(new google.maps.LatLng(-23.988496, -46.288001));
			 
			map_array.push(new google.maps.LatLng(-23.988047, -46.289475));
			 
			map_array.push(new google.maps.LatLng(-23.988693, -46.288221));
			 
			map_array.push(new google.maps.LatLng(-23.98906, -46.287759));
			 
			map_array.push(new google.maps.LatLng(-23.987507, -46.288215));
			 
			map_array.push(new google.maps.LatLng(-23.988797, -46.288092));
			 
			map_array.push(new google.maps.LatLng(-23.988757, -46.288142));
			 
			map_array.push(new google.maps.LatLng(-23.988296, -46.288523));
			 
			map_array.push(new google.maps.LatLng(-23.987789, -46.289197));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.98815, -46.289118));
			 
			map_array.push(new google.maps.LatLng(-23.987121, -46.287951));
			 
			map_array.push(new google.maps.LatLng(-23.989111, -46.287695));
			 
			map_array.push(new google.maps.LatLng(-23.988712, -46.288194));
			 
			map_array.push(new google.maps.LatLng(-23.988602, -46.288336));
			 
			map_array.push(new google.maps.LatLng(-23.989067, -46.287748));
			 
			map_array.push(new google.maps.LatLng(-23.988307, -46.288788));
			 
			map_array.push(new google.maps.LatLng(-23.988618, -46.288311));
			 
			map_array.push(new google.maps.LatLng(-23.987442, -46.28817));
			 
			map_array.push(new google.maps.LatLng(-23.988457, -46.289022));
			 
			map_array.push(new google.maps.LatLng(-23.988212, -46.289074));
			 
			map_array.push(new google.maps.LatLng(-23.989011, -46.28782));
			 
			map_array.push(new google.maps.LatLng(-23.987486, -46.288197));
			 
			map_array.push(new google.maps.LatLng(-23.988357, -46.289144));
			 
			map_array.push(new google.maps.LatLng(-23.98829, -46.288582));
			 
			map_array.push(new google.maps.LatLng(-23.988255, -46.289117));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.988593, -46.288347));
			 
			map_array.push(new google.maps.LatLng(-23.988356, -46.288466));
			 
			map_array.push(new google.maps.LatLng(-23.989293, -46.288728));
			 
			map_array.push(new google.maps.LatLng(-23.988447, -46.289165));
			 
			map_array.push(new google.maps.LatLng(-23.988031, -46.289988));
			 
			map_array.push(new google.maps.LatLng(-23.988651, -46.288277));
			 
			map_array.push(new google.maps.LatLng(-23.987321, -46.288083));
			 
			map_array.push(new google.maps.LatLng(-23.987947, -46.28852));
			 
			map_array.push(new google.maps.LatLng(-23.98736, -46.288115));
			 
			map_array.push(new google.maps.LatLng(-23.988745, -46.289023));
			 
			map_array.push(new google.maps.LatLng(-23.988434, -46.288923));
			 
			map_array.push(new google.maps.LatLng(-23.988617, -46.288154));
			 
			map_array.push(new google.maps.LatLng(-23.987247, -46.288037));
			 
			map_array.push(new google.maps.LatLng(-23.988427, -46.288819));
			 
			map_array.push(new google.maps.LatLng(-23.988399, -46.288922));
			 
			map_array.push(new google.maps.LatLng(-23.989037, -46.287787));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.987186, -46.287996));
			 
			map_array.push(new google.maps.LatLng(-23.988049, -46.288915));
			 
			map_array.push(new google.maps.LatLng(-23.988264, -46.288925));
			 
			map_array.push(new google.maps.LatLng(-23.988099, -46.28965));
			 
			map_array.push(new google.maps.LatLng(-23.988618, -46.288172));
			 
			map_array.push(new google.maps.LatLng(-23.986733, -46.287679));
			 
			map_array.push(new google.maps.LatLng(-23.987806, -46.289799));
			 
			map_array.push(new google.maps.LatLng(-23.988358, -46.288483));
			 
			map_array.push(new google.maps.LatLng(-23.989138, -46.287661));
			 
			map_array.push(new google.maps.LatLng(-23.988031, -46.289988));
			 
			map_array.push(new google.maps.LatLng(-23.987587, -46.288274));
			 
			map_array.push(new google.maps.LatLng(-23.986861, -46.287761));
			 
			map_array.push(new google.maps.LatLng(-23.987647, -46.288314));
			 
			map_array.push(new google.maps.LatLng(-23.988752, -46.288151));
			 
			map_array.push(new google.maps.LatLng(-23.988301, -46.288386));
			 
			map_array.push(new google.maps.LatLng(-23.987884, -46.288477));
			 
			map_array.push(new google.maps.LatLng(-23.988292, -46.288297));
			 
			map_array.push(new google.maps.LatLng(-23.988966, -46.287876));
			 
			map_array.push(new google.maps.LatLng(-23.988204, -46.289126));
			 
			map_array.push(new google.maps.LatLng(-23.988692, -46.288785));
			 
			map_array.push(new google.maps.LatLng(-23.988911, -46.287952));
			 
			map_array.push(new google.maps.LatLng(-23.987054, -46.287898));
			 
			map_array.push(new google.maps.LatLng(-23.988436, -46.288237));
			 
			map_array.push(new google.maps.LatLng(-23.988195, -46.289187));
			 
			map_array.push(new google.maps.LatLng(-23.988058, -46.289326));
			 
			map_array.push(new google.maps.LatLng(-23.98875, -46.288968));
			 
			map_array.push(new google.maps.LatLng(-23.988201, -46.289145));
			 
			map_array.push(new google.maps.LatLng(-23.988719, -46.288188));
			 
			map_array.push(new google.maps.LatLng(-23.988747, -46.288154));
			 
			map_array.push(new google.maps.LatLng(-23.988599, -46.289088));
			 
			map_array.push(new google.maps.LatLng(-23.98863, -46.288298));
			 
			map_array.push(new google.maps.LatLng(-23.988633, -46.288807));
			 
			map_array.push(new google.maps.LatLng(-23.988427, -46.288468));
			 
			map_array.push(new google.maps.LatLng(-23.988458, -46.289068));
			 
			map_array.push(new google.maps.LatLng(-23.988474, -46.289641));
			 
			map_array.push(new google.maps.LatLng(-23.989166, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.288695));
			 
			map_array.push(new google.maps.LatLng(-23.988443, -46.288985));
			 
			map_array.push(new google.maps.LatLng(-23.987031, -46.28788));
			 
			map_array.push(new google.maps.LatLng(-23.988051, -46.288194));
			 
			map_array.push(new google.maps.LatLng(-23.98768, -46.288337));
			 
			map_array.push(new google.maps.LatLng(-23.987247, -46.288037));
			 
			map_array.push(new google.maps.LatLng(-23.987315, -46.288078));
			 
			map_array.push(new google.maps.LatLng(-23.988081, -46.289744));
			 
			map_array.push(new google.maps.LatLng(-23.988087, -46.2897));
			 
			map_array.push(new google.maps.LatLng(-23.98769, -46.288283));
			 
			map_array.push(new google.maps.LatLng(-23.989308, -46.287449));
			 
			map_array.push(new google.maps.LatLng(-23.98825, -46.288792));
			 
			map_array.push(new google.maps.LatLng(-23.98725, -46.288033));
			 
			map_array.push(new google.maps.LatLng(-23.987973, -46.288536));
			 
			map_array.push(new google.maps.LatLng(-23.988367, -46.288495));
			 
			map_array.push(new google.maps.LatLng(-23.989375, -46.288004));
			 
			map_array.push(new google.maps.LatLng(-23.988372, -46.288139));
			 
			map_array.push(new google.maps.LatLng(-23.986964, -46.287834));
			 
			map_array.push(new google.maps.LatLng(-23.988736, -46.288545));
			 
			map_array.push(new google.maps.LatLng(-23.986767, -46.287696));
			 
			map_array.push(new google.maps.LatLng(-23.988676, -46.288244));
			 
			map_array.push(new google.maps.LatLng(-23.989011, -46.28782));
			 
			map_array.push(new google.maps.LatLng(-23.988966, -46.287876));
			 
			map_array.push(new google.maps.LatLng(-23.98818, -46.288585));
			 
			map_array.push(new google.maps.LatLng(-23.987489, -46.288203));
			 
			map_array.push(new google.maps.LatLng(-23.988465, -46.289037));
			 
			map_array.push(new google.maps.LatLng(-23.988776, -46.289134));
			 
			map_array.push(new google.maps.LatLng(-23.988123, -46.289527));
			 
			map_array.push(new google.maps.LatLng(-23.987412, -46.28815));
			 
			map_array.push(new google.maps.LatLng(-23.988139, -46.289437));
			 
			map_array.push(new google.maps.LatLng(-23.98733, -46.289341));
			 
			map_array.push(new google.maps.LatLng(-23.989261, -46.287507));
			 
			map_array.push(new google.maps.LatLng(-23.988414, -46.28856));
			 
			map_array.push(new google.maps.LatLng(-23.988435, -46.288396));
			 
			map_array.push(new google.maps.LatLng(-23.987031, -46.28788));
			 
			map_array.push(new google.maps.LatLng(-23.988409, -46.288994));
			 
			map_array.push(new google.maps.LatLng(-23.988353, -46.288701));
			 
			map_array.push(new google.maps.LatLng(-23.988627, -46.288306));
			 
			map_array.push(new google.maps.LatLng(-23.989011, -46.28782));
			 
			map_array.push(new google.maps.LatLng(-23.98797, -46.290283));
			 
			map_array.push(new google.maps.LatLng(-23.989066, -46.288986));
			 
			map_array.push(new google.maps.LatLng(-23.988537, -46.288023));
			 
			map_array.push(new google.maps.LatLng(-23.988738, -46.28877));
			 
			map_array.push(new google.maps.LatLng(-23.988575, -46.288368));
			 
			map_array.push(new google.maps.LatLng(-23.987712, -46.288358));
			 
			map_array.push(new google.maps.LatLng(-23.988154, -46.28937));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.988922, -46.287931));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.288957));
			 
			map_array.push(new google.maps.LatLng(-23.988164, -46.289322));
			 
			map_array.push(new google.maps.LatLng(-23.988776, -46.288118));
			 
			map_array.push(new google.maps.LatLng(-23.988494, -46.288749));
			 
			map_array.push(new google.maps.LatLng(-23.988154, -46.288914));
			 
			map_array.push(new google.maps.LatLng(-23.987809, -46.29111));
			 
			map_array.push(new google.maps.LatLng(-23.988553, -46.289325));
			 
			map_array.push(new google.maps.LatLng(-23.98868, -46.289674));
			 
			map_array.push(new google.maps.LatLng(-23.988685, -46.289721));
			 
			map_array.push(new google.maps.LatLng(-23.988207, -46.289108));
			 
			map_array.push(new google.maps.LatLng(-23.988005, -46.287803));
			 
			map_array.push(new google.maps.LatLng(-23.988911, -46.287952));
			 
			map_array.push(new google.maps.LatLng(-23.988774, -46.28827));
			 
			map_array.push(new google.maps.LatLng(-23.987507, -46.288215));
			 
			map_array.push(new google.maps.LatLng(-23.989011, -46.28782));
			 
			map_array.push(new google.maps.LatLng(-23.988278, -46.28909));
			 
			map_array.push(new google.maps.LatLng(-23.577898, -46.724029));
			 
			map_array.push(new google.maps.LatLng(-23.987913, -46.290579));
			 
			map_array.push(new google.maps.LatLng(-23.988431, -46.288896));
			 
			map_array.push(new google.maps.LatLng(-23.988285, -46.289088));
			 
			map_array.push(new google.maps.LatLng(-23.988542, -46.28837));
			 
			map_array.push(new google.maps.LatLng(-23.988141, -46.289435));
			 
			map_array.push(new google.maps.LatLng(-23.988155, -46.288332));
			 
			map_array.push(new google.maps.LatLng(-23.988315, -46.288014));
			 
			map_array.push(new google.maps.LatLng(-23.988922, -46.287931));
			 
			map_array.push(new google.maps.LatLng(-23.988418, -46.288522));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.988197, -46.289176));
			 
			map_array.push(new google.maps.LatLng(-23.986991, -46.287852));
			 
			map_array.push(new google.maps.LatLng(-23.989304, -46.289015));
			 
			map_array.push(new google.maps.LatLng(-23.988049, -46.288585));
			 
			map_array.push(new google.maps.LatLng(-23.988194, -46.288741));
			 
			map_array.push(new google.maps.LatLng(-23.988022, -46.29002));
			 
			map_array.push(new google.maps.LatLng(-23.988229, -46.288968));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.986767, -46.287696));
			 
			map_array.push(new google.maps.LatLng(-23.98821, -46.289091));
			 
			map_array.push(new google.maps.LatLng(-23.988844, -46.287788));
			 
			map_array.push(new google.maps.LatLng(-23.98736, -46.288115));
			 
			map_array.push(new google.maps.LatLng(-23.988529, -46.288569));
			 
			map_array.push(new google.maps.LatLng(-23.988697, -46.28905));
			 
			map_array.push(new google.maps.LatLng(-23.988183, -46.288959));
			 
			map_array.push(new google.maps.LatLng(-23.988738, -46.289521));
			 
			map_array.push(new google.maps.LatLng(-23.989062, -46.287755));
			 
			map_array.push(new google.maps.LatLng(-23.987315, -46.288078));
			 
			map_array.push(new google.maps.LatLng(-23.988603, -46.289734));
			 
			map_array.push(new google.maps.LatLng(-23.988471, -46.28879));
			 
			map_array.push(new google.maps.LatLng(-23.98736, -46.288115));
			 
			map_array.push(new google.maps.LatLng(-23.988614, -46.288237));
			 
			map_array.push(new google.maps.LatLng(-23.987647, -46.288314));
			 
			map_array.push(new google.maps.LatLng(-23.987829, -46.289277));
			 
			map_array.push(new google.maps.LatLng(-23.986949, -46.287822));
			 
			map_array.push(new google.maps.LatLng(-23.98736, -46.288115));
			 
			map_array.push(new google.maps.LatLng(-23.987997, -46.289447));
			 
			map_array.push(new google.maps.LatLng(-23.988804, -46.288919));
			 
			map_array.push(new google.maps.LatLng(-23.988359, -46.288418));
			 
			map_array.push(new google.maps.LatLng(-23.987391, -46.288136));
			 
			map_array.push(new google.maps.LatLng(-23.989037, -46.287787));
			 
			map_array.push(new google.maps.LatLng(-23.989028, -46.288632));
			 
			map_array.push(new google.maps.LatLng(-23.988969, -46.287872));
			 
			map_array.push(new google.maps.LatLng(-23.988123, -46.289527));
			 
			map_array.push(new google.maps.LatLng(-23.988197, -46.288912));
			 
			map_array.push(new google.maps.LatLng(-23.988442, -46.288351));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.988516, -46.288663));
			 
			map_array.push(new google.maps.LatLng(-23.988634, -46.288297));
			 
			map_array.push(new google.maps.LatLng(-23.988924, -46.287928));
			 
			map_array.push(new google.maps.LatLng(-23.988144, -46.288265));
			 
			map_array.push(new google.maps.LatLng(-23.988028, -46.288464));
			 
			map_array.push(new google.maps.LatLng(-23.987889, -46.2907));
			 
			map_array.push(new google.maps.LatLng(-23.988462, -46.288271));
			 
			map_array.push(new google.maps.LatLng(-23.987791, -46.291185));
			 
			map_array.push(new google.maps.LatLng(-23.988467, -46.288353));
			 
			map_array.push(new google.maps.LatLng(-23.986561, -46.287552));
			 
			map_array.push(new google.maps.LatLng(-23.987282, -46.288061));
			 
			map_array.push(new google.maps.LatLng(-23.988655, -46.288166));
			 
			map_array.push(new google.maps.LatLng(-23.988026, -46.290002));
			 
			map_array.push(new google.maps.LatLng(-23.988827, -46.288256));
			 
			map_array.push(new google.maps.LatLng(-23.988742, -46.288157));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.988119, -46.289544));
			 
			map_array.push(new google.maps.LatLng(-23.987526, -46.288228));
			 
			map_array.push(new google.maps.LatLng(-23.986767, -46.287696));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.98785, -46.290885));
			 
			map_array.push(new google.maps.LatLng(-23.987901, -46.290638));
			 
			map_array.push(new google.maps.LatLng(-23.988286, -46.288483));
			 
			map_array.push(new google.maps.LatLng(-23.98864, -46.288014));
			 
			map_array.push(new google.maps.LatLng(-23.987787, -46.288841));
			 
			map_array.push(new google.maps.LatLng(-23.987146, -46.28796));
			 
			map_array.push(new google.maps.LatLng(-23.988549, -46.288624));
			 
			map_array.push(new google.maps.LatLng(-23.988028, -46.289994));
			 
			map_array.push(new google.maps.LatLng(-23.988392, -46.288442));
			 
			map_array.push(new google.maps.LatLng(-23.988823, -46.288413));
			 
			map_array.push(new google.maps.LatLng(-23.988719, -46.288188));
			 
			map_array.push(new google.maps.LatLng(-23.988275, -46.288772));
			 
			map_array.push(new google.maps.LatLng(-23.988712, -46.288194));
			 
			map_array.push(new google.maps.LatLng(-23.987428, -46.288161));
			 
			map_array.push(new google.maps.LatLng(-23.986447, -46.287473));
			 
			map_array.push(new google.maps.LatLng(-23.987045, -46.28789));
			 
			map_array.push(new google.maps.LatLng(-23.987861, -46.288232));
			 
			map_array.push(new google.maps.LatLng(-23.98736, -46.288115));
			 
			map_array.push(new google.maps.LatLng(-23.988345, -46.288795));
			 
			map_array.push(new google.maps.LatLng(-23.987267, -46.288047));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.288695));
			 
			map_array.push(new google.maps.LatLng(-23.987128, -46.287949));
			 
			map_array.push(new google.maps.LatLng(-23.988949, -46.288136));
			 
			map_array.push(new google.maps.LatLng(-23.988482, -46.288956));
			 
			map_array.push(new google.maps.LatLng(-23.988436, -46.288734));
			 
			map_array.push(new google.maps.LatLng(-23.989138, -46.288998));
			 
			map_array.push(new google.maps.LatLng(-23.988298, -46.288515));
			 
			map_array.push(new google.maps.LatLng(-23.987897, -46.288487));
			 
			map_array.push(new google.maps.LatLng(-23.988204, -46.289126));
			 
			map_array.push(new google.maps.LatLng(-23.987889, -46.2907));
			 
			map_array.push(new google.maps.LatLng(-23.98863, -46.288302));
			 
			map_array.push(new google.maps.LatLng(-23.987853, -46.288452));
			 
			map_array.push(new google.maps.LatLng(-23.987821, -46.289632));
			 
			map_array.push(new google.maps.LatLng(-23.988136, -46.289529));
			 
			map_array.push(new google.maps.LatLng(-23.988486, -46.28767));
			 
			map_array.push(new google.maps.LatLng(-23.988308, -46.288166));
			 
			map_array.push(new google.maps.LatLng(-23.988437, -46.288681));
			 
			map_array.push(new google.maps.LatLng(-23.988327, -46.288332));
			 
			map_array.push(new google.maps.LatLng(-23.988526, -46.288423));
			 
			map_array.push(new google.maps.LatLng(-23.988869, -46.288813));
			 
			map_array.push(new google.maps.LatLng(-23.98907, -46.288813));
			 
			map_array.push(new google.maps.LatLng(-23.987458, -46.288181));
			 
			map_array.push(new google.maps.LatLng(-23.988224, -46.288844));
			 
			map_array.push(new google.maps.LatLng(-23.98872, -46.288639));
			 
			map_array.push(new google.maps.LatLng(-23.987647, -46.288314));
			 
			map_array.push(new google.maps.LatLng(-23.988325, -46.28851));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.988737, -46.288467));
			 
			map_array.push(new google.maps.LatLng(-23.988212, -46.289074));
			 
			map_array.push(new google.maps.LatLng(-23.988787, -46.288104));
			 
			map_array.push(new google.maps.LatLng(-23.988938, -46.288961));
			 
			map_array.push(new google.maps.LatLng(-23.987375, -46.28812));
			 
			map_array.push(new google.maps.LatLng(-23.988532, -46.28882));
			 
			map_array.push(new google.maps.LatLng(-23.987597, -46.288277));
			 
			map_array.push(new google.maps.LatLng(-23.988381, -46.288722));
			 
			map_array.push(new google.maps.LatLng(-23.988564, -46.288484));
			 
			map_array.push(new google.maps.LatLng(-23.988882, -46.287982));
			 
			map_array.push(new google.maps.LatLng(-23.988752, -46.287979));
			 
			map_array.push(new google.maps.LatLng(-23.987436, -46.288163));
			 
			map_array.push(new google.maps.LatLng(-23.987951, -46.288812));
			 
			map_array.push(new google.maps.LatLng(-23.988388, -46.289305));
			 
			map_array.push(new google.maps.LatLng(-23.987949, -46.290389));
			 
			map_array.push(new google.maps.LatLng(-23.988275, -46.288588));
			 
			map_array.push(new google.maps.LatLng(-23.988531, -46.288247));
			 
			map_array.push(new google.maps.LatLng(-23.988018, -46.289717));
			 
			map_array.push(new google.maps.LatLng(-23.988524, -46.288437));
			 
			map_array.push(new google.maps.LatLng(-23.987947, -46.28852));
			 
			map_array.push(new google.maps.LatLng(-23.988351, -46.288213));
			 
			map_array.push(new google.maps.LatLng(-23.987592, -46.288274));
			 
			map_array.push(new google.maps.LatLng(-23.988752, -46.287979));
			 
			map_array.push(new google.maps.LatLng(-23.988924, -46.287928));
			 
			map_array.push(new google.maps.LatLng(-23.988414, -46.288706));
			 
			map_array.push(new google.maps.LatLng(-23.987957, -46.290358));
			 
			map_array.push(new google.maps.LatLng(-23.987877, -46.288657));
			 
			map_array.push(new google.maps.LatLng(-23.988374, -46.288211));
			 
			map_array.push(new google.maps.LatLng(-23.98852, -46.288432));
			 
			map_array.push(new google.maps.LatLng(-23.988528, -46.288425));
			 
			map_array.push(new google.maps.LatLng(-23.988153, -46.289088));
			 
			map_array.push(new google.maps.LatLng(-23.988443, -46.288795));
			 
			map_array.push(new google.maps.LatLng(-23.986708, -46.287658));
			 
			map_array.push(new google.maps.LatLng(-23.988729, -46.288177));
			 
			map_array.push(new google.maps.LatLng(-23.988842, -46.28803));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.987839, -46.289786));
			 
			map_array.push(new google.maps.LatLng(-23.988102, -46.288361));
			 
			map_array.push(new google.maps.LatLng(-23.988232, -46.288462));
			 
			map_array.push(new google.maps.LatLng(-23.986425, -46.28747));
			 
			map_array.push(new google.maps.LatLng(-23.988385, -46.288588));
			 
			map_array.push(new google.maps.LatLng(-23.98845, -46.288521));
			 
			map_array.push(new google.maps.LatLng(-23.988716, -46.288504));
			 
			map_array.push(new google.maps.LatLng(-23.988474, -46.289017));
			 
			map_array.push(new google.maps.LatLng(-23.987663, -46.288326));
			 
			map_array.push(new google.maps.LatLng(-23.988031, -46.288573));
			 
			map_array.push(new google.maps.LatLng(-23.988442, -46.288854));
			 
			map_array.push(new google.maps.LatLng(-23.989138, -46.287661));
			 
			map_array.push(new google.maps.LatLng(-23.988282, -46.289481));
			 
			map_array.push(new google.maps.LatLng(-23.988519, -46.288444));
			 
			map_array.push(new google.maps.LatLng(-23.988965, -46.287877));
			 
			map_array.push(new google.maps.LatLng(-23.987054, -46.287898));
			 
			map_array.push(new google.maps.LatLng(-23.988719, -46.288188));
			 
			map_array.push(new google.maps.LatLng(-23.986868, -46.287764));
			 
			map_array.push(new google.maps.LatLng(-23.989231, -46.288515));
			 
			map_array.push(new google.maps.LatLng(-23.987136, -46.287957));
			 
			map_array.push(new google.maps.LatLng(-23.988181, -46.289229));
			 
			map_array.push(new google.maps.LatLng(-23.988109, -46.288328));
			 
			map_array.push(new google.maps.LatLng(-23.988269, -46.289164));
			 
			map_array.push(new google.maps.LatLng(-23.987437, -46.288167));
			 
			map_array.push(new google.maps.LatLng(-23.988808, -46.288075));
			 
			map_array.push(new google.maps.LatLng(-23.988461, -46.288721));
			 
			map_array.push(new google.maps.LatLng(-23.988281, -46.288888));
			 
			map_array.push(new google.maps.LatLng(-23.988379, -46.288307));
			 
			map_array.push(new google.maps.LatLng(-23.987883, -46.288471));
			 
			map_array.push(new google.maps.LatLng(-23.988669, -46.288422));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.288695));
			 
			map_array.push(new google.maps.LatLng(-23.989265, -46.287502));
			 
			map_array.push(new google.maps.LatLng(-23.986803, -46.287723));
			 
			map_array.push(new google.maps.LatLng(-23.987993, -46.289058));
			 
			map_array.push(new google.maps.LatLng(-23.988198, -46.289165));
			 
			map_array.push(new google.maps.LatLng(-23.987996, -46.28911));
			 
			map_array.push(new google.maps.LatLng(-23.988693, -46.288221));
			 
			map_array.push(new google.maps.LatLng(-23.988471, -46.289683));
			 
			map_array.push(new google.maps.LatLng(-23.988433, -46.288795));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.98777, -46.288398));
			 
			map_array.push(new google.maps.LatLng(-23.986964, -46.287834));
			 
			map_array.push(new google.maps.LatLng(-23.987712, -46.288358));
			 
			map_array.push(new google.maps.LatLng(-23.988056, -46.289873));
			 
			map_array.push(new google.maps.LatLng(-23.988201, -46.289145));
			 
			map_array.push(new google.maps.LatLng(-23.988388, -46.287932));
			 
			map_array.push(new google.maps.LatLng(-23.988285, -46.288952));
			 
			map_array.push(new google.maps.LatLng(-23.987924, -46.28874));
			 
			map_array.push(new google.maps.LatLng(-23.988025, -46.288569));
			 
			map_array.push(new google.maps.LatLng(-23.98868, -46.287824));
			 
			map_array.push(new google.maps.LatLng(-23.988427, -46.289008));
			 
			map_array.push(new google.maps.LatLng(-23.988357, -46.288833));
			 
			map_array.push(new google.maps.LatLng(-23.989067, -46.287748));
			 
			map_array.push(new google.maps.LatLng(-23.988026, -46.290002));
			 
			map_array.push(new google.maps.LatLng(-23.98832, -46.289199));
			 
			map_array.push(new google.maps.LatLng(-23.98858, -46.288765));
			 
			map_array.push(new google.maps.LatLng(-23.986879, -46.287775));
			 
			map_array.push(new google.maps.LatLng(-23.98799, -46.290178));
			 
			map_array.push(new google.maps.LatLng(-23.988539, -46.28883));
			 
			map_array.push(new google.maps.LatLng(-23.988877, -46.288776));
			 
			map_array.push(new google.maps.LatLng(-23.986861, -46.287761));
			 
			map_array.push(new google.maps.LatLng(-23.988486, -46.28848));
			 
			map_array.push(new google.maps.LatLng(-23.988651, -46.288277));
			 
			map_array.push(new google.maps.LatLng(-23.989525, -46.287172));
			 
			map_array.push(new google.maps.LatLng(-23.988759, -46.288386));
			 
			map_array.push(new google.maps.LatLng(-23.989166, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.988234, -46.288929));
			 
			map_array.push(new google.maps.LatLng(-23.988612, -46.288829));
			 
			map_array.push(new google.maps.LatLng(-23.98725, -46.288033));
			 
			map_array.push(new google.maps.LatLng(-23.988378, -46.287657));
			 
			map_array.push(new google.maps.LatLng(-23.988785, -46.288115));
			 
			map_array.push(new google.maps.LatLng(-23.988419, -46.288335));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.288695));
			 
			map_array.push(new google.maps.LatLng(-23.98906, -46.287759));
			 
			map_array.push(new google.maps.LatLng(-23.988315, -46.288807));
			 
			map_array.push(new google.maps.LatLng(-23.987839, -46.289748));
			 
			map_array.push(new google.maps.LatLng(-23.98877, -46.288121));
			 
			map_array.push(new google.maps.LatLng(-23.988786, -46.288814));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.987282, -46.288061));
			 
			map_array.push(new google.maps.LatLng(-23.987691, -46.288344));
			 
			map_array.push(new google.maps.LatLng(-23.988337, -46.288904));
			 
			map_array.push(new google.maps.LatLng(-23.98909, -46.288429));
			 
			map_array.push(new google.maps.LatLng(-23.986861, -46.287761));
			 
			map_array.push(new google.maps.LatLng(-23.987083, -46.287915));
			 
			map_array.push(new google.maps.LatLng(-23.98816, -46.289157));
			 
			map_array.push(new google.maps.LatLng(-23.988519, -46.288444));
			 
			map_array.push(new google.maps.LatLng(-23.987031, -46.28788));
			 
			map_array.push(new google.maps.LatLng(-23.988796, -46.288585));
			 
			map_array.push(new google.maps.LatLng(-23.988847, -46.288029));
			 
			map_array.push(new google.maps.LatLng(-23.988224, -46.288432));
			 
			map_array.push(new google.maps.LatLng(-23.988679, -46.288415));
			 
			map_array.push(new google.maps.LatLng(-23.988642, -46.288282));
			 
			map_array.push(new google.maps.LatLng(-23.988774, -46.288117));
			 
			map_array.push(new google.maps.LatLng(-23.988284, -46.288358));
			 
			map_array.push(new google.maps.LatLng(-23.989011, -46.28782));
			 
			map_array.push(new google.maps.LatLng(-23.987203, -46.288003));
			 
			map_array.push(new google.maps.LatLng(-23.987222, -46.28802));
			 
			map_array.push(new google.maps.LatLng(-23.988647, -46.289093));
			 
			map_array.push(new google.maps.LatLng(-23.988808, -46.288075));
			 
			map_array.push(new google.maps.LatLng(-23.988275, -46.288746));
			 
			map_array.push(new google.maps.LatLng(-23.988074, -46.289771));
			 
			map_array.push(new google.maps.LatLng(-23.98857, -46.2888));
			 
			map_array.push(new google.maps.LatLng(-23.988672, -46.288251));
			 
			map_array.push(new google.maps.LatLng(-23.988428, -46.288767));
			 
			map_array.push(new google.maps.LatLng(-23.988415, -46.289026));
			 
			map_array.push(new google.maps.LatLng(-23.986892, -46.287785));
			 
			map_array.push(new google.maps.LatLng(-23.988628, -46.288062));
			 
			map_array.push(new google.maps.LatLng(-23.988269, -46.288415));
			 
			map_array.push(new google.maps.LatLng(-23.988383, -46.288294));
			 
			map_array.push(new google.maps.LatLng(-23.98854, -46.289266));
			 
			map_array.push(new google.maps.LatLng(-23.988695, -46.288223));
			 
			map_array.push(new google.maps.LatLng(-23.9873, -46.288067));
			 
			map_array.push(new google.maps.LatLng(-23.988672, -46.288251));
			 
			map_array.push(new google.maps.LatLng(-23.988385, -46.289617));
			 
			map_array.push(new google.maps.LatLng(-23.989111, -46.287695));
			 
			map_array.push(new google.maps.LatLng(-23.988453, -46.28929));
			 
			map_array.push(new google.maps.LatLng(-23.987197, -46.287998));
			 
			map_array.push(new google.maps.LatLng(-23.988228, -46.288965));
			 
			map_array.push(new google.maps.LatLng(-23.988604, -46.287876));
			 
			map_array.push(new google.maps.LatLng(-23.98795, -46.290393));
			 
			map_array.push(new google.maps.LatLng(-23.988113, -46.288125));
			 
			map_array.push(new google.maps.LatLng(-23.577898, -46.724029));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.288695));
			 
			map_array.push(new google.maps.LatLng(-23.988463, -46.288221));
			 
			map_array.push(new google.maps.LatLng(-23.988402, -46.288749));
			 
			map_array.push(new google.maps.LatLng(-23.988741, -46.288065));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.288695));
			 
			map_array.push(new google.maps.LatLng(-23.988611, -46.288325));
			 
			map_array.push(new google.maps.LatLng(-23.988188, -46.289232));
			 
			map_array.push(new google.maps.LatLng(-23.98847, -46.288254));
			 
			map_array.push(new google.maps.LatLng(-23.989496, -46.287213));
			 
			map_array.push(new google.maps.LatLng(-23.988204, -46.289126));
			 
			map_array.push(new google.maps.LatLng(-23.987436, -46.288163));
			 
			map_array.push(new google.maps.LatLng(-23.989166, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.988245, -46.288521));
			 
			map_array.push(new google.maps.LatLng(-23.988672, -46.288251));
			 
			map_array.push(new google.maps.LatLng(-23.987412, -46.28815));
			 
			map_array.push(new google.maps.LatLng(-23.988481, -46.288978));
			 
			map_array.push(new google.maps.LatLng(-23.987897, -46.288487));
			 
			map_array.push(new google.maps.LatLng(-23.986447, -46.287473));
			 
			map_array.push(new google.maps.LatLng(-23.987191, -46.287993));
			 
			map_array.push(new google.maps.LatLng(-23.988209, -46.289097));
			 
			map_array.push(new google.maps.LatLng(-23.988145, -46.288911));
			 
			map_array.push(new google.maps.LatLng(-23.987788, -46.288408));
			 
			map_array.push(new google.maps.LatLng(-23.988253, -46.288526));
			 
			map_array.push(new google.maps.LatLng(-23.98828, -46.288972));
			 
			map_array.push(new google.maps.LatLng(-23.988969, -46.288084));
			 
			map_array.push(new google.maps.LatLng(-23.988659, -46.289304));
			 
			map_array.push(new google.maps.LatLng(-23.988842, -46.28803));
			 
			map_array.push(new google.maps.LatLng(-23.988043, -46.288581));
			 
			map_array.push(new google.maps.LatLng(-23.987914, -46.288923));
			 
			map_array.push(new google.maps.LatLng(-23.98832, -46.28861));
			 
			map_array.push(new google.maps.LatLng(-23.988467, -46.288709));
			 
			map_array.push(new google.maps.LatLng(-23.988198, -46.289165));
			 
			map_array.push(new google.maps.LatLng(-23.988702, -46.288671));
			 
			map_array.push(new google.maps.LatLng(-23.987963, -46.288529));
			 
			map_array.push(new google.maps.LatLng(-23.98855, -46.287667));
			 
			map_array.push(new google.maps.LatLng(-23.988132, -46.289479));
			 
			map_array.push(new google.maps.LatLng(-23.988672, -46.288239));
			 
			map_array.push(new google.maps.LatLng(-23.989111, -46.287695));
			 
			map_array.push(new google.maps.LatLng(-23.988566, -46.288728));
			 
			map_array.push(new google.maps.LatLng(-23.988474, -46.289143));
			 
			map_array.push(new google.maps.LatLng(-23.988926, -46.287928));
			 
			map_array.push(new google.maps.LatLng(-23.988593, -46.288347));
			 
			map_array.push(new google.maps.LatLng(-23.988393, -46.288326));
			 
			map_array.push(new google.maps.LatLng(-23.988162, -46.28997));
			 
			map_array.push(new google.maps.LatLng(-23.988009, -46.29009));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.986964, -46.287834));
			 
			map_array.push(new google.maps.LatLng(-23.987742, -46.288378));
			 
			map_array.push(new google.maps.LatLng(-23.988472, -46.289015));
			 
			map_array.push(new google.maps.LatLng(-23.98806, -46.289839));
			 
			map_array.push(new google.maps.LatLng(-23.988369, -46.289043));
			 
			map_array.push(new google.maps.LatLng(-23.988269, -46.288676));
			 
			map_array.push(new google.maps.LatLng(-23.98906, -46.287759));
			 
			map_array.push(new google.maps.LatLng(-23.98884, -46.28804));
			 
			map_array.push(new google.maps.LatLng(-23.988328, -46.289013));
			 
			map_array.push(new google.maps.LatLng(-23.988731, -46.28893));
			 
			map_array.push(new google.maps.LatLng(-23.988421, -46.289556));
			 
			map_array.push(new google.maps.LatLng(-23.989496, -46.287213));
			 
			map_array.push(new google.maps.LatLng(-23.988486, -46.28848));
			 
			map_array.push(new google.maps.LatLng(-23.987383, -46.288127));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.987876, -46.287953));
			 
			map_array.push(new google.maps.LatLng(-23.987583, -46.288265));
			 
			map_array.push(new google.maps.LatLng(-23.98824, -46.288884));
			 
			map_array.push(new google.maps.LatLng(-23.988496, -46.288469));
			 
			map_array.push(new google.maps.LatLng(-23.988888, -46.28798));
			 
			map_array.push(new google.maps.LatLng(-23.98768, -46.288337));
			 
			map_array.push(new google.maps.LatLng(-23.987217, -46.28801));
			 
			map_array.push(new google.maps.LatLng(-23.988343, -46.288962));
			 
			map_array.push(new google.maps.LatLng(-23.987798, -46.288416));
			 
			map_array.push(new google.maps.LatLng(-23.988577, -46.288845));
			 
			map_array.push(new google.maps.LatLng(-23.988702, -46.28821));
			 
			map_array.push(new google.maps.LatLng(-23.987159, -46.287977));
			 
			map_array.push(new google.maps.LatLng(-23.988329, -46.288465));
			 
			map_array.push(new google.maps.LatLng(-23.98857, -46.28863));
			 
			map_array.push(new google.maps.LatLng(-23.988411, -46.28869));
			 
			map_array.push(new google.maps.LatLng(-23.988314, -46.288389));
			 
			map_array.push(new google.maps.LatLng(-23.988014, -46.289408));
			 
			map_array.push(new google.maps.LatLng(-23.988217, -46.287757));
			 
			map_array.push(new google.maps.LatLng(-23.988352, -46.289153));
			 
			map_array.push(new google.maps.LatLng(-23.987182, -46.287985));
			 
			map_array.push(new google.maps.LatLng(-23.988315, -46.288033));
			 
			map_array.push(new google.maps.LatLng(-23.988594, -46.288222));
			 
			map_array.push(new google.maps.LatLng(-23.98824, -46.288881));
			 
			map_array.push(new google.maps.LatLng(-23.98831, -46.288429));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.986691, -46.287644));
			 
			map_array.push(new google.maps.LatLng(-23.988273, -46.28809));
			 
			map_array.push(new google.maps.LatLng(-23.988428, -46.288764));
			 
			map_array.push(new google.maps.LatLng(-23.987958, -46.288917));
			 
			map_array.push(new google.maps.LatLng(-23.989312, -46.289399));
			 
			map_array.push(new google.maps.LatLng(-23.988429, -46.289098));
			 
			map_array.push(new google.maps.LatLng(-23.988247, -46.288532));
			 
			map_array.push(new google.maps.LatLng(-23.988383, -46.288816));
			 
			map_array.push(new google.maps.LatLng(-23.987574, -46.288266));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.986975, -46.287843));
			 
			map_array.push(new google.maps.LatLng(-23.988185, -46.289256));
			 
			map_array.push(new google.maps.LatLng(-23.988751, -46.288789));
			 
			map_array.push(new google.maps.LatLng(-23.988394, -46.288769));
			 
			map_array.push(new google.maps.LatLng(-23.987551, -46.288245));
			 
			map_array.push(new google.maps.LatLng(-23.988496, -46.288469));
			 
			map_array.push(new google.maps.LatLng(-23.98847, -46.288684));
			 
			map_array.push(new google.maps.LatLng(-23.986975, -46.287843));
			 
			map_array.push(new google.maps.LatLng(-23.988087, -46.2897));
			 
			map_array.push(new google.maps.LatLng(-23.988688, -46.288578));
			 
			map_array.push(new google.maps.LatLng(-23.988305, -46.288772));
			 
			map_array.push(new google.maps.LatLng(-23.988777, -46.287997));
			 
			map_array.push(new google.maps.LatLng(-23.989111, -46.287695));
			 
			map_array.push(new google.maps.LatLng(-23.989535, -46.287164));
			 
			map_array.push(new google.maps.LatLng(-23.988658, -46.288078));
			 
			map_array.push(new google.maps.LatLng(-23.987939, -46.28921));
			 
			map_array.push(new google.maps.LatLng(-23.987203, -46.288003));
			 
			map_array.push(new google.maps.LatLng(-23.987391, -46.288136));
			 
			map_array.push(new google.maps.LatLng(-23.987432, -46.28816));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.988106, -46.288819));
			 
			map_array.push(new google.maps.LatLng(-23.988185, -46.289256));
			 
			map_array.push(new google.maps.LatLng(-23.987878, -46.288469));
			 
			map_array.push(new google.maps.LatLng(-23.988519, -46.288444));
			 
			map_array.push(new google.maps.LatLng(-23.988074, -46.289766));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.988844, -46.289194));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.987746, -46.288378));
			 
			map_array.push(new google.maps.LatLng(-23.988452, -46.288517));
			 
			map_array.push(new google.maps.LatLng(-23.988495, -46.288713));
			 
			map_array.push(new google.maps.LatLng(-23.98736, -46.288115));
			 
			map_array.push(new google.maps.LatLng(-23.987338, -46.288099));
			 
			map_array.push(new google.maps.LatLng(-23.987412, -46.28815));
			 
			map_array.push(new google.maps.LatLng(-23.989064, -46.288789));
			 
			map_array.push(new google.maps.LatLng(-23.988476, -46.288846));
			 
			map_array.push(new google.maps.LatLng(-23.987534, -46.288234));
			 
			map_array.push(new google.maps.LatLng(-23.987436, -46.288164));
			 
			map_array.push(new google.maps.LatLng(-23.987365, -46.288118));
			 
			map_array.push(new google.maps.LatLng(-23.98875, -46.288148));
			 
			map_array.push(new google.maps.LatLng(-23.987889, -46.2907));
			 
			map_array.push(new google.maps.LatLng(-23.988458, -46.288301));
			 
			map_array.push(new google.maps.LatLng(-23.987976, -46.290257));
			 
			map_array.push(new google.maps.LatLng(-23.988629, -46.288079));
			 
			map_array.push(new google.maps.LatLng(-23.987326, -46.288088));
			 
			map_array.push(new google.maps.LatLng(-23.98814, -46.288352));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.987489, -46.288203));
			 
			map_array.push(new google.maps.LatLng(-23.987914, -46.288498));
			 
			map_array.push(new google.maps.LatLng(-23.987386, -46.288133));
			 
			map_array.push(new google.maps.LatLng(-23.988733, -46.288172));
			 
			map_array.push(new google.maps.LatLng(-23.988192, -46.288453));
			 
			map_array.push(new google.maps.LatLng(-23.987647, -46.288314));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.98803, -46.289989));
			 
			map_array.push(new google.maps.LatLng(-23.987383, -46.288126));
			 
			map_array.push(new google.maps.LatLng(-23.987977, -46.289428));
			 
			map_array.push(new google.maps.LatLng(-23.988026, -46.290002));
			 
			map_array.push(new google.maps.LatLng(-23.98917, -46.287619));
			 
			map_array.push(new google.maps.LatLng(-23.987927, -46.289368));
			 
			map_array.push(new google.maps.LatLng(-23.988539, -46.289098));
			 
			map_array.push(new google.maps.LatLng(-23.988639, -46.288291));
			 
			map_array.push(new google.maps.LatLng(-23.988418, -46.289078));
			 
			map_array.push(new google.maps.LatLng(-23.988669, -46.288251));
			 
			map_array.push(new google.maps.LatLng(-23.988099, -46.289636));
			 
			map_array.push(new google.maps.LatLng(-23.988587, -46.288209));
			 
			map_array.push(new google.maps.LatLng(-23.988168, -46.288987));
			 
			map_array.push(new google.maps.LatLng(-23.988623, -46.288922));
			 
			map_array.push(new google.maps.LatLng(-23.988533, -46.288293));
			 
			map_array.push(new google.maps.LatLng(-23.988149, -46.289392));
			 
			map_array.push(new google.maps.LatLng(-23.988575, -46.288368));
			 
			map_array.push(new google.maps.LatLng(-23.986975, -46.287843));
			 
			map_array.push(new google.maps.LatLng(-23.988556, -46.288722));
			 
			map_array.push(new google.maps.LatLng(-23.988443, -46.288301));
			 
			map_array.push(new google.maps.LatLng(-23.988262, -46.288919));
			 
			map_array.push(new google.maps.LatLng(-23.988814, -46.288711));
			 
			map_array.push(new google.maps.LatLng(-23.988493, -46.288106));
			 
			map_array.push(new google.maps.LatLng(-23.989187, -46.288143));
			 
			map_array.push(new google.maps.LatLng(-23.988129, -46.289162));
			 
			map_array.push(new google.maps.LatLng(-23.988693, -46.288221));
			 
			map_array.push(new google.maps.LatLng(-23.98843, -46.288745));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.98835, -46.288263));
			 
			map_array.push(new google.maps.LatLng(-23.988174, -46.288282));
			 
			map_array.push(new google.maps.LatLng(-23.988729, -46.288081));
			 
			map_array.push(new google.maps.LatLng(-23.987045, -46.28789));
			 
			map_array.push(new google.maps.LatLng(-23.987923, -46.289036));
			 
			map_array.push(new google.maps.LatLng(-23.989062, -46.287755));
			 
			map_array.push(new google.maps.LatLng(-23.988194, -46.289155));
			 
			map_array.push(new google.maps.LatLng(-23.987109, -46.287934));
			 
			map_array.push(new google.maps.LatLng(-23.988471, -46.288443));
			 
			map_array.push(new google.maps.LatLng(-23.989382, -46.288694));
			 
			map_array.push(new google.maps.LatLng(-23.987186, -46.287996));
			 
			map_array.push(new google.maps.LatLng(-23.985914, -46.287103));
			 
			map_array.push(new google.maps.LatLng(-23.988292, -46.28948));
			 
			map_array.push(new google.maps.LatLng(-23.988445, -46.289161));
			 
			map_array.push(new google.maps.LatLng(-23.988377, -46.288255));
			 
			map_array.push(new google.maps.LatLng(-23.989195, -46.28759));
			 
			map_array.push(new google.maps.LatLng(-23.988417, -46.288554));
			 
			map_array.push(new google.maps.LatLng(-23.989134, -46.287661));
			 
			map_array.push(new google.maps.LatLng(-23.986861, -46.287761));
			 
			map_array.push(new google.maps.LatLng(-23.988122, -46.288631));
			 
			map_array.push(new google.maps.LatLng(-23.988538, -46.288474));
			 
			map_array.push(new google.maps.LatLng(-23.988379, -46.289087));
			 
			map_array.push(new google.maps.LatLng(-23.988277, -46.288515));
			 
			map_array.push(new google.maps.LatLng(-23.988487, -46.287716));
			 
			map_array.push(new google.maps.LatLng(-23.988158, -46.28916));
			 
			map_array.push(new google.maps.LatLng(-23.98725, -46.288033));
			 
			map_array.push(new google.maps.LatLng(-23.988372, -46.288856));
			 
			map_array.push(new google.maps.LatLng(-23.986803, -46.287723));
			 
			map_array.push(new google.maps.LatLng(-23.986667, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.98836, -46.288774));
			 
			map_array.push(new google.maps.LatLng(-23.988426, -46.288433));
			 
			map_array.push(new google.maps.LatLng(-23.988409, -46.288773));
			 
			map_array.push(new google.maps.LatLng(-23.988702, -46.288586));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.988043, -46.288578));
			 
			map_array.push(new google.maps.LatLng(-23.988376, -46.288915));
			 
			map_array.push(new google.maps.LatLng(-23.989166, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.988984, -46.288545));
			 
			map_array.push(new google.maps.LatLng(-23.988084, -46.28915));
			 
			map_array.push(new google.maps.LatLng(-23.988474, -46.28804));
			 
			map_array.push(new google.maps.LatLng(-23.986964, -46.287834));
			 
			map_array.push(new google.maps.LatLng(-23.989043, -46.28778));
			 
			map_array.push(new google.maps.LatLng(-23.988742, -46.288157));
			 
			map_array.push(new google.maps.LatLng(-23.987919, -46.2885));
			 
			map_array.push(new google.maps.LatLng(-23.988108, -46.2895));
			 
			map_array.push(new google.maps.LatLng(-23.988321, -46.288854));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.987513, -46.288217));
			 
			map_array.push(new google.maps.LatLng(-23.988001, -46.288552));
			 
			map_array.push(new google.maps.LatLng(-23.988701, -46.288079));
			 
			map_array.push(new google.maps.LatLng(-23.987592, -46.288274));
			 
			map_array.push(new google.maps.LatLng(-23.988563, -46.288571));
			 
			map_array.push(new google.maps.LatLng(-23.987902, -46.288485));
			 
			map_array.push(new google.maps.LatLng(-23.988268, -46.287776));
			 
			map_array.push(new google.maps.LatLng(-23.988926, -46.287928));
			 
			map_array.push(new google.maps.LatLng(-23.989111, -46.287695));
			 
			map_array.push(new google.maps.LatLng(-23.988442, -46.288868));
			 
			map_array.push(new google.maps.LatLng(-23.986892, -46.287785));
			 
			map_array.push(new google.maps.LatLng(-23.987647, -46.288314));
			 
			map_array.push(new google.maps.LatLng(-23.988609, -46.288651));
			 
			map_array.push(new google.maps.LatLng(-23.986112, -46.287234));
			 
			map_array.push(new google.maps.LatLng(-23.988433, -46.288442));
			 
			map_array.push(new google.maps.LatLng(-23.98842, -46.2886));
			 
			map_array.push(new google.maps.LatLng(-23.986608, -46.287588));
			 
			map_array.push(new google.maps.LatLng(-23.988388, -46.288343));
			 
			map_array.push(new google.maps.LatLng(-23.988695, -46.288223));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.987647, -46.288314));
			 
			map_array.push(new google.maps.LatLng(-23.988389, -46.288805));
			 
			map_array.push(new google.maps.LatLng(-23.987628, -46.288296));
			 
			map_array.push(new google.maps.LatLng(-23.988638, -46.28871));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.988511, -46.288681));
			 
			map_array.push(new google.maps.LatLng(-23.988247, -46.288818));
			 
			map_array.push(new google.maps.LatLng(-23.988535, -46.289039));
			 
			map_array.push(new google.maps.LatLng(-23.987109, -46.287934));
			 
			map_array.push(new google.maps.LatLng(-23.989166, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.987883, -46.288471));
			 
			map_array.push(new google.maps.LatLng(-23.988621, -46.288314));
			 
			map_array.push(new google.maps.LatLng(-23.988394, -46.289542));
			 
			map_array.push(new google.maps.LatLng(-23.988563, -46.288893));
			 
			map_array.push(new google.maps.LatLng(-23.987338, -46.288099));
			 
			map_array.push(new google.maps.LatLng(-23.989535, -46.287164));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.988195, -46.289187));
			 
			map_array.push(new google.maps.LatLng(-23.987412, -46.28815));
			 
			map_array.push(new google.maps.LatLng(-23.986879, -46.287775));
			 
			map_array.push(new google.maps.LatLng(-23.988046, -46.289911));
			 
			map_array.push(new google.maps.LatLng(-23.988286, -46.288274));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.288695));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.988588, -46.288931));
			 
			map_array.push(new google.maps.LatLng(-23.98863, -46.288302));
			 
			map_array.push(new google.maps.LatLng(-23.988486, -46.28848));
			 
			map_array.push(new google.maps.LatLng(-23.988099, -46.289638));
			 
			map_array.push(new google.maps.LatLng(-23.98844, -46.288799));
			 
			map_array.push(new google.maps.LatLng(-23.987629, -46.288303));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.988098, -46.289647));
			 
			map_array.push(new google.maps.LatLng(-23.988109, -46.28899));
			 
			map_array.push(new google.maps.LatLng(-23.987565, -46.288259));
			 
			map_array.push(new google.maps.LatLng(-23.98762, -46.288291));
			 
			map_array.push(new google.maps.LatLng(-23.988632, -46.288314));
			 
			map_array.push(new google.maps.LatLng(-23.987826, -46.288434));
			 
			map_array.push(new google.maps.LatLng(-23.988761, -46.288136));
			 
			map_array.push(new google.maps.LatLng(-23.988695, -46.288223));
			 
			map_array.push(new google.maps.LatLng(-23.988965, -46.287877));
			 
			map_array.push(new google.maps.LatLng(-23.988647, -46.288937));
			 
			map_array.push(new google.maps.LatLng(-23.989422, -46.287306));
			 
			map_array.push(new google.maps.LatLng(-23.988013, -46.290073));
			 
			map_array.push(new google.maps.LatLng(-23.988392, -46.288777));
			 
			map_array.push(new google.maps.LatLng(-23.988081, -46.289744));
			 
			map_array.push(new google.maps.LatLng(-23.988355, -46.288919));
			 
			map_array.push(new google.maps.LatLng(-23.988765, -46.289517));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.988773, -46.288056));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.288695));
			 
			map_array.push(new google.maps.LatLng(-23.988376, -46.288827));
			 
			map_array.push(new google.maps.LatLng(-23.577898, -46.724029));
			 
			map_array.push(new google.maps.LatLng(-23.988615, -46.287835));
			 
			map_array.push(new google.maps.LatLng(-23.988543, -46.288407));
			 
			map_array.push(new google.maps.LatLng(-23.988302, -46.28882));
			 
			map_array.push(new google.maps.LatLng(-23.989386, -46.28735));
			 
			map_array.push(new google.maps.LatLng(-23.988507, -46.288457));
			 
			map_array.push(new google.maps.LatLng(-23.987247, -46.288037));
			 
			map_array.push(new google.maps.LatLng(-23.98864, -46.288232));
			 
			map_array.push(new google.maps.LatLng(-23.98768, -46.288337));
			 
			map_array.push(new google.maps.LatLng(-23.988854, -46.287929));
			 
			map_array.push(new google.maps.LatLng(-23.988501, -46.288344));
			 
			map_array.push(new google.maps.LatLng(-23.988629, -46.287785));
			 
			map_array.push(new google.maps.LatLng(-23.988448, -46.288784));
			 
			map_array.push(new google.maps.LatLng(-23.988334, -46.288962));
			 
			map_array.push(new google.maps.LatLng(-23.987988, -46.287666));
			 
			map_array.push(new google.maps.LatLng(-23.988428, -46.288753));
			 
			map_array.push(new google.maps.LatLng(-23.988011, -46.28856));
			 
			map_array.push(new google.maps.LatLng(-23.988172, -46.289273));
			 
			map_array.push(new google.maps.LatLng(-23.986861, -46.287761));
			 
			map_array.push(new google.maps.LatLng(-23.988421, -46.288552));
			 
			map_array.push(new google.maps.LatLng(-23.988586, -46.288351));
			 
			map_array.push(new google.maps.LatLng(-23.987611, -46.288291));
			 
			map_array.push(new google.maps.LatLng(-23.988842, -46.28803));
			 
			map_array.push(new google.maps.LatLng(-23.988882, -46.287982));
			 
			map_array.push(new google.maps.LatLng(-23.987967, -46.290307));
			 
			map_array.push(new google.maps.LatLng(-23.988166, -46.288368));
			 
			map_array.push(new google.maps.LatLng(-23.988807, -46.28808));
			 
			map_array.push(new google.maps.LatLng(-23.988369, -46.288745));
			 
			map_array.push(new google.maps.LatLng(-23.987555, -46.288253));
			 
			map_array.push(new google.maps.LatLng(-23.988559, -46.288453));
			 
			map_array.push(new google.maps.LatLng(-23.987826, -46.288434));
			 
			map_array.push(new google.maps.LatLng(-23.988517, -46.288732));
			 
			map_array.push(new google.maps.LatLng(-23.987338, -46.288099));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.288695));
			 
			map_array.push(new google.maps.LatLng(-23.987833, -46.290959));
			 
			map_array.push(new google.maps.LatLng(-23.988081, -46.289744));
			 
			map_array.push(new google.maps.LatLng(-23.988697, -46.288163));
			 
			map_array.push(new google.maps.LatLng(-23.987992, -46.288548));
			 
			map_array.push(new google.maps.LatLng(-23.989056, -46.289406));
			 
			map_array.push(new google.maps.LatLng(-23.98796, -46.289182));
			 
			map_array.push(new google.maps.LatLng(-23.988083, -46.289355));
			 
			map_array.push(new google.maps.LatLng(-23.988743, -46.287589));
			 
			map_array.push(new google.maps.LatLng(-23.988591, -46.289004));
			 
			map_array.push(new google.maps.LatLng(-23.989496, -46.287213));
			 
			map_array.push(new google.maps.LatLng(-23.989271, -46.287491));
			 
			map_array.push(new google.maps.LatLng(-23.989028, -46.288632));
			 
			map_array.push(new google.maps.LatLng(-23.989032, -46.288989));
			 
			map_array.push(new google.maps.LatLng(-23.987947, -46.288515));
			 
			map_array.push(new google.maps.LatLng(-23.988641, -46.288744));
			 
			map_array.push(new google.maps.LatLng(-23.988591, -46.288638));
			 
			map_array.push(new google.maps.LatLng(-23.988334, -46.288445));
			 
			map_array.push(new google.maps.LatLng(-23.98777, -46.288398));
			 
			map_array.push(new google.maps.LatLng(-23.987489, -46.2882));
			 
			map_array.push(new google.maps.LatLng(-23.989247, -46.288057));
			 
			map_array.push(new google.maps.LatLng(-23.988686, -46.288604));
			 
			map_array.push(new google.maps.LatLng(-23.988908, -46.287948));
			 
			map_array.push(new google.maps.LatLng(-23.98849, -46.288474));
			 
			map_array.push(new google.maps.LatLng(-23.988303, -46.28903));
			 
			map_array.push(new google.maps.LatLng(-23.988597, -46.287739));
			 
			map_array.push(new google.maps.LatLng(-23.988259, -46.289067));
			 
			map_array.push(new google.maps.LatLng(-23.988434, -46.288162));
			 
			map_array.push(new google.maps.LatLng(-23.98835, -46.288842));
			 
			map_array.push(new google.maps.LatLng(-23.98814, -46.288453));
			 
			map_array.push(new google.maps.LatLng(-23.988344, -46.288881));
			 
			map_array.push(new google.maps.LatLng(-23.988355, -46.288839));
			 
			map_array.push(new google.maps.LatLng(-23.988738, -46.288165));
			 
			map_array.push(new google.maps.LatLng(-23.988191, -46.288602));
			 
			map_array.push(new google.maps.LatLng(-23.987461, -46.288184));
			 
			map_array.push(new google.maps.LatLng(-23.989156, -46.289136));
			 
			map_array.push(new google.maps.LatLng(-23.988109, -46.289253));
			 
			map_array.push(new google.maps.LatLng(-23.988217, -46.289043));
			 
			map_array.push(new google.maps.LatLng(-23.988594, -46.28861));
			 
			map_array.push(new google.maps.LatLng(-23.986447, -46.287473));
			 
			map_array.push(new google.maps.LatLng(-23.9886, -46.288333));
			 
			map_array.push(new google.maps.LatLng(-23.988499, -46.288139));
			 
			map_array.push(new google.maps.LatLng(-23.988532, -46.288937));
			 
			map_array.push(new google.maps.LatLng(-23.988834, -46.288272));
			 
			map_array.push(new google.maps.LatLng(-23.988674, -46.288349));
			 
			map_array.push(new google.maps.LatLng(-23.989111, -46.287695));
			 
			map_array.push(new google.maps.LatLng(-23.98865, -46.288523));
			 
			map_array.push(new google.maps.LatLng(-23.988242, -46.288515));
			 
			map_array.push(new google.maps.LatLng(-23.577898, -46.724029));
			 
			map_array.push(new google.maps.LatLng(-23.988798, -46.288089));
			 
			map_array.push(new google.maps.LatLng(-23.987847, -46.289136));
			 
			map_array.push(new google.maps.LatLng(-23.988557, -46.288602));
			 
			map_array.push(new google.maps.LatLng(-23.988337, -46.28988));
			 
			map_array.push(new google.maps.LatLng(-23.989011, -46.28782));
			 
			map_array.push(new google.maps.LatLng(-23.987971, -46.288534));
			 
			map_array.push(new google.maps.LatLng(-23.988553, -46.288507));
			 
			map_array.push(new google.maps.LatLng(-23.988508, -46.288716));
			 
			map_array.push(new google.maps.LatLng(-23.987588, -46.289683));
			 
			map_array.push(new google.maps.LatLng(-23.989496, -46.287213));
			 
			map_array.push(new google.maps.LatLng(-23.987708, -46.288353));
			 
			map_array.push(new google.maps.LatLng(-23.988579, -46.288767));
			 
			map_array.push(new google.maps.LatLng(-23.988401, -46.288811));
			 
			map_array.push(new google.maps.LatLng(-23.988312, -46.288453));
			 
			map_array.push(new google.maps.LatLng(-23.989011, -46.28782));
			 
			map_array.push(new google.maps.LatLng(-23.988254, -46.288996));
			 
			map_array.push(new google.maps.LatLng(-23.988507, -46.287751));
			 
			map_array.push(new google.maps.LatLng(-23.988557, -46.288964));
			 
			map_array.push(new google.maps.LatLng(-23.989441, -46.288126));
			 
			map_array.push(new google.maps.LatLng(-23.987864, -46.290828));
			 
			map_array.push(new google.maps.LatLng(-23.988487, -46.288473));
			 
			map_array.push(new google.maps.LatLng(-23.987716, -46.288952));
			 
			map_array.push(new google.maps.LatLng(-23.988918, -46.287888));
			 
			map_array.push(new google.maps.LatLng(-23.987594, -46.288277));
			 
			map_array.push(new google.maps.LatLng(-23.987995, -46.290163));
			 
			map_array.push(new google.maps.LatLng(-23.987084, -46.287917));
			 
			map_array.push(new google.maps.LatLng(-23.987326, -46.288088));
			 
			map_array.push(new google.maps.LatLng(-23.987346, -46.2881));
			 
			map_array.push(new google.maps.LatLng(-23.987934, -46.288507));
			 
			map_array.push(new google.maps.LatLng(-23.988512, -46.288913));
			 
			map_array.push(new google.maps.LatLng(-23.988619, -46.288086));
			 
			map_array.push(new google.maps.LatLng(-23.988327, -46.288145));
			 
			map_array.push(new google.maps.LatLng(-23.987913, -46.289264));
			 
			map_array.push(new google.maps.LatLng(-23.988674, -46.288249));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.288418));
			 
			map_array.push(new google.maps.LatLng(-23.988074, -46.289771));
			 
			map_array.push(new google.maps.LatLng(-23.988479, -46.288832));
			 
			map_array.push(new google.maps.LatLng(-23.987054, -46.287898));
			 
			map_array.push(new google.maps.LatLng(-23.988922, -46.287931));
			 
			map_array.push(new google.maps.LatLng(-23.988975, -46.287863));
			 
			map_array.push(new google.maps.LatLng(-23.987534, -46.288234));
			 
			map_array.push(new google.maps.LatLng(-23.989011, -46.28782));
			 
			map_array.push(new google.maps.LatLng(-23.987583, -46.288265));
			 
			map_array.push(new google.maps.LatLng(-23.988676, -46.288243));
			 
			map_array.push(new google.maps.LatLng(-23.98906, -46.287759));
			 
			map_array.push(new google.maps.LatLng(-23.988752, -46.287772));
			 
			map_array.push(new google.maps.LatLng(-23.988476, -46.288491));
			 
			map_array.push(new google.maps.LatLng(-23.987725, -46.288365));
			 
			map_array.push(new google.maps.LatLng(-23.988759, -46.288386));
			 
			map_array.push(new google.maps.LatLng(-23.988807, -46.28808));
			 
			map_array.push(new google.maps.LatLng(-23.988516, -46.288435));
			 
			map_array.push(new google.maps.LatLng(-23.98799, -46.290183));
			 
			map_array.push(new google.maps.LatLng(-23.987577, -46.288262));
			 
			map_array.push(new google.maps.LatLng(-23.989134, -46.287661));
			 
			map_array.push(new google.maps.LatLng(-23.988051, -46.289284));
			 
			map_array.push(new google.maps.LatLng(-23.987535, -46.28824));
			 
			map_array.push(new google.maps.LatLng(-23.987788, -46.288408));
			 
			map_array.push(new google.maps.LatLng(-23.989209, -46.287572));
			 
			map_array.push(new google.maps.LatLng(-23.988249, -46.288792));
			 
			map_array.push(new google.maps.LatLng(-23.988946, -46.2879));
			 
			map_array.push(new google.maps.LatLng(-23.987631, -46.288301));
			 
			map_array.push(new google.maps.LatLng(-23.987592, -46.288274));
			 
			map_array.push(new google.maps.LatLng(-23.987982, -46.289349));
			 
			map_array.push(new google.maps.LatLng(-23.988406, -46.288536));
			 
			map_array.push(new google.maps.LatLng(-23.988236, -46.288939));
			 
			map_array.push(new google.maps.LatLng(-23.987782, -46.289522));
			 
			map_array.push(new google.maps.LatLng(-23.98721, -46.289191));
			 
			map_array.push(new google.maps.LatLng(-23.988541, -46.288671));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.988113, -46.289577));
			 
			map_array.push(new google.maps.LatLng(-23.987565, -46.288259));
			 
			map_array.push(new google.maps.LatLng(-23.988506, -46.288258));
			 
			map_array.push(new google.maps.LatLng(-23.988386, -46.288796));
			 
			map_array.push(new google.maps.LatLng(-23.987383, -46.288126));
			 
			map_array.push(new google.maps.LatLng(-23.988611, -46.288325));
			 
			map_array.push(new google.maps.LatLng(-23.988432, -46.28754));
			 
			map_array.push(new google.maps.LatLng(-23.988371, -46.288508));
			 
			map_array.push(new google.maps.LatLng(-23.989166, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.988844, -46.28803));
			 
			map_array.push(new google.maps.LatLng(-23.987186, -46.287996));
			 
			map_array.push(new google.maps.LatLng(-23.987436, -46.288163));
			 
			map_array.push(new google.maps.LatLng(-23.988252, -46.288814));
			 
			map_array.push(new google.maps.LatLng(-23.988026, -46.290002));
			 
			map_array.push(new google.maps.LatLng(-23.987136, -46.287957));
			 
			map_array.push(new google.maps.LatLng(-23.988371, -46.28859));
			 
			map_array.push(new google.maps.LatLng(-23.988681, -46.287732));
			 
			map_array.push(new google.maps.LatLng(-23.988218, -46.288448));
			 
			map_array.push(new google.maps.LatLng(-23.988621, -46.288314));
			 
			map_array.push(new google.maps.LatLng(-23.988355, -46.288789));
			 
			map_array.push(new google.maps.LatLng(-23.988149, -46.28813));
			 
			map_array.push(new google.maps.LatLng(-23.988431, -46.288975));
			 
			map_array.push(new google.maps.LatLng(-23.98863, -46.288302));
			 
			map_array.push(new google.maps.LatLng(-23.987916, -46.287654));
			 
			map_array.push(new google.maps.LatLng(-23.987788, -46.288533));
			 
			map_array.push(new google.maps.LatLng(-23.987955, -46.28852));
			 
			map_array.push(new google.maps.LatLng(-23.988623, -46.288307));
			 
			map_array.push(new google.maps.LatLng(-23.988719, -46.288195));
			 
			map_array.push(new google.maps.LatLng(-23.988141, -46.289435));
			 
			map_array.push(new google.maps.LatLng(-23.987412, -46.28815));
			 
			map_array.push(new google.maps.LatLng(-23.989352, -46.287393));
			 
			map_array.push(new google.maps.LatLng(-23.988428, -46.288544));
			 
			map_array.push(new google.maps.LatLng(-23.988373, -46.289698));
			 
			map_array.push(new google.maps.LatLng(-23.988903, -46.287957));
			 
			map_array.push(new google.maps.LatLng(-23.988373, -46.288213));
			 
			map_array.push(new google.maps.LatLng(-23.988241, -46.288538));
			 
			map_array.push(new google.maps.LatLng(-23.988441, -46.288971));
			 
			map_array.push(new google.maps.LatLng(-23.988896, -46.288125));
			 
			map_array.push(new google.maps.LatLng(-23.989422, -46.287306));
			 
			map_array.push(new google.maps.LatLng(-23.987931, -46.288509));
			 
			map_array.push(new google.maps.LatLng(-23.988258, -46.288546));
			 
			map_array.push(new google.maps.LatLng(-23.987515, -46.288226));
			 
			map_array.push(new google.maps.LatLng(-23.988282, -46.288976));
			 
			map_array.push(new google.maps.LatLng(-23.988393, -46.288326));
			 
			map_array.push(new google.maps.LatLng(-23.987054, -46.287898));
			 
			map_array.push(new google.maps.LatLng(-23.987461, -46.288184));
			 
			map_array.push(new google.maps.LatLng(-23.988207, -46.289108));
			 
			map_array.push(new google.maps.LatLng(-23.988701, -46.28821));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.288695));
			 
			map_array.push(new google.maps.LatLng(-23.98828, -46.288151));
			 
			map_array.push(new google.maps.LatLng(-23.98863, -46.288302));
			 
			map_array.push(new google.maps.LatLng(-23.986922, -46.287805));
			 
			map_array.push(new google.maps.LatLng(-23.989422, -46.287306));
			 
			map_array.push(new google.maps.LatLng(-23.988575, -46.288368));
			 
			map_array.push(new google.maps.LatLng(-23.98736, -46.288115));
			 
			map_array.push(new google.maps.LatLng(-23.988488, -46.288472));
			 
			map_array.push(new google.maps.LatLng(-23.988486, -46.288945));
			 
			map_array.push(new google.maps.LatLng(-23.988804, -46.288467));
			 
			map_array.push(new google.maps.LatLng(-23.988757, -46.288142));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.288695));
			 
			map_array.push(new google.maps.LatLng(-23.9879, -46.289492));
			 
			map_array.push(new google.maps.LatLng(-23.988201, -46.289145));
			 
			map_array.push(new google.maps.LatLng(-23.987305, -46.288077));
			 
			map_array.push(new google.maps.LatLng(-23.987305, -46.288077));
			 
			map_array.push(new google.maps.LatLng(-23.986708, -46.287658));
			 
			map_array.push(new google.maps.LatLng(-23.988244, -46.289697));
			 
			map_array.push(new google.maps.LatLng(-23.988255, -46.288909));
			 
			map_array.push(new google.maps.LatLng(-23.987451, -46.288183));
			 
			map_array.push(new google.maps.LatLng(-23.988691, -46.288932));
			 
			map_array.push(new google.maps.LatLng(-23.986788, -46.287711));
			 
			map_array.push(new google.maps.LatLng(-23.988456, -46.288787));
			 
			map_array.push(new google.maps.LatLng(-23.988612, -46.288252));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.988123, -46.289527));
			 
			map_array.push(new google.maps.LatLng(-23.987864, -46.290828));
			 
			map_array.push(new google.maps.LatLng(-23.988761, -46.289603));
			 
			map_array.push(new google.maps.LatLng(-23.986823, -46.287741));
			 
			map_array.push(new google.maps.LatLng(-23.988248, -46.28892));
			 
			map_array.push(new google.maps.LatLng(-23.987974, -46.289144));
			 
			map_array.push(new google.maps.LatLng(-23.98731, -46.28808));
			 
			map_array.push(new google.maps.LatLng(-23.988555, -46.288787));
			 
			map_array.push(new google.maps.LatLng(-23.987864, -46.290828));
			 
			map_array.push(new google.maps.LatLng(-23.988128, -46.289503));
			 
			map_array.push(new google.maps.LatLng(-23.989135, -46.288774));
			 
			map_array.push(new google.maps.LatLng(-23.988474, -46.289641));
			 
			map_array.push(new google.maps.LatLng(-23.987847, -46.289142));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.988003, -46.29012));
			 
			map_array.push(new google.maps.LatLng(-23.988358, -46.288884));
			 
			map_array.push(new google.maps.LatLng(-23.988622, -46.288555));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.988384, -46.288601));
			 
			map_array.push(new google.maps.LatLng(-23.987931, -46.288509));
			 
			map_array.push(new google.maps.LatLng(-23.988425, -46.289052));
			 
			map_array.push(new google.maps.LatLng(-23.988254, -46.28827));
			 
			map_array.push(new google.maps.LatLng(-23.987507, -46.288215));
			 
			map_array.push(new google.maps.LatLng(-23.988632, -46.2883));
			 
			map_array.push(new google.maps.LatLng(-23.987798, -46.288416));
			 
			map_array.push(new google.maps.LatLng(-23.987507, -46.288215));
			 
			map_array.push(new google.maps.LatLng(-23.988336, -46.288243));
			 
			map_array.push(new google.maps.LatLng(-23.989004, -46.289573));
			 
			map_array.push(new google.maps.LatLng(-23.987305, -46.288077));
			 
			map_array.push(new google.maps.LatLng(-23.988459, -46.288087));
			 
			map_array.push(new google.maps.LatLng(-23.988837, -46.288285));
			 
			map_array.push(new google.maps.LatLng(-23.988018, -46.290045));
			 
			map_array.push(new google.maps.LatLng(-23.98845, -46.288301));
			 
			map_array.push(new google.maps.LatLng(-23.988427, -46.288277));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.988507, -46.287751));
			 
			map_array.push(new google.maps.LatLng(-23.989138, -46.288998));
			 
			map_array.push(new google.maps.LatLng(-23.987237, -46.28803));
			 
			map_array.push(new google.maps.LatLng(-23.988451, -46.288269));
			 
			map_array.push(new google.maps.LatLng(-23.987844, -46.288446));
			 
			map_array.push(new google.maps.LatLng(-23.989422, -46.287306));
			 
			map_array.push(new google.maps.LatLng(-23.988969, -46.287872));
			 
			map_array.push(new google.maps.LatLng(-23.98736, -46.288115));
			 
			map_array.push(new google.maps.LatLng(-23.987203, -46.288003));
			 
			map_array.push(new google.maps.LatLng(-23.987935, -46.290465));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.986892, -46.287785));
			 
			map_array.push(new google.maps.LatLng(-23.988558, -46.288388));
			 
			map_array.push(new google.maps.LatLng(-23.986975, -46.287843));
			 
			map_array.push(new google.maps.LatLng(-23.988455, -46.288353));
			 
			map_array.push(new google.maps.LatLng(-23.989352, -46.287393));
			 
			map_array.push(new google.maps.LatLng(-23.988614, -46.288289));
			 
			map_array.push(new google.maps.LatLng(-23.988142, -46.288643));
			 
			map_array.push(new google.maps.LatLng(-23.988496, -46.288469));
			 
			map_array.push(new google.maps.LatLng(-23.988896, -46.288393));
			 
			map_array.push(new google.maps.LatLng(-23.987045, -46.28789));
			 
			map_array.push(new google.maps.LatLng(-23.988216, -46.289049));
			 
			map_array.push(new google.maps.LatLng(-23.987128, -46.287949));
			 
			map_array.push(new google.maps.LatLng(-23.988543, -46.288217));
			 
			map_array.push(new google.maps.LatLng(-23.988527, -46.288903));
			 
			map_array.push(new google.maps.LatLng(-23.987282, -46.288061));
			 
			map_array.push(new google.maps.LatLng(-23.577898, -46.724029));
			 
			map_array.push(new google.maps.LatLng(-23.987536, -46.288232));
			 
			map_array.push(new google.maps.LatLng(-23.987746, -46.288378));
			 
			map_array.push(new google.maps.LatLng(-23.988175, -46.288529));
			 
			map_array.push(new google.maps.LatLng(-23.988702, -46.288949));
			 
			map_array.push(new google.maps.LatLng(-23.987947, -46.289665));
			 
			map_array.push(new google.maps.LatLng(-23.988347, -46.288396));
			 
			map_array.push(new google.maps.LatLng(-23.988968, -46.287876));
			 
			map_array.push(new google.maps.LatLng(-23.988494, -46.288472));
			 
			map_array.push(new google.maps.LatLng(-23.988747, -46.288154));
			 
			map_array.push(new google.maps.LatLng(-23.988142, -46.289418));
			 
			map_array.push(new google.maps.LatLng(-23.988548, -46.288442));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.288695));
			 
			map_array.push(new google.maps.LatLng(-23.988362, -46.2888));
			 
			map_array.push(new google.maps.LatLng(-23.98821, -46.288487));
			 
			map_array.push(new google.maps.LatLng(-23.98849, -46.288683));
			 
			map_array.push(new google.maps.LatLng(-23.988575, -46.288368));
			 
			map_array.push(new google.maps.LatLng(-23.988266, -46.289011));
			 
			map_array.push(new google.maps.LatLng(-23.988505, -46.288686));
			 
			map_array.push(new google.maps.LatLng(-23.988925, -46.289246));
			 
			map_array.push(new google.maps.LatLng(-23.988686, -46.288148));
			 
			map_array.push(new google.maps.LatLng(-23.987963, -46.289372));
			 
			map_array.push(new google.maps.LatLng(-23.98736, -46.288115));
			 
			map_array.push(new google.maps.LatLng(-23.987947, -46.28852));
			 
			map_array.push(new google.maps.LatLng(-23.988591, -46.287702));
			 
			map_array.push(new google.maps.LatLng(-23.988445, -46.288803));
			 
			map_array.push(new google.maps.LatLng(-23.987375, -46.28812));
			 
			map_array.push(new google.maps.LatLng(-23.988956, -46.289168));
			 
			map_array.push(new google.maps.LatLng(-23.988375, -46.288414));
			 
			map_array.push(new google.maps.LatLng(-23.988171, -46.289272));
			 
			map_array.push(new google.maps.LatLng(-23.988601, -46.289083));
			 
			map_array.push(new google.maps.LatLng(-23.988192, -46.289209));
			 
			map_array.push(new google.maps.LatLng(-23.986989, -46.287855));
			 
			map_array.push(new google.maps.LatLng(-23.988076, -46.288704));
			 
			map_array.push(new google.maps.LatLng(-23.98826, -46.288929));
			 
			map_array.push(new google.maps.LatLng(-23.988741, -46.287971));
			 
			map_array.push(new google.maps.LatLng(-23.988585, -46.288576));
			 
			map_array.push(new google.maps.LatLng(-23.988288, -46.288666));
			 
			map_array.push(new google.maps.LatLng(-23.988204, -46.289126));
			 
			map_array.push(new google.maps.LatLng(-23.988385, -46.289617));
			 
			map_array.push(new google.maps.LatLng(-23.988584, -46.287663));
			 
			map_array.push(new google.maps.LatLng(-23.987305, -46.288077));
			 
			map_array.push(new google.maps.LatLng(-23.988088, -46.289707));
			 
			map_array.push(new google.maps.LatLng(-23.988195, -46.289187));
			 
			map_array.push(new google.maps.LatLng(-23.987338, -46.288099));
			 
			map_array.push(new google.maps.LatLng(-23.988787, -46.288104));
			 
			map_array.push(new google.maps.LatLng(-23.988534, -46.288095));
			 
			map_array.push(new google.maps.LatLng(-23.989352, -46.287393));
			 
			map_array.push(new google.maps.LatLng(-23.988594, -46.28994));
			 
			map_array.push(new google.maps.LatLng(-23.988496, -46.288469));
			 
			map_array.push(new google.maps.LatLng(-23.988354, -46.28878));
			 
			map_array.push(new google.maps.LatLng(-23.98817, -46.28933));
			 
			map_array.push(new google.maps.LatLng(-23.989231, -46.288515));
			 
			map_array.push(new google.maps.LatLng(-23.988644, -46.288562));
			 
			map_array.push(new google.maps.LatLng(-23.988546, -46.288949));
			 
			map_array.push(new google.maps.LatLng(-23.988257, -46.288556));
			 
			map_array.push(new google.maps.LatLng(-23.988738, -46.289521));
			 
			map_array.push(new google.maps.LatLng(-23.988969, -46.287872));
			 
			map_array.push(new google.maps.LatLng(-23.987869, -46.289772));
			 
			map_array.push(new google.maps.LatLng(-23.988268, -46.288959));
			 
			map_array.push(new google.maps.LatLng(-23.988687, -46.28813));
			 
			map_array.push(new google.maps.LatLng(-23.988522, -46.288214));
			 
			map_array.push(new google.maps.LatLng(-23.988239, -46.288888));
			 
			map_array.push(new google.maps.LatLng(-23.988502, -46.288287));
			 
			map_array.push(new google.maps.LatLng(-23.989062, -46.287755));
			 
			map_array.push(new google.maps.LatLng(-23.98736, -46.288115));
			 
			map_array.push(new google.maps.LatLng(-23.988149, -46.289392));
			 
			map_array.push(new google.maps.LatLng(-23.986975, -46.287843));
			 
			map_array.push(new google.maps.LatLng(-23.988872, -46.288731));
			 
			map_array.push(new google.maps.LatLng(-23.988965, -46.287877));
			 
			map_array.push(new google.maps.LatLng(-23.989195, -46.287585));
			 
			map_array.push(new google.maps.LatLng(-23.988484, -46.28884));
			 
			map_array.push(new google.maps.LatLng(-23.988233, -46.288887));
			 
			map_array.push(new google.maps.LatLng(-23.988744, -46.288164));
			 
			map_array.push(new google.maps.LatLng(-23.988737, -46.288162));
			 
			map_array.push(new google.maps.LatLng(-23.988511, -46.288376));
			 
			map_array.push(new google.maps.LatLng(-23.988145, -46.289001));
			 
			map_array.push(new google.maps.LatLng(-23.988096, -46.289091));
			 
			map_array.push(new google.maps.LatLng(-23.989166, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.988611, -46.288325));
			 
			map_array.push(new google.maps.LatLng(-23.986478, -46.287496));
			 
			map_array.push(new google.maps.LatLng(-23.987146, -46.28796));
			 
			map_array.push(new google.maps.LatLng(-23.98625, -46.287331));
			 
			map_array.push(new google.maps.LatLng(-23.988909, -46.288349));
			 
			map_array.push(new google.maps.LatLng(-23.988969, -46.288658));
			 
			map_array.push(new google.maps.LatLng(-23.988176, -46.289259));
			 
			map_array.push(new google.maps.LatLng(-23.98826, -46.288858));
			 
			map_array.push(new google.maps.LatLng(-23.988221, -46.288646));
			 
			map_array.push(new google.maps.LatLng(-23.988447, -46.289526));
			 
			map_array.push(new google.maps.LatLng(-23.987877, -46.290763));
			 
			map_array.push(new google.maps.LatLng(-23.987631, -46.288301));
			 
			map_array.push(new google.maps.LatLng(-23.989011, -46.28782));
			 
			map_array.push(new google.maps.LatLng(-23.988192, -46.289209));
			 
			map_array.push(new google.maps.LatLng(-23.988173, -46.28856));
			 
			map_array.push(new google.maps.LatLng(-23.988428, -46.288824));
			 
			map_array.push(new google.maps.LatLng(-23.98904, -46.28952));
			 
			map_array.push(new google.maps.LatLng(-23.989001, -46.288631));
			 
			map_array.push(new google.maps.LatLng(-23.98876, -46.289208));
			 
			map_array.push(new google.maps.LatLng(-23.98923, -46.287544));
			 
			map_array.push(new google.maps.LatLng(-23.987031, -46.28788));
			 
			map_array.push(new google.maps.LatLng(-23.988432, -46.289554));
			 
			map_array.push(new google.maps.LatLng(-23.988074, -46.289766));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.988878, -46.287846));
			 
			map_array.push(new google.maps.LatLng(-23.987453, -46.289761));
			 
			map_array.push(new google.maps.LatLng(-23.988269, -46.288918));
			 
			map_array.push(new google.maps.LatLng(-23.987939, -46.288514));
			 
			map_array.push(new google.maps.LatLng(-23.987315, -46.288078));
			 
			map_array.push(new google.maps.LatLng(-23.98815, -46.288471));
			 
			map_array.push(new google.maps.LatLng(-23.987537, -46.288234));
			 
			map_array.push(new google.maps.LatLng(-23.988557, -46.289195));
			 
			map_array.push(new google.maps.LatLng(-23.988827, -46.28872));
			 
			map_array.push(new google.maps.LatLng(-23.986975, -46.287843));
			 
			map_array.push(new google.maps.LatLng(-23.989069, -46.288084));
			 
			map_array.push(new google.maps.LatLng(-23.98835, -46.288839));
			 
			map_array.push(new google.maps.LatLng(-23.988076, -46.289234));
			 
			map_array.push(new google.maps.LatLng(-23.988776, -46.288118));
			 
			map_array.push(new google.maps.LatLng(-23.988807, -46.28808));
			 
			map_array.push(new google.maps.LatLng(-23.988228, -46.288617));
			 
			map_array.push(new google.maps.LatLng(-23.989422, -46.287306));
			 
			map_array.push(new google.maps.LatLng(-23.987041, -46.289522));
			 
			map_array.push(new google.maps.LatLng(-23.988181, -46.28841));
			 
			map_array.push(new google.maps.LatLng(-23.988527, -46.28793));
			 
			map_array.push(new google.maps.LatLng(-23.987083, -46.287915));
			 
			map_array.push(new google.maps.LatLng(-23.988575, -46.288368));
			 
			map_array.push(new google.maps.LatLng(-23.988955, -46.288297));
			 
			map_array.push(new google.maps.LatLng(-23.987442, -46.28817));
			 
			map_array.push(new google.maps.LatLng(-23.988198, -46.289165));
			 
			map_array.push(new google.maps.LatLng(-23.989257, -46.289261));
			 
			map_array.push(new google.maps.LatLng(-23.987995, -46.290163));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.988874, -46.287997));
			 
			map_array.push(new google.maps.LatLng(-23.988434, -46.288366));
			 
			map_array.push(new google.maps.LatLng(-23.988622, -46.288599));
			 
			map_array.push(new google.maps.LatLng(-23.987536, -46.288232));
			 
			map_array.push(new google.maps.LatLng(-23.98877, -46.288096));
			 
			map_array.push(new google.maps.LatLng(-23.98849, -46.2896));
			 
			map_array.push(new google.maps.LatLng(-23.988265, -46.28847));
			 
			map_array.push(new google.maps.LatLng(-23.988605, -46.288094));
			 
			map_array.push(new google.maps.LatLng(-23.98908, -46.287744));
			 
			map_array.push(new google.maps.LatLng(-23.577898, -46.724029));
			 
			map_array.push(new google.maps.LatLng(-23.989352, -46.287393));
			 
			map_array.push(new google.maps.LatLng(-23.988376, -46.288526));
			 
			map_array.push(new google.maps.LatLng(-23.988153, -46.288347));
			 
			map_array.push(new google.maps.LatLng(-23.988262, -46.289129));
			 
			map_array.push(new google.maps.LatLng(-23.988731, -46.288179));
			 
			map_array.push(new google.maps.LatLng(-23.986961, -46.287831));
			 
			map_array.push(new google.maps.LatLng(-23.988564, -46.288219));
			 
			map_array.push(new google.maps.LatLng(-23.98721, -46.288018));
			 
			map_array.push(new google.maps.LatLng(-23.988232, -46.288905));
			 
			map_array.push(new google.maps.LatLng(-23.988095, -46.288614));
			 
			map_array.push(new google.maps.LatLng(-23.988123, -46.289527));
			 
			map_array.push(new google.maps.LatLng(-23.987826, -46.288434));
			 
			map_array.push(new google.maps.LatLng(-23.988443, -46.288435));
			 
			map_array.push(new google.maps.LatLng(-23.987604, -46.289394));
			 
			map_array.push(new google.maps.LatLng(-23.98736, -46.288115));
			 
			map_array.push(new google.maps.LatLng(-23.987437, -46.288167));
			 
			map_array.push(new google.maps.LatLng(-23.987045, -46.28789));
			 
			map_array.push(new google.maps.LatLng(-23.987391, -46.288136));
			 
			map_array.push(new google.maps.LatLng(-23.988988, -46.287849));
			 
			map_array.push(new google.maps.LatLng(-23.577898, -46.724029));
			 
			map_array.push(new google.maps.LatLng(-23.98814, -46.287386));
			 
			map_array.push(new google.maps.LatLng(-23.988098, -46.289647));
			 
			map_array.push(new google.maps.LatLng(-23.988344, -46.288903));
			 
			map_array.push(new google.maps.LatLng(-23.988612, -46.287632));
			 
			map_array.push(new google.maps.LatLng(-23.988254, -46.288924));
			 
			map_array.push(new google.maps.LatLng(-23.987263, -46.288043));
			 
			map_array.push(new google.maps.LatLng(-23.988512, -46.288754));
			 
			map_array.push(new google.maps.LatLng(-23.988487, -46.288009));
			 
			map_array.push(new google.maps.LatLng(-23.988358, -46.288904));
			 
			map_array.push(new google.maps.LatLng(-23.988536, -46.287885));
			 
			map_array.push(new google.maps.LatLng(-23.989195, -46.287585));
			 
			map_array.push(new google.maps.LatLng(-23.988593, -46.289021));
			 
			map_array.push(new google.maps.LatLng(-23.988002, -46.289359));
			 
			map_array.push(new google.maps.LatLng(-23.989195, -46.28759));
			 
			map_array.push(new google.maps.LatLng(-23.987926, -46.290501));
			 
			map_array.push(new google.maps.LatLng(-23.988742, -46.288157));
			 
			map_array.push(new google.maps.LatLng(-23.988965, -46.287877));
			 
			map_array.push(new google.maps.LatLng(-23.988388, -46.288529));
			 
			map_array.push(new google.maps.LatLng(-23.988388, -46.290149));
			 
			map_array.push(new google.maps.LatLng(-23.987592, -46.288274));
			 
			map_array.push(new google.maps.LatLng(-23.988479, -46.287845));
			 
			map_array.push(new google.maps.LatLng(-23.98855, -46.288225));
			 
			map_array.push(new google.maps.LatLng(-23.988669, -46.288251));
			 
			map_array.push(new google.maps.LatLng(-23.98927, -46.287495));
			 
			map_array.push(new google.maps.LatLng(-23.988969, -46.287872));
			 
			map_array.push(new google.maps.LatLng(-23.989023, -46.288377));
			 
			map_array.push(new google.maps.LatLng(-23.988292, -46.288874));
			 
			map_array.push(new google.maps.LatLng(-23.987914, -46.288498));
			 
			map_array.push(new google.maps.LatLng(-23.988282, -46.288717));
			 
			map_array.push(new google.maps.LatLng(-23.988556, -46.288402));
			 
			map_array.push(new google.maps.LatLng(-23.988287, -46.288667));
			 
			map_array.push(new google.maps.LatLng(-23.988398, -46.288947));
			 
			map_array.push(new google.maps.LatLng(-23.988395, -46.289596));
			 
			map_array.push(new google.maps.LatLng(-23.987186, -46.287996));
			 
			map_array.push(new google.maps.LatLng(-23.987375, -46.28812));
			 
			map_array.push(new google.maps.LatLng(-23.989002, -46.288505));
			 
			map_array.push(new google.maps.LatLng(-23.989051, -46.289235));
			 
			map_array.push(new google.maps.LatLng(-23.988868, -46.288445));
			 
			map_array.push(new google.maps.LatLng(-23.989496, -46.287213));
			 
			map_array.push(new google.maps.LatLng(-23.987864, -46.288464));
			 
			map_array.push(new google.maps.LatLng(-23.988649, -46.289083));
			 
			map_array.push(new google.maps.LatLng(-23.987712, -46.288358));
			 
			map_array.push(new google.maps.LatLng(-23.988143, -46.289414));
			 
			map_array.push(new google.maps.LatLng(-23.988285, -46.288573));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.989352, -46.287393));
			 
			map_array.push(new google.maps.LatLng(-23.989166, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.988607, -46.288855));
			 
			map_array.push(new google.maps.LatLng(-23.988382, -46.289283));
			 
			map_array.push(new google.maps.LatLng(-23.987826, -46.288434));
			 
			map_array.push(new google.maps.LatLng(-23.987222, -46.28802));
			 
			map_array.push(new google.maps.LatLng(-23.988391, -46.288729));
			 
			map_array.push(new google.maps.LatLng(-23.989239, -46.287532));
			 
			map_array.push(new google.maps.LatLng(-23.989166, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.988171, -46.289279));
			 
			map_array.push(new google.maps.LatLng(-23.988672, -46.288251));
			 
			map_array.push(new google.maps.LatLng(-23.577898, -46.724029));
			 
			map_array.push(new google.maps.LatLng(-23.988219, -46.288514));
			 
			map_array.push(new google.maps.LatLng(-23.986861, -46.287761));
			 
			map_array.push(new google.maps.LatLng(-23.988609, -46.289018));
			 
			map_array.push(new google.maps.LatLng(-23.987315, -46.288078));
			 
			map_array.push(new google.maps.LatLng(-23.989085, -46.287727));
			 
			map_array.push(new google.maps.LatLng(-23.987534, -46.288234));
			 
			map_array.push(new google.maps.LatLng(-23.988826, -46.288142));
			 
			map_array.push(new google.maps.LatLng(-23.987893, -46.289379));
			 
			map_array.push(new google.maps.LatLng(-23.98864, -46.288232));
			 
			map_array.push(new google.maps.LatLng(-23.987031, -46.28788));
			 
			map_array.push(new google.maps.LatLng(-23.988195, -46.289187));
			 
			map_array.push(new google.maps.LatLng(-23.988236, -46.288964));
			 
			map_array.push(new google.maps.LatLng(-23.988486, -46.28848));
			 
			map_array.push(new google.maps.LatLng(-23.987412, -46.28815));
			 
			map_array.push(new google.maps.LatLng(-23.988455, -46.289019));
			 
			map_array.push(new google.maps.LatLng(-23.988074, -46.289766));
			 
			map_array.push(new google.maps.LatLng(-23.987883, -46.288472));
			 
			map_array.push(new google.maps.LatLng(-23.987305, -46.288077));
			 
			map_array.push(new google.maps.LatLng(-23.988712, -46.288347));
			 
			map_array.push(new google.maps.LatLng(-23.988469, -46.288392));
			 
			map_array.push(new google.maps.LatLng(-23.988546, -46.28906));
			 
			map_array.push(new google.maps.LatLng(-23.988129, -46.289496));
			 
			map_array.push(new google.maps.LatLng(-23.988144, -46.289431));
			 
			map_array.push(new google.maps.LatLng(-23.987995, -46.290163));
			 
			map_array.push(new google.maps.LatLng(-23.988562, -46.288696));
			 
			map_array.push(new google.maps.LatLng(-23.989032, -46.28898));
			 
			map_array.push(new google.maps.LatLng(-23.986447, -46.287473));
			 
			map_array.push(new google.maps.LatLng(-23.989255, -46.287515));
			 
			map_array.push(new google.maps.LatLng(-23.988408, -46.288358));
			 
			map_array.push(new google.maps.LatLng(-23.988805, -46.288077));
			 
			map_array.push(new google.maps.LatLng(-23.987461, -46.288184));
			 
			map_array.push(new google.maps.LatLng(-23.988933, -46.289457));
			 
			map_array.push(new google.maps.LatLng(-23.986879, -46.287775));
			 
			map_array.push(new google.maps.LatLng(-23.988571, -46.289417));
			 
			map_array.push(new google.maps.LatLng(-23.989363, -46.287995));
			 
			map_array.push(new google.maps.LatLng(-23.987197, -46.287998));
			 
			map_array.push(new google.maps.LatLng(-23.98809, -46.289726));
			 
			map_array.push(new google.maps.LatLng(-23.988844, -46.287788));
			 
			map_array.push(new google.maps.LatLng(-23.988449, -46.288822));
			 
			map_array.push(new google.maps.LatLng(-23.577898, -46.724029));
			 
			map_array.push(new google.maps.LatLng(-23.986964, -46.287834));
			 
			map_array.push(new google.maps.LatLng(-23.9883, -46.288701));
			 
			map_array.push(new google.maps.LatLng(-23.988618, -46.288752));
			 
			map_array.push(new google.maps.LatLng(-23.988774, -46.288117));
			 
			map_array.push(new google.maps.LatLng(-23.989164, -46.287624));
			 
			map_array.push(new google.maps.LatLng(-23.988335, -46.289193));
			 
			map_array.push(new google.maps.LatLng(-23.988442, -46.289019));
			 
			map_array.push(new google.maps.LatLng(-23.98736, -46.288115));
			 
			map_array.push(new google.maps.LatLng(-23.988246, -46.288262));
			 
			map_array.push(new google.maps.LatLng(-23.988255, -46.288877));
			 
			map_array.push(new google.maps.LatLng(-23.988316, -46.288819));
			 
			map_array.push(new google.maps.LatLng(-23.988254, -46.288251));
			 
			map_array.push(new google.maps.LatLng(-23.988437, -46.290165));
			 
			map_array.push(new google.maps.LatLng(-23.988351, -46.28895));
			 
			map_array.push(new google.maps.LatLng(-23.988217, -46.289043));
			 
			map_array.push(new google.maps.LatLng(-23.988164, -46.289315));
			 
			map_array.push(new google.maps.LatLng(-23.988366, -46.288068));
			 
			map_array.push(new google.maps.LatLng(-23.98863, -46.288302));
			 
			map_array.push(new google.maps.LatLng(-23.988177, -46.289245));
			 
			map_array.push(new google.maps.LatLng(-23.988498, -46.28833));
			 
			map_array.push(new google.maps.LatLng(-23.988338, -46.288832));
			 
			map_array.push(new google.maps.LatLng(-23.986767, -46.287696));
			 
			map_array.push(new google.maps.LatLng(-23.988285, -46.289343));
			 
			map_array.push(new google.maps.LatLng(-23.988332, -46.288779));
			 
			map_array.push(new google.maps.LatLng(-23.987207, -46.289129));
			 
			map_array.push(new google.maps.LatLng(-23.987222, -46.28802));
			 
			map_array.push(new google.maps.LatLng(-23.989527, -46.288623));
			 
			map_array.push(new google.maps.LatLng(-23.987957, -46.290358));
			 
			map_array.push(new google.maps.LatLng(-23.98906, -46.287759));
			 
			map_array.push(new google.maps.LatLng(-23.9887, -46.289154));
			 
			map_array.push(new google.maps.LatLng(-23.98806, -46.289836));
			 
			map_array.push(new google.maps.LatLng(-23.988285, -46.288668));
			 
			map_array.push(new google.maps.LatLng(-23.988657, -46.288744));
			 
			map_array.push(new google.maps.LatLng(-23.988043, -46.289943));
			 
			map_array.push(new google.maps.LatLng(-23.987461, -46.288184));
			 
			map_array.push(new google.maps.LatLng(-23.988179, -46.289062));
			 
			map_array.push(new google.maps.LatLng(-23.988353, -46.288912));
			 
			map_array.push(new google.maps.LatLng(-23.988627, -46.288982));
			 
			map_array.push(new google.maps.LatLng(-23.988195, -46.289187));
			 
			map_array.push(new google.maps.LatLng(-23.987986, -46.289268));
			 
			map_array.push(new google.maps.LatLng(-23.988922, -46.287931));
			 
			map_array.push(new google.maps.LatLng(-23.987574, -46.288266));
			 
			map_array.push(new google.maps.LatLng(-23.988498, -46.288983));
			 
			map_array.push(new google.maps.LatLng(-23.988217, -46.289043));
			 
			map_array.push(new google.maps.LatLng(-23.986861, -46.287761));
			 
			map_array.push(new google.maps.LatLng(-23.988522, -46.288214));
			 
			map_array.push(new google.maps.LatLng(-23.98804, -46.288365));
			 
			map_array.push(new google.maps.LatLng(-23.988651, -46.288277));
			 
			map_array.push(new google.maps.LatLng(-23.988003, -46.290113));
			 
			map_array.push(new google.maps.LatLng(-23.988764, -46.288499));
			 
			map_array.push(new google.maps.LatLng(-23.987746, -46.288378));
			 
			map_array.push(new google.maps.LatLng(-23.986501, -46.287507));
			 
			map_array.push(new google.maps.LatLng(-23.987054, -46.287898));
			 
			map_array.push(new google.maps.LatLng(-23.987971, -46.288534));
			 
			map_array.push(new google.maps.LatLng(-23.9882, -46.289155));
			 
			map_array.push(new google.maps.LatLng(-23.988226, -46.288653));
			 
			map_array.push(new google.maps.LatLng(-23.988361, -46.288864));
			 
			map_array.push(new google.maps.LatLng(-23.98876, -46.287726));
			 
			map_array.push(new google.maps.LatLng(-23.988496, -46.288867));
			 
			map_array.push(new google.maps.LatLng(-23.98909, -46.288429));
			 
			map_array.push(new google.maps.LatLng(-23.988531, -46.28871));
			 
			map_array.push(new google.maps.LatLng(-23.988286, -46.288715));
			 
			map_array.push(new google.maps.LatLng(-23.987677, -46.288335));
			 
			map_array.push(new google.maps.LatLng(-23.989496, -46.287213));
			 
			map_array.push(new google.maps.LatLng(-23.987957, -46.290358));
			 
			map_array.push(new google.maps.LatLng(-23.98913, -46.287669));
			 
			map_array.push(new google.maps.LatLng(-23.988693, -46.288221));
			 
			map_array.push(new google.maps.LatLng(-23.988421, -46.288174));
			 
			map_array.push(new google.maps.LatLng(-23.988469, -46.288762));
			 
			map_array.push(new google.maps.LatLng(-23.987374, -46.288128));
			 
			map_array.push(new google.maps.LatLng(-23.988839, -46.287955));
			 
			map_array.push(new google.maps.LatLng(-23.987412, -46.28815));
			 
			map_array.push(new google.maps.LatLng(-23.988369, -46.288307));
			 
			map_array.push(new google.maps.LatLng(-23.987602, -46.288285));
			 
			map_array.push(new google.maps.LatLng(-23.988382, -46.288843));
			 
			map_array.push(new google.maps.LatLng(-23.988712, -46.288194));
			 
			map_array.push(new google.maps.LatLng(-23.986667, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.288695));
			 
			map_array.push(new google.maps.LatLng(-23.987668, -46.288326));
			 
			map_array.push(new google.maps.LatLng(-23.987864, -46.289289));
			 
			map_array.push(new google.maps.LatLng(-23.988559, -46.288095));
			 
			map_array.push(new google.maps.LatLng(-23.989422, -46.287306));
			 
			map_array.push(new google.maps.LatLng(-23.987998, -46.290155));
			 
			map_array.push(new google.maps.LatLng(-23.988453, -46.288242));
			 
			map_array.push(new google.maps.LatLng(-23.987182, -46.287985));
			 
			map_array.push(new google.maps.LatLng(-23.98848, -46.289688));
			 
			map_array.push(new google.maps.LatLng(-23.988535, -46.288954));
			 
			map_array.push(new google.maps.LatLng(-23.987847, -46.289618));
			 
			map_array.push(new google.maps.LatLng(-23.988677, -46.288805));
			 
			map_array.push(new google.maps.LatLng(-23.987998, -46.288551));
			 
			map_array.push(new google.maps.LatLng(-23.987258, -46.288039));
			 
			map_array.push(new google.maps.LatLng(-23.988431, -46.288975));
			 
			map_array.push(new google.maps.LatLng(-23.987894, -46.288481));
			 
			map_array.push(new google.maps.LatLng(-23.988498, -46.289827));
			 
			map_array.push(new google.maps.LatLng(-23.987947, -46.28852));
			 
			map_array.push(new google.maps.LatLng(-23.988503, -46.288148));
			 
			map_array.push(new google.maps.LatLng(-23.988194, -46.289176));
			 
			map_array.push(new google.maps.LatLng(-23.988105, -46.289312));
			 
			map_array.push(new google.maps.LatLng(-23.988411, -46.288671));
			 
			map_array.push(new google.maps.LatLng(-23.988518, -46.288796));
			 
			map_array.push(new google.maps.LatLng(-23.988616, -46.28831));
			 
			map_array.push(new google.maps.LatLng(-23.986767, -46.287696));
			 
			map_array.push(new google.maps.LatLng(-23.989178, -46.287608));
			 
			map_array.push(new google.maps.LatLng(-23.98848, -46.288211));
			 
			map_array.push(new google.maps.LatLng(-23.988156, -46.287946));
			 
			map_array.push(new google.maps.LatLng(-23.987864, -46.290828));
			 
			map_array.push(new google.maps.LatLng(-23.989111, -46.287695));
			 
			map_array.push(new google.maps.LatLng(-23.987972, -46.288913));
			 
			map_array.push(new google.maps.LatLng(-23.987919, -46.289258));
			 
			map_array.push(new google.maps.LatLng(-23.98799, -46.290183));
			 
			map_array.push(new google.maps.LatLng(-23.988316, -46.288664));
			 
			map_array.push(new google.maps.LatLng(-23.98868, -46.288798));
			 
			map_array.push(new google.maps.LatLng(-23.988737, -46.288162));
			 
			map_array.push(new google.maps.LatLng(-23.988304, -46.288684));
			 
			map_array.push(new google.maps.LatLng(-23.988231, -46.288519));
			 
			map_array.push(new google.maps.LatLng(-23.988194, -46.289192));
			 
			map_array.push(new google.maps.LatLng(-23.988648, -46.28908));
			 
			map_array.push(new google.maps.LatLng(-23.98768, -46.288337));
			 
			map_array.push(new google.maps.LatLng(-23.987071, -46.287908));
			 
			map_array.push(new google.maps.LatLng(-23.988596, -46.288708));
			 
			map_array.push(new google.maps.LatLng(-23.988316, -46.288778));
			 
			map_array.push(new google.maps.LatLng(-23.987364, -46.288111));
			 
			map_array.push(new google.maps.LatLng(-23.988637, -46.288551));
			 
			map_array.push(new google.maps.LatLng(-23.987535, -46.28824));
			 
			map_array.push(new google.maps.LatLng(-23.988327, -46.289085));
			 
			map_array.push(new google.maps.LatLng(-23.988447, -46.288822));
			 
			map_array.push(new google.maps.LatLng(-23.988524, -46.288437));
			 
			map_array.push(new google.maps.LatLng(-23.988611, -46.288325));
			 
			map_array.push(new google.maps.LatLng(-23.98768, -46.288337));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.986361, -46.287415));
			 
			map_array.push(new google.maps.LatLng(-23.987461, -46.288184));
			 
			map_array.push(new google.maps.LatLng(-23.988154, -46.289358));
			 
			map_array.push(new google.maps.LatLng(-23.987732, -46.288371));
			 
			map_array.push(new google.maps.LatLng(-23.988581, -46.28867));
			 
			map_array.push(new google.maps.LatLng(-23.987574, -46.288266));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.988888, -46.28798));
			 
			map_array.push(new google.maps.LatLng(-23.988295, -46.288405));
			 
			map_array.push(new google.maps.LatLng(-23.988381, -46.288861));
			 
			map_array.push(new google.maps.LatLng(-23.988719, -46.288188));
			 
			map_array.push(new google.maps.LatLng(-23.988702, -46.28821));
			 
			map_array.push(new google.maps.LatLng(-23.987968, -46.288529));
			 
			map_array.push(new google.maps.LatLng(-23.986588, -46.287572));
			 
			map_array.push(new google.maps.LatLng(-23.988058, -46.289842));
			 
			map_array.push(new google.maps.LatLng(-23.987315, -46.288078));
			 
			map_array.push(new google.maps.LatLng(-23.988807, -46.28808));
			 
			map_array.push(new google.maps.LatLng(-23.988669, -46.289397));
			 
			map_array.push(new google.maps.LatLng(-23.988378, -46.288598));
			 
			map_array.push(new google.maps.LatLng(-23.987507, -46.288215));
			 
			map_array.push(new google.maps.LatLng(-23.986803, -46.287723));
			 
			map_array.push(new google.maps.LatLng(-23.988194, -46.28845));
			 
			map_array.push(new google.maps.LatLng(-23.987949, -46.290389));
			 
			map_array.push(new google.maps.LatLng(-23.986561, -46.287552));
			 
			map_array.push(new google.maps.LatLng(-23.988829, -46.288517));
			 
			map_array.push(new google.maps.LatLng(-23.988693, -46.288221));
			 
			map_array.push(new google.maps.LatLng(-23.986975, -46.287843));
			 
			map_array.push(new google.maps.LatLng(-23.987507, -46.288215));
			 
			map_array.push(new google.maps.LatLng(-23.988123, -46.289527));
			 
			map_array.push(new google.maps.LatLng(-23.988038, -46.289949));
			 
			map_array.push(new google.maps.LatLng(-23.987815, -46.288661));
			 
			map_array.push(new google.maps.LatLng(-23.988543, -46.288407));
			 
			map_array.push(new google.maps.LatLng(-23.98822, -46.289029));
			 
			map_array.push(new google.maps.LatLng(-23.988554, -46.288776));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.988198, -46.289165));
			 
			map_array.push(new google.maps.LatLng(-23.988713, -46.287682));
			 
			map_array.push(new google.maps.LatLng(-23.98864, -46.288289));
			 
			map_array.push(new google.maps.LatLng(-23.986691, -46.287644));
			 
			map_array.push(new google.maps.LatLng(-23.98852, -46.288911));
			 
			map_array.push(new google.maps.LatLng(-23.988559, -46.288289));
			 
			map_array.push(new google.maps.LatLng(-23.98852, -46.289199));
			 
			map_array.push(new google.maps.LatLng(-23.988105, -46.288295));
			 
			map_array.push(new google.maps.LatLng(-23.987533, -46.288231));
			 
			map_array.push(new google.maps.LatLng(-23.987136, -46.287957));
			 
			map_array.push(new google.maps.LatLng(-23.989307, -46.288459));
			 
			map_array.push(new google.maps.LatLng(-23.988776, -46.288118));
			 
			map_array.push(new google.maps.LatLng(-23.988067, -46.288223));
			 
			map_array.push(new google.maps.LatLng(-23.988747, -46.288154));
			 
			map_array.push(new google.maps.LatLng(-23.98819, -46.289171));
			 
			map_array.push(new google.maps.LatLng(-23.988432, -46.288858));
			 
			map_array.push(new google.maps.LatLng(-23.988646, -46.287986));
			 
			map_array.push(new google.maps.LatLng(-23.988633, -46.28904));
			 
			map_array.push(new google.maps.LatLng(-23.989011, -46.28782));
			 
			map_array.push(new google.maps.LatLng(-23.988627, -46.288395));
			 
			map_array.push(new google.maps.LatLng(-23.98846, -46.288867));
			 
			map_array.push(new google.maps.LatLng(-23.98806, -46.289836));
			 
			map_array.push(new google.maps.LatLng(-23.988467, -46.288697));
			 
			map_array.push(new google.maps.LatLng(-23.987551, -46.288245));
			 
			map_array.push(new google.maps.LatLng(-23.987437, -46.288685));
			 
			map_array.push(new google.maps.LatLng(-23.988625, -46.288161));
			 
			map_array.push(new google.maps.LatLng(-23.988543, -46.288417));
			 
			map_array.push(new google.maps.LatLng(-23.988143, -46.289414));
			 
			map_array.push(new google.maps.LatLng(-23.988181, -46.289229));
			 
			map_array.push(new google.maps.LatLng(-23.988134, -46.289189));
			 
			map_array.push(new google.maps.LatLng(-23.987551, -46.288245));
			 
			map_array.push(new google.maps.LatLng(-23.988575, -46.288368));
			 
			map_array.push(new google.maps.LatLng(-23.989678, -46.288922));
			 
			map_array.push(new google.maps.LatLng(-23.988236, -46.288922));
			 
			map_array.push(new google.maps.LatLng(-23.988882, -46.288713));
			 
			map_array.push(new google.maps.LatLng(-23.988771, -46.289325));
			 
			map_array.push(new google.maps.LatLng(-23.989111, -46.287695));
			 
			map_array.push(new google.maps.LatLng(-23.989324, -46.289192));
			 
			map_array.push(new google.maps.LatLng(-23.987945, -46.289256));
			 
			map_array.push(new google.maps.LatLng(-23.986767, -46.287696));
			 
			map_array.push(new google.maps.LatLng(-23.987537, -46.288234));
			 
			map_array.push(new google.maps.LatLng(-23.98817, -46.28929));
			 
			map_array.push(new google.maps.LatLng(-23.989166, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.988308, -46.28966));
			 
			map_array.push(new google.maps.LatLng(-23.987914, -46.288498));
			 
			map_array.push(new google.maps.LatLng(-23.988434, -46.28897));
			 
			map_array.push(new google.maps.LatLng(-23.988121, -46.289301));
			 
			map_array.push(new google.maps.LatLng(-23.988259, -46.288951));
			 
			map_array.push(new google.maps.LatLng(-23.988382, -46.288859));
			 
			map_array.push(new google.maps.LatLng(-23.988362, -46.288177));
			 
			map_array.push(new google.maps.LatLng(-23.988642, -46.288583));
			 
			map_array.push(new google.maps.LatLng(-23.989617, -46.287845));
			 
			map_array.push(new google.maps.LatLng(-23.988744, -46.288164));
			 
			map_array.push(new google.maps.LatLng(-23.988069, -46.289807));
			 
			map_array.push(new google.maps.LatLng(-23.989138, -46.288998));
			 
			map_array.push(new google.maps.LatLng(-23.989151, -46.288373));
			 
			map_array.push(new google.maps.LatLng(-23.988547, -46.288888));
			 
			map_array.push(new google.maps.LatLng(-23.988781, -46.288109));
			 
			map_array.push(new google.maps.LatLng(-23.98799, -46.288879));
			 
			map_array.push(new google.maps.LatLng(-23.988561, -46.28758));
			 
			map_array.push(new google.maps.LatLng(-23.987985, -46.289606));
			 
			map_array.push(new google.maps.LatLng(-23.988956, -46.289494));
			 
			map_array.push(new google.maps.LatLng(-23.989575, -46.287114));
			 
			map_array.push(new google.maps.LatLng(-23.988169, -46.288007));
			 
			map_array.push(new google.maps.LatLng(-23.988115, -46.289192));
			 
			map_array.push(new google.maps.LatLng(-23.988291, -46.289182));
			 
			map_array.push(new google.maps.LatLng(-23.988787, -46.288104));
			 
			map_array.push(new google.maps.LatLng(-23.988459, -46.288365));
			 
			map_array.push(new google.maps.LatLng(-23.98845, -46.288521));
			 
			map_array.push(new google.maps.LatLng(-23.987222, -46.28802));
			 
			map_array.push(new google.maps.LatLng(-23.988069, -46.289807));
			 
			map_array.push(new google.maps.LatLng(-23.988393, -46.288739));
			 
			map_array.push(new google.maps.LatLng(-23.987995, -46.290163));
			 
			map_array.push(new google.maps.LatLng(-23.988371, -46.288788));
			 
			map_array.push(new google.maps.LatLng(-23.988397, -46.288876));
			 
			map_array.push(new google.maps.LatLng(-23.988163, -46.288434));
			 
			map_array.push(new google.maps.LatLng(-23.988322, -46.288858));
			 
			map_array.push(new google.maps.LatLng(-23.988597, -46.289643));
			 
			map_array.push(new google.maps.LatLng(-23.988122, -46.288666));
			 
			map_array.push(new google.maps.LatLng(-23.989575, -46.287114));
			 
			map_array.push(new google.maps.LatLng(-23.986949, -46.287822));
			 
			map_array.push(new google.maps.LatLng(-23.988564, -46.28826));
			 
			map_array.push(new google.maps.LatLng(-23.987507, -46.288215));
			 
			map_array.push(new google.maps.LatLng(-23.988151, -46.289393));
			 
			map_array.push(new google.maps.LatLng(-23.988882, -46.287982));
			 
			map_array.push(new google.maps.LatLng(-23.988561, -46.28758));
			 
			map_array.push(new google.maps.LatLng(-23.988443, -46.288832));
			 
			map_array.push(new google.maps.LatLng(-23.988141, -46.289435));
			 
			map_array.push(new google.maps.LatLng(-23.987412, -46.28815));
			 
			map_array.push(new google.maps.LatLng(-23.988957, -46.288254));
			 
			map_array.push(new google.maps.LatLng(-23.988096, -46.288751));
			 
			map_array.push(new google.maps.LatLng(-23.988356, -46.288729));
			 
			map_array.push(new google.maps.LatLng(-23.989422, -46.287306));
			 
			map_array.push(new google.maps.LatLng(-23.988632, -46.288294));
			 
			map_array.push(new google.maps.LatLng(-23.988672, -46.288244));
			 
			map_array.push(new google.maps.LatLng(-23.988605, -46.287959));
			 
			map_array.push(new google.maps.LatLng(-23.988128, -46.288786));
			 
			map_array.push(new google.maps.LatLng(-23.987423, -46.288161));
			 
			map_array.push(new google.maps.LatLng(-23.988572, -46.288593));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.988805, -46.288077));
			 
			map_array.push(new google.maps.LatLng(-23.98828, -46.288844));
			 
			map_array.push(new google.maps.LatLng(-23.989008, -46.288514));
			 
			map_array.push(new google.maps.LatLng(-23.988151, -46.289393));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.988425, -46.288497));
			 
			map_array.push(new google.maps.LatLng(-23.988554, -46.288887));
			 
			map_array.push(new google.maps.LatLng(-23.988719, -46.288188));
			 
			map_array.push(new google.maps.LatLng(-23.989081, -46.289249));
			 
			map_array.push(new google.maps.LatLng(-23.986788, -46.287711));
			 
			map_array.push(new google.maps.LatLng(-23.988385, -46.288791));
			 
			map_array.push(new google.maps.LatLng(-23.988301, -46.288469));
			 
			map_array.push(new google.maps.LatLng(-23.988423, -46.288461));
			 
			map_array.push(new google.maps.LatLng(-23.98842, -46.288497));
			 
			map_array.push(new google.maps.LatLng(-23.988382, -46.28908));
			 
			map_array.push(new google.maps.LatLng(-23.988506, -46.288919));
			 
			map_array.push(new google.maps.LatLng(-23.988471, -46.288491));
			 
			map_array.push(new google.maps.LatLng(-23.98859, -46.288164));
			 
			map_array.push(new google.maps.LatLng(-23.988416, -46.28881));
			 
			map_array.push(new google.maps.LatLng(-23.988489, -46.288191));
			 
			map_array.push(new google.maps.LatLng(-23.988527, -46.288113));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.987466, -46.288187));
			 
			map_array.push(new google.maps.LatLng(-23.989317, -46.288885));
			 
			map_array.push(new google.maps.LatLng(-23.987412, -46.28815));
			 
			map_array.push(new google.maps.LatLng(-23.989166, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.988382, -46.288743));
			 
			map_array.push(new google.maps.LatLng(-23.989111, -46.287695));
			 
			map_array.push(new google.maps.LatLng(-23.988343, -46.288819));
			 
			map_array.push(new google.maps.LatLng(-23.987913, -46.290579));
			 
			map_array.push(new google.maps.LatLng(-23.988461, -46.288273));
			 
			map_array.push(new google.maps.LatLng(-23.98835, -46.288831));
			 
			map_array.push(new google.maps.LatLng(-23.98826, -46.288789));
			 
			map_array.push(new google.maps.LatLng(-23.988259, -46.288385));
			 
			map_array.push(new google.maps.LatLng(-23.988371, -46.289037));
			 
			map_array.push(new google.maps.LatLng(-23.988452, -46.288517));
			 
			map_array.push(new google.maps.LatLng(-23.988131, -46.288838));
			 
			map_array.push(new google.maps.LatLng(-23.988462, -46.288719));
			 
			map_array.push(new google.maps.LatLng(-23.988191, -46.289202));
			 
			map_array.push(new google.maps.LatLng(-23.988679, -46.289118));
			 
			map_array.push(new google.maps.LatLng(-23.988853, -46.288289));
			 
			map_array.push(new google.maps.LatLng(-23.988389, -46.2888));
			 
			map_array.push(new google.maps.LatLng(-23.988566, -46.288265));
			 
			map_array.push(new google.maps.LatLng(-23.989575, -46.287114));
			 
			map_array.push(new google.maps.LatLng(-23.989166, -46.287626));
			 
			map_array.push(new google.maps.LatLng(-23.988453, -46.28889));
			 
			map_array.push(new google.maps.LatLng(-23.987338, -46.288099));
			 
			map_array.push(new google.maps.LatLng(-23.987611, -46.288291));
			 
			map_array.push(new google.maps.LatLng(-23.988697, -46.288026));
			 
			map_array.push(new google.maps.LatLng(-23.988323, -46.288649));
			 
			map_array.push(new google.maps.LatLng(-23.987842, -46.288451));
			 
			map_array.push(new google.maps.LatLng(-23.989111, -46.287695));
			 
			map_array.push(new google.maps.LatLng(-23.98793, -46.288503));
			 
			map_array.push(new google.maps.LatLng(-23.988198, -46.289165));
			 
			map_array.push(new google.maps.LatLng(-23.989286, -46.287476));
			 
			map_array.push(new google.maps.LatLng(-23.988656, -46.288254));
			 
			map_array.push(new google.maps.LatLng(-23.988195, -46.289187));
			 
			map_array.push(new google.maps.LatLng(-23.986892, -46.287785));
			 
			map_array.push(new google.maps.LatLng(-23.988453, -46.288901));
			 
			map_array.push(new google.maps.LatLng(-23.987417, -46.288153));
			 
			map_array.push(new google.maps.LatLng(-23.577898, -46.724029));
			 
			map_array.push(new google.maps.LatLng(-23.987848, -46.28845));
			 
			map_array.push(new google.maps.LatLng(-23.988199, -46.289056));
			 
			map_array.push(new google.maps.LatLng(-23.989111, -46.287695));
			 
			map_array.push(new google.maps.LatLng(-23.988651, -46.288277));
			 
			map_array.push(new google.maps.LatLng(-23.988089, -46.288863));
			 
			map_array.push(new google.maps.LatLng(-23.988285, -46.288668));
			 
			map_array.push(new google.maps.LatLng(-23.987967, -46.289777));
			 
			map_array.push(new google.maps.LatLng(-23.989178, -46.287608));
			 
			map_array.push(new google.maps.LatLng(-23.986909, -46.2878));
			 
			map_array.push(new google.maps.LatLng(-23.988312, -46.287936));
			 
			map_array.push(new google.maps.LatLng(-23.987375, -46.28812));
			 
			map_array.push(new google.maps.LatLng(-23.988486, -46.28848));
			 
			map_array.push(new google.maps.LatLng(-23.987913, -46.290579));
			 
			map_array.push(new google.maps.LatLng(-23.987574, -46.288266));
			 
			map_array.push(new google.maps.LatLng(-23.988184, -46.289117));
			 
			map_array.push(new google.maps.LatLng(-23.988842, -46.28803));
			 
			map_array.push(new google.maps.LatLng(-23.988244, -46.288916));
			 
			map_array.push(new google.maps.LatLng(-23.988768, -46.288764));
			 
			map_array.push(new google.maps.LatLng(-23.98806, -46.289399));
			 
			map_array.push(new google.maps.LatLng(-23.98857, -46.288674));
			 
			map_array.push(new google.maps.LatLng(-23.987897, -46.288487));
			 
			map_array.push(new google.maps.LatLng(-23.98912, -46.287681));
			 
			map_array.push(new google.maps.LatLng(-23.988439, -46.288682));
			 
			map_array.push(new google.maps.LatLng(-23.986478, -46.287496));
			 
			map_array.push(new google.maps.LatLng(-23.988642, -46.288282));
			 
			map_array.push(new google.maps.LatLng(-23.988341, -46.288246));
			 
			map_array.push(new google.maps.LatLng(-23.987342, -46.288102));
			 
			map_array.push(new google.maps.LatLng(-23.988397, -46.288697));
			 
			map_array.push(new google.maps.LatLng(-23.988496, -46.288469));
			 
			map_array.push(new google.maps.LatLng(-23.988425, -46.289067));
			 
			map_array.push(new google.maps.LatLng(-23.98858, -46.288313));
			 
			map_array.push(new google.maps.LatLng(-23.988471, -46.288741));
			 
			map_array.push(new google.maps.LatLng(-23.988303, -46.288961));
			 
			map_array.push(new google.maps.LatLng(-23.988285, -46.288668));
			 
			map_array.push(new google.maps.LatLng(-23.988776, -46.288118));
			 
			map_array.push(new google.maps.LatLng(-23.987846, -46.288446));
			 
			map_array.push(new google.maps.LatLng(-23.988413, -46.288826));
			 
			map_array.push(new google.maps.LatLng(-23.987203, -46.288003));
			 
			map_array.push(new google.maps.LatLng(-23.987507, -46.288215));
			 
			map_array.push(new google.maps.LatLng(-23.988584, -46.288679));
			 
			map_array.push(new google.maps.LatLng(-23.988272, -46.288417));
			 
			map_array.push(new google.maps.LatLng(-23.989211, -46.289064));
			 
			map_array.push(new google.maps.LatLng(-23.987126, -46.287954));
			 
			map_array.push(new google.maps.LatLng(-23.98853, -46.289604));
			 
			map_array.push(new google.maps.LatLng(-23.987705, -46.28835));
			 
			map_array.push(new google.maps.LatLng(-23.988333, -46.288995));
			 
			map_array.push(new google.maps.LatLng(-23.988528, -46.288278));
			 
			map_array.push(new google.maps.LatLng(-23.988232, -46.288948));
			 
			map_array.push(new google.maps.LatLng(-23.988482, -46.288558));
			 
			map_array.push(new google.maps.LatLng(-23.988403, -46.288568));
			 
			map_array.push(new google.maps.LatLng(-23.988074, -46.289766));
			 
			map_array.push(new google.maps.LatLng(-23.987737, -46.289019));
			 
			map_array.push(new google.maps.LatLng(-23.987864, -46.290828));
			 
			map_array.push(new google.maps.LatLng(-23.988009, -46.29009));
			 
			map_array.push(new google.maps.LatLng(-23.988507, -46.287751));
			 
			map_array.push(new google.maps.LatLng(-23.989224, -46.287553));
			 
			map_array.push(new google.maps.LatLng(-23.988924, -46.287928));
			 
			map_array.push(new google.maps.LatLng(-23.988326, -46.288891));
			 
			map_array.push(new google.maps.LatLng(-23.988698, -46.288781));
			 
			map_array.push(new google.maps.LatLng(-23.577898, -46.724029));
			 
			map_array.push(new google.maps.LatLng(-23.988969, -46.288165));
			 
			map_array.push(new google.maps.LatLng(-23.988557, -46.288289));
			 
			map_array.push(new google.maps.LatLng(-23.988394, -46.288708));
			 
			map_array.push(new google.maps.LatLng(-23.98895, -46.287904));
					debugger;
        return map_array;
      }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkeZvStmcd4GC5HmpJT7mkEN1KFPQ7bPc&libraries=visualization&callback=initMap">
    </script>
  </body>
</html>