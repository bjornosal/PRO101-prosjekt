<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
          <link rel="icon" type="image/png" href="../photos/icons/cal-icon.png">
    
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <title>Campus</title>
         


        <link rel = "stylesheet" type = "text/css" href = "../css/campusInfo.css">

    </head>

    <body> 
        
     

        <?php 
        require 'header.php'; 
        #require 'search.php';
        require 'tip-box.php';
        require 'go-to-top.php';
        ?>

    
        <div class = "photo sectOne">
            <div id = "buttonContainer"><h2 id = "Fjerdingen" onclick = "initScroll('text1'); return false;"  href = "#">Fjerdingen</h2>
            <h2 id = "Vulkan" onclick = "initScroll('text2'); return false;"  href = "#">Vulkan</h2>
                <h2 id = "Brenneriveien" onclick = "initScroll('text3'); return false;" href = "#">Brenneriveien</h2></div>
            
            
        </div>
        
            <div class = "text1"><h1>Fjerdingen</h1><div id = "mapFjerdingen"></div><p>Fjerdingen er Westerdals ACT sitt nye tilskudd til campus-familien, og stod ferdig til bruk høsten 2016. Navnet stammer fra gaten campusen ligger i, Christian Krohgs gate, som helt tilbake til 1600-tallet het Fjerdingens gate. Nå yrer gaten med studenter fra både kommunikasjon, teknologi og kunst. Mangfoldet av studenter fra maskedesign til programmering skaper et unikt miljø. Du sitter sjeldent alene i kantina på Fjerdingen. Fra torsdag-fredag er det dessuten også mulig å nyte en iskald pils i kantina som forvandles til Sjenkestua kl 17:00. Fjerdingen er dessuten også et steinkast unna Grünerløkka, Oslos svar på Soho i New York. Det skal ikke mer en enn liten spasertur ut av Fjerdingen for å utforske hva Oslo's hippeste strøk har å by på.</p></div>
        
        <div class = "photo sectTwo"></div>
        
        
     
            <div class = "text2"><h1>Vulkan</h1><div id = "mapVulkan"></div><p>Vulkan er Fjerdingen's kule og litt eldre storesøster, og befinner seg 5-10 minutters gange unna. Miljøet rundt Vulkan er preget av </p></div>
        
        <div class = "photo sectThree"></div>
        
    
            <div class = "text3"><h1>Brenneriveien</h1><div id = "mapBrenneriveien"></div><p>Bacon ipsum dolor amet spare ribs leberkas corned beef brisket tri-tip tail, kielbasa turkey jowl biltong salami filet mignon chicken. Leberkas shoulder short ribs ham, short loin frankfurter turkey landjaeger venison porchetta tri-tip hamburger biltong chicken. Hamburger pastrami strip steak andouille frankfurter. Burgdoggen shank turducken, frankfurter fatback meatball spare ribs t-bone. T-bone pig venison, ribeye spare ribs jerky cupim kielbasa sausage beef meatball. Meatball pastrami jowl, alcatra brisket sirloin tail short loin. Sirloin shoulder beef ribs chuck.</p></div>

        
        
        


        <script>
            
            var mapFjerdingen;

            function initMap() {
                var location1 = {lat: 59.916164, lng: 10.759675};
                var mapFjerdingen = new google.maps.Map(document.getElementById("mapFjerdingen"), {
                    zoom: 14,
                    center: location1
                });

                var marker1 = new google.maps.Marker({
                    position: location1,
                    map: mapFjerdingen
                });
                
                var location2 = {lat: 59.923339, lng: 10.752497};
                var mapVulkan = new google.maps.Map(document.getElementById("mapVulkan"), {
                    zoom: 14,
                    center: location2
                });

                var marker2 = new google.maps.Marker({
                    position: location2,
                    map: mapVulkan
                });
                
            
                var location3 = {lat: 59.920414, lng: 10.752696};
                var mapBrenneriveien = new google.maps.Map(document.getElementById("mapBrenneriveien"), {
                    zoom: 14,
                    center: location3
                });

                var marker3 = new google.maps.Marker({
                    position: location3,
                    map: mapBrenneriveien
                });
                
            }
            


            
            
            
        </script>

        <script async defer src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDbzIJIgHVAYw4oXACRP_XCt3Mnj_3T0dI&callback=initMap"></script>  
        
        <script>
            
var marginY = 0;
var destination = 0;
var speed = 10;
var scroller = null;

function initScroll(elementId){
	destination = document.getElementById(elementId).offsetTop;
	
	scroller = setTimeout(function(){
		initScroll(elementId);
	}, 1);

	marginY = marginY + speed;

	if(marginY >= destination){
		clearTimeout(scroller);
	}	

	window.scroll(0, marginY);

	//console.log(destination);
}

window.onscroll = function(){
	marginY = this.pageYOffset;	
};

function toTop(){
	scroller = setTimeout(function(){
		toTop();
	}, 1);

	marginY = marginY - speed;

	if(marginY <= 0){
		clearTimeout(scroller);
	}	

	window.scroll(0, marginY);
}

            
            
               
       
        </script>



    </body>
</html>



