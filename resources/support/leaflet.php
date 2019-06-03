<?php require_once("resources/support/checksession.php"); ?>
<!DOCTYPE html>
<html>
  <div id="mapid"></div>
  <script type="text/javascript">
  var greenIcon = new L.Icon({
    iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
    iconSize: [25, 41],
    iconAnchor: [12, 41],
    popupAnchor: [1, -34],
    shadowSize: [41, 41]
  });

  var redIcon = new L.Icon({
    iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
    iconSize: [25, 41],
    iconAnchor: [12, 41],
    popupAnchor: [1, -34],
    shadowSize: [41, 41]
  });

  navigator.geolocation.getCurrentPosition(function(location) {
  var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);
  var mymap = L.map('mapid').setView(latlng, 10)
  var hittamig = L.marker(latlng, {icon:redIcon}).addTo(mymap);
  L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiZGRhYW5uZWUiLCJhIjoiY2p3YndieHowMG44NTQ5b2ppdWdpNmd1dSJ9.tBG790xBNyd1hvlLmWhxjA', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      maxZoom: 20,
      id: 'mapbox.streets',
      accessToken: 'pk.eyJ1IjoiZGRhYW5uZWUiLCJhIjoiY2p3YnZ2OHR4MG4wYzQzdDd5Nm5qb21seCJ9.1lvGsOKalK2t8ELMTGWS4Q'
    }).addTo(mymap);

    var lager1Uppsala = L.marker([59.250000, 18]).addTo(mymap);
    var lager2Lund = L.marker([55.701489, 13.186419]).addTo(mymap);
    var lager3Umeå = L.marker([63.828892, 20.258842]).addTo(mymap);

    var popup = L.popup();

    function locateUser() {
      this.map.locate({setView : true});
    }

    function onMapClick(e) {
     popup
       .setLatLng(e.latlng)
       .setContent(e.latlng.toString())
       .openOn(mymap);
    }
    mymap.on('click', onMapClick);
  });

  </script>
</html>
