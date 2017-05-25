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
        <style>
            /*Just to make P's design work, as it is not used on any other page*/
            html, body {
                height: 100%;
            }
        </style>
    </head>

    <body> 

        <?php 
        require 'header.php'; 
        require 'tip-box.php';
        require 'go-to-top.php';
        ?>


        <div class = "photo sectOne">
            <div id = "buttonContainer">
                <div id = "Fjerdingen" class="button">Fjerdingen</div>
                <div id = "Vulkan" class="button">Vulkan</div>
                <div id = "Brenneriveien" class="button">Brenneriveien</div>
            </div>


        </div>
        
            
            <div class = "text1"><h1>Fjerdingen</h1><div id = "mapFjerdingen"></div><p>Fjerdingen er Westerdals ACT sitt nye tilskudd til campus-familien, og stod ferdig til bruk høsten 2016. Navnet stammer fra gaten campusen ligger i, Christian Krohgs gate, som helt tilbake til 1600-tallet het Fjerdingens gate. Nå fylles gaten med studenter fra alle avdelinger: Kommunikasjon, teknologi og kunst. Mangfoldet av studenter helt fra maskedesign til programmering skaper et unikt miljø. Fra torsdag-fredag er det dessuten også mulig å nyte en iskald pils i kantina som forvandles til Sjenkestua på kvelden. Fjerdingen ligger heller ikke langt unna Grünerløkka, Oslos svar på Soho i New York. Det skal ikke mer en enn liten spasertur ut av Fjerdingen for å utforske hva Oslo's hippeste strøk har å by på.</p></div>
        
        <div class = "photo sectTwo"></div>
        
        
     
        <div class = "text2"><h1>Vulkan</h1><div id = "mapVulkan"></div><p>Fem til ti minutter unna Fjerdingen finner du Vulkan, Fjerdingen's storesøster. Her er campusen som tilbyr skuespillerlinje, film, TV og spill. I nærmiljøet rundt Vulkan finner du tilbud både for den matglade og kulturlystne, med Mathallen og konsertlokalet Vulkan Arena som naboer. Det finnes også anlegg for klatring og dans like ved, samt en rekke kafeér og restauranter. Rett utenfor finner du dessuten også Kuba-parken, en populær attraksjon for studentene om sommeren, med Fyrhuset Kuba i midten av parken. </p></div>
        


        <div class = "photo sectThree"></div>


            <div class = "text3"><h1>Brenneriveien</h1><div id = "mapBrenneriveien"></div><p>Brenneriveien er Westerdals sin minste Campus, kun et steinkast unna Vulkan. På Brenneriveien hører studentene fra hår- og maskedesign til, samt enkelte deler av film, TV og spill avdelingen. Her finnes plattformene for de studentene som ønsker å uttrykke seg på en mer kreativ måte; både green-screen, verksted og klipperom er tilgjengelig for studentene. Dersom du skal være interessert i å utforske nærområdet rundt Brenneriveien, er kvelden tiden å utforske på. Det yrer av natteliv med gamle veteraner som Blå, og friske pust som Ingensteds. Om du er nysgjerrig på Oslo's gjemte perler finner du også disse i nærheten, som Bortenfor bak Ingensteds og Taxi Take Away på toppen av Brenneriveien.</p></div>



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

            $("#Fjerdingen").click(function() {
                var top = $('.text1').offset().top
                top -= 150;
                console.log(top);
                $("html, body").animate({
                    scrollTop: top
                }, 1000);
            });

            
            $("#Vulkan").click(function() {
                var top = $('.text2').offset().top
                top -= 150;
                console.log(top);
                $("html, body").animate({
                    scrollTop: top
                }, 2100);
            });

            $("#Brenneriveien").click(function() {
                var top = $('.text3').offset().top
                top -= 150;
                console.log(top);
                $("html, body").animate({
                    scrollTop: top
                }, 3200);
            });
        </script>



    </body>
</html>



