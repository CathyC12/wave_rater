// In the following example, markers appear when the user clicks on the map.
// Each marker is labeled with a single alphabetical character.
var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
var labelIndex = 0;
var google;



function initialize() {
  var ireland = {
    lat: 53.2734,
    lng: -7.778320310000026
  };

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 6,
    center: ireland
  });
  

  // This event listener calls addMarker() when the map is clicked.
  //  google.maps.event.addListener(map, 'click', function(event) {
  //  addMarker(event.latLng, map);
//   });

  // Add a marker at the center of the map.
  addMarker(ireland, map);
  
}


// Adds a marker to the map.
function addMarker(location, map) {
  // Add the marker at the clicked location, and add the next-available label  from the array of alphabetical characters.
  var marker = new google.maps.Marker({
    position: location,
    label: labels[labelIndex++ % labels.length],
    map: map
  });
  
  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Dogs bay, Co Galway</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Dogs Bay</b>,  Not so much a beach as a long crescent of sand back-to-back ' +
      ' with another beaut of a silvery bay, Gurteen.'+
      ' Both have white sand made of tiny particles of seashell  '+
      'and between them youll always find shelter from the summer breeze. '+
     '</p>'+
      '</div>'+
      
      '</div>';
     
      

  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

  var marker = new google.maps.Marker({
    position: {
    lat: 53.270668,
    lng: -9.056790500000034
  },
    map: map,
    title: 'Dogs Bay, Co Galway'
  });
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
  
  
  var contentString1 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Inchdoney, Co. Cork</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Inchdoney, Co. Cork</b>, Follow the road from Cork to Clonakilty and just beyond youll find' +
       'Inchdoney Island, a blob of land surrounded by crystal clear Blue-Flagged'+
      'waters. Sheltered by land on three sides, it has views out over Clonakilty '+
       'Bay to the south and here you can walk the sandy shore and watch the long'+
      'rollers come in from the Atlantic.</p>'+
      '</div>'+
      '</div>';

  var infowindow1 = new google.maps.InfoWindow({
    content: contentString1
  });

  var marker1 = new google.maps.Marker({
    position: {
    lat: 51.5988,
    lng: -8.869739999999979
  },
    map: map,
    title: 'Inchdoney, Co. Cork'
  });
  marker1.addListener('click', function() {
    infowindow1.open(map, marker1);
  });


  var contentString2 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Fanore, Co. Clare</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Fanore, Co. Clare</b>,If the grey limestone flags of the Burren begin to pall, make a break for the black and ' +
       'golden shores of Fanore beach.The gold, says one theory, comes from iron '+
      'oxide coating the minuscule shell fragments that make up the beach - its all about  '+
       'geology in this part of the world - and get a fresh perspective on the unique landscape.</p>'+
      '</div>'+
      '</div>';


  var infowindow2 = new google.maps.InfoWindow({
    content: contentString2
  });

  var marker2 = new google.maps.Marker({
    position: {
    lat: 53.10493,
    lng: -9.29553999999996
  },
    map: map,
    title: 'Fanore, Co. Clare'
  });
  marker2.addListener('click', function() {
    infowindow2.open(map, marker2);
  });
}




google.maps.event.addDomListener(window, 'load', initialize);
