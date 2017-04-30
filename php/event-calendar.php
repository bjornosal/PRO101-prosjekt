<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Importing JQuery lib-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <link rel="icon" type="image/png" href="../photos/icons/cal-icon.png">

        <title>Eventfinder</title>

        <link href="../css/style.css" rel="stylesheet" type="text/css">


    </head>
    <body>


        <?php
        require 'db-login.php';
        require 'header.php';
        require 'search.php';
        require 'tip-box.php';
        require 'go-to-top.php';
        ?>

        <div class="event-container">
            <div class="event-background">

                <?php 
                $statement = $connection -> prepare('SELECT * FROM event');

                $statement -> execute();

                while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
                    $events[] = $row;
                }
                ?>

                <?php foreach($events as $event) { ?>
                <!--Start event showcase-->
                <div class="event-inner-container">
                    <div class="event-photo-container">
                        <img class="event-photo" src="<?= $event['image_path']?>" alt="Bilde fra arrangement">
                    </div>
                    <div id="ev1-map" class="event-map-container"></div>
                    <div class="event-description-container">
                        <h3 class="event-description-title"><?= $event['title'] ?></h3>    
                        <p class="event-description-text"><?= $event['description'] ?></p>

                    </div>
                    <div class="event-social-container">
                        <a href="#">
                            <div class="copy-event-btn">
                                <img class="event-btn-img" src="../photos/icons/copy-icon-black.png">
                                <p><strong>KOPIER LENKE</strong></p>
                            </div>
                            <a href="#">
                                <div class="ticket-event-btn">
                                    <img class="event-btn-img" src="../photos/icons/ticket-icon-black.png">
                                    <p><strong>BILLETTER</strong></p>

                                </div>
                            </a>
                        </a>
                    </div>
                </div>
                <!--End event showcase-->
                <?php } ?>

            </div>
        </div>

        <!--Script needs major changes to support being different for each event from DB-->
        <script>
            function initMap() {
                var uluru = {lat: 59.916379, lng: 10.761465};
                var map = new google.maps.Map(document.getElementById('ev1-map'), {
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
