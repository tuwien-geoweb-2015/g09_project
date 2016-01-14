// Base map
var osmLayer = new ol.layer.Tile({source: new ol.source.OSM()});


// Census map layer
var wmsLayer = new ol.layer.Image({
  source: new ol.source.ImageWMS({
    url: 'http://student.ifip.tuwien.ac.at/geoserver/wms',
    params: {'LAYERS': 'g09_2015:x160'}
  }),
  opacity: 0.6
});

// Map object
olMap = new ol.Map({
  target: 'map',
  renderer: 'canvas',
  layers: [osmLayer, wmsLayer],
  view: new ol.View({
    center: ol.proj.transform([16.37, 48.21], 'EPSG:4326', 'EPSG:3857'),
    zoom: 11,
    maxZoom: 18
  })

});


// Load variables into dropdown
$.get("data/DataDict.txt", function(response) {
  // We start at line 3 - line 1 is column names, line 2 is not a variable
  $(response.split('\n').splice(2)).each(function(index, line) {
    $('#topics').append($('<option>')
      .val(line.substr(0, 12).trim())
      .html(line.substr(12, 105).trim()));
  });
});
// Add behaviour to dropdown
$('#topics').change(function() {
  wmsLayer.getSource().updateParams({
    'viewparams': 'column:' + $('#topics>option:selected').val()
  });
});
// Create an ol.Overlay with a popup anchored to the map
var popup = new ol.Overlay({
  element: $('#popup')
});
olMap.addOverlay(popup);



var geolocation = new ol.Geolocation({
  projection: map.getView().getProjection(),
  tracking: true
});
geolocation.once('change:position', function(evt) {
  map.getView().setCenter(geolocation.getPosition());
  marker.setGeometry(new ol.geom.Point(map.getView().getCenter()));
});


var form = document.getElementById('center');
form.onsubmit = geolocation.once('change:position', function(evt) {
  map.getView().setCenter(geolocation.getPosition());
  marker.setGeometry(new ol.geom.Point(map.getView().getCenter()));
});

var form = document.getElementById('searchform');
form.onsubmit = function(evt) {
  evt.preventDefault();
  var q = form.search.value;
  var url = 'http://nominatim.openstreetmap.org/search?format=json&q=' + q;
  var xhr = new XMLHttpRequest();
  xhr.open('GET', url);
  xhr.onload = function() {
    var result = JSON.parse(xhr.responseText);
    if (result.length > 0) {
      var first = result[0];
      form.search.value = first.display_name;
      map.getView().setCenter(ol.proj.fromLonLat([
        parseFloat(first.lon),
        parseFloat(first.lat)
      ]));
      marker.setGeometry(new ol.geom.Point(map.getView().getCenter()));
    }
  };
  xhr.send();
};