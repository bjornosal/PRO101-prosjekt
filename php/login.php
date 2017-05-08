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
        <div class="login-container" id="lg" style="display:block">
            <div class="login-container-header">
                <h2>LOGG PÅ</h2>
            </div>


            <form method="POST" class="login-form">
                <div class="login-label"><b>BRUKERNAVN</b></div>
                <input class="login-input"type="text" name="username" placeholder="Skriv inn brukernavn">
                <div class="login-label"><b>PASSORD</b></div>
                <input class="login-input" type="password" name="password" placeholder="Skriv inn passord">
                <input class="login-button" type="button" name="submit" value="LOGG PÅ" onclick="logOn()">
            </form>
        </div>

        <?php

        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(isset($_POST['submit'])) {
            $statement = $connection -> prepare("SELECT * FROM users WHERE username ='$username' AND password ='$password'");
            $statement -> execute();
            if ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
                $_SESSION['user_id'] = $row['user_id'];
            }
        } 
        
        if($_SESSION['user_id'] == 1 || $_SESSION['user_id'] == 2) {
            include 'database-management.php';
        } else {
            include 'info-error.php';
        }

        ?>
        
        
        <script>
            function logOn() {
                document.getElementById("lg").style.display="none";
            }
        
        </script>
    </body>
</html>