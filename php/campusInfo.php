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
        require 'search.php';
        require 'tip-box.php';
        require 'go-to-top.php';
        ?>
        


        <nav></nav>
        <div class = "photo sectOne"></div>
        <div class = "text"><h1>Fjerdingen</h1><p>Bacon ipsum dolor amet spare ribs leberkas corned beef brisket tri-tip tail, kielbasa turkey jowl biltong salami filet mignon chicken. Leberkas shoulder short ribs ham, short loin frankfurter turkey landjaeger venison porchetta tri-HDHHDHDHDHDHDHD frankfurter. Burgdoggen shank turducken, frankfurter fatback meaDDDDDDDDball spare ribs t-bone. T-bone pig venison, ribeye spare ribs jerky cupim kielbasa sausage beef meatball. Meatball pastrami jowl, alcatra brisket sirloin tail short loin. Sirloin shoulder beef ribs chuck.</p><div class = "mapBox"></div><div id = "mapFjerdingen"></div></div>
        <div class = "photo sectTwo"></div>
        <div class = "text"><h1>Vulkan</h1><p>Bacon ipsum dolor amet spare ribs leberkas corned beef brisket tri-tip tail, kielbasa turkey jowl biltong salami filet mignon chicken. Leberkas shoulder short ribs ham, short loin frankfurter turkey landjaeger venison porchetta tri-tip hamburger biltong chicken. Hamburger pastrami strip steak andouille frankfurter. Burgdoggen shank turducken, frankfurter fatback meatball spare ribs t-bone. T-bone pig venison, ribeye spare ribs jerky cupim kielbasa sausage beef meatball. Meatball pastrami jowl, alcatra brisket sirloin tail short loin. Sirloin shoulder beef ribs chuck.</p><div id = "mapVulkan"></div></div>
        <div class = "photo sectThree"></div>
        <div class = "text"><h1>Brenneriveien</h1><p>Bacon ipsum dolor amet spare ribs leberkas corned beef brisket tri-tip tail, kielbasa turkey jowl biltong salami filet mignon chicken. Leberkas shoulder short ribs ham, short loin frankfurter turkey landjaeger venison porchetta tri-tip hamburger biltong chicken. Hamburger pastrami strip steak andouille frankfurter. Burgdoggen shank turducken, frankfurter fatback meatball spare ribs t-bone. T-bone pig venison, ribeye spare ribs jerky cupim kielbasa sausage beef meatball. Meatball pastrami jowl, alcatra brisket sirloin tail short loin. Sirloin shoulder beef ribs chuck.</p></div>

        <script>
            function initMap() {
                var location = {lat: 59.923339, lng: 10.752497};
                var mapVulkan = new google.maps.Map(document.getElementById("mapVulkan"), {
                    zoom: 4,
                    center: location
                });

                var marker = new google.maps.Marker({
                    position: location,
                    map: mapVulkan
                });
            }
        </script>

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdx92j0Ia-avzUehUghzLVIjeig8w8neE&callback=initMap"></script>


        <script>
            function initMap() {
                var location = {lat: 59.916164, lng: 10.759675};
                var mapFjerdingen = new google.maps.Map(document.getElementById("mapFjerdingen"), {
                    zoom: 4,
                    center: location
                });

                var marker = new google.maps.Marker({
                    position: location,
                    map: mapFjerdingen
                });
            }
        </script>

        <script async defer src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDbzIJIgHVAYw4oXACRP_XCt3Mnj_3T0dI&callback=initMap"></script>


    </body>
</html>



