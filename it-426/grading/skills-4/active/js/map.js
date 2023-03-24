    mapboxgl.accessToken = 'pk.eyJ1IjoiamVzc2llanIxIiwiYSI6ImNrbzgxZmdqMjA4ZzUycXFoNnh3dW02dWIifQ.sEqHHcVXD4rhpLPSYtpjcQ'; //insert your API key here
      var map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/mapbox/streets-v11',
      center: [-120.55, 47.0000045],
      zoom: 11
      });
      
     var geocoder = new MapboxGeocoder({ // Initialize the geocoder
  accessToken: mapboxgl.accessToken, // Set the access token
  mapboxgl: mapboxgl, // Set the mapbox-gl instance
  marker: false, // Do not use the default marker style
});

// Add the geocoder to the map
map.addControl(geocoder); // Add the search bar control to the map.
      