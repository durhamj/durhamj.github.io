mapboxgl.accessToken = 'pk.eyJ1IjoiZHVyaGFtaiIsImEiOiJja28wanY2cTUwMjMyMm9sYjhpNWExaHI3In0.R3lFGWr298yvlzyM4QBLAg';
      var map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/mapbox/streets-v11',
      center: [-120.55, 47.0000045],
      zoom: 11
      });
      
      // Add the control to the map.
      map.addControl(
      new MapboxGeocoder({
      accessToken: mapboxgl.accessToken,
      mapboxgl: mapboxgl
      })
      );