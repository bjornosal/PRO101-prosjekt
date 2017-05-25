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
                $statement = $connection -> prepare('SELECT * FROM results JOIN category AS ca ON results.category_id = ca.category_id');

                $statement -> execute();

                while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
                    $events[] = $row;
                    $events_id[] = $row["event_id"];
                    $lat[] = $row["Latitude"];
                    $lon[] = $row["Longitude"];

                    $json_id = json_encode($events_id);
                    $json_lat = json_encode($lat);
                    $json_lon = json_encode($lon);
                }
                ?>


                <?php 

                //Checks whether or not any events are stored in session
                if($_SESSION["no-events"] == true) {?>
                <div class="no-event">
                    <strong class="no-event-text two-lines">Ingen arrangementer funnet med valgte kriterier. <br>Alle arrangementer vises.</strong>
                </div>
                <?php
                    $_SESSION["no-events"] = false;
                } else if( $_SESSION["lack-criteria"] == true) {?>
                <div class="no-event">
                    <strong class="no-event-text one-line">Husk å fylle ut alle kriteriene.</strong>
                </div>
                <?php
                    session_unset();
                }
                ?>

                <?php foreach($events as $event) { ?>

                <?php require 'countdown.php'?>

                <!--Start event showcase-->
                <div class="event-inner-container">
                    <div class="event-photo-container">
                        <!--Checks if there is an image present, if not, it will use one of the default images.-->
                        <?php if($event['image_path'] != null) { ?>
                        <img class="event-photo" src="<?= $event['image_path']?>" alt="Bilde fra arrangement">
                        <?php } else {?>
                        <img class="event-photo event-photo-default" src="../photos/icons/default-icons/<?php echo $event['name']?>-default.png" alt="Bilde fra arrangement">

                        <?php } ?>
                    </div>
                    <div id="ev-map-<?php echo $event['event_id']?>" class="event-map-container"></div>
                    <div class="event-description-container">
                        <h3 class="event-description-title"><?= $event['title'] ?></h3>    
                        <p class="event-description-text"><?= $event['description'] ?></p>

                    </div>
                    <div class="event-social-container">

                        <div class="event-category">
                            <p><strong><?= $event['name']?></strong></p>                        
                        </div>
                        <div class="countdown-timer">
                            <p><strong>
                                <!--Prints out time until event according to the date-->
                                <?php if($days > 0) { ?>
                                Om <?= $days ?> 
                                dager
                                <?php } elseif($days == 0) {?>
                                I dag.
                                <?php } else {?>
                                Allerede vært.

                                <?php } ?>
                                </strong></p>
                        </div>
                        <a href="<?= $event['event_link']?>" target="_blank">
                            <div class="event-btn">
                                <img class="event-btn-img" src="../photos/icons/link-icon.png">
                                <p><strong>NETTSIDE</strong></p>

                            </div>
                        </a>  
                    </div>
                </div>
                <!--End event showcase-->
                <?php } ?>

            </div>
        </div>

        <script>
            var idArray = <?php echo $json_id; ?>;
            var lat = <?php echo $json_lat; ?>;
            var lon = <?php echo $json_lon; ?>;

            function initMap() {

                for(i = 0; i < idArray.length; i++) {

                    var latitude = parseFloat(lat[i]);
                    var longitude = parseFloat(lon[i]);
                    var uluru = {lat: latitude, lng: longitude};
                    var map = new google.maps.Map(document.getElementById('ev-map-'+idArray[i]), {
                        zoom: 14,
                        center: uluru
                    });
                    var marker = new google.maps.Marker({
                        position: uluru,
                        map: map
                    });
                }
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRfr51h9jrxDI5yfrgQlqNMT6ySvGV6ek&callback=initMap">
        </script>
    </body>
</html>
