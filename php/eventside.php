
<!doctype html>
<html>
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Event Kalender</title>
        
      <link href="../css/stil.css" rel="stylesheet" type="text/css">
        
		
	</head>
		<body>
	
            
            <div class="eventsidecontainer1"></div>
            <div class="eventsidecontainer2"></div>
            <div class="eventsidecontainer3">
                <a href="https://www.google.no/">Bestil her</a>
                <a href="https://www.facebook.com">Facebook</a>
             </div>
            
           <div id="eventsidemap"></div>
    <script>
      function initMap() {
        var uluru = {lat: 59.916379, lng: 10.761465};
        var map = new google.maps.Map(document.getElementById('eventsidemap'), {
          zoom: 14,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRfr51h9jrxDI5yfrgQlqNMT6ySvGV6ek&callback=initMap">
    </script>
        
            
           
            
            
          
      </body>
</html>