

<!DOCTYPE html>
<html lang="no">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/style.css" rel="stylesheet" type="text/css">
        <link rel="icon" type="image/png" href="../photos/icons/cal-icon.png">
        <!--Importing AJAX - JQUERY lib-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <title>Wevent</title>

    </head>
    <body>  
        <div class="container">
            <?php
            require 'db-login.php';
            require 'header.php';
            require 'search.php';
            require 'tip-box.php';
            require 'go-to-top.php';
            require 'slideshow.php';
            ?>
        </div>
    </body>
</html>