<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Importing JQuery lib-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <link rel="icon" type="image/png" href="../photos/icons/cal-icon.png">

        <title>Pålogging ADMIN</title>

        <link href="../css/style.css" rel="stylesheet" type="text/css">


    </head>
    <body>
        <?php
        require 'db-login.php';
        require 'header.php';
        require 'go-to-top.php';
        ?>
        <div class="login-container">
            <div class="login-container-header">
                <br><h2>PÅLOGGING FEILET</h2>
            </div>
            
            <a href="login.php">
                <div class="return-login-btn"></div>
            </a>
        </div>
    </body>
</html>