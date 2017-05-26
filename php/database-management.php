<!DOCTYPE html>
<html lang="nb">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Importing JQuery lib-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <link rel="icon" type="image/png" href="../photos/icons/cal-icon.png">

        <title>Databasehåndtering</title>

        <link href="../css/style.css" rel="stylesheet" type="text/css">


    </head>
    <body>

        <?php 
        session_start();
        require 'db-login.php';
        require 'header.php';
        require 'go-to-top.php';

        $statement = $connection -> prepare("SELECT * FROM event");
        $statement -> execute();
        while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
            $events[] = $row;
        }
        
        if($_SESSION['user_id'] == null) {
            ?>
        <script>
        window.location = "login.php";
        </script>
        <?php
        } else {
            require 'show-database.php';
        }
        ?>


        <a href="login.php"><div class="logout-btn">LOGG UT</div></a>
    </body>
</html>