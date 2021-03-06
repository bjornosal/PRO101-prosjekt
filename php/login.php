<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Importing JQuery lib-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <link rel="icon" type="image/png" href="../photos/icons/cal-icon.png">

        <title>Database Pålogging</title>

        <link href="../css/style.css" rel="stylesheet" type="text/css">


    </head>
    <body>
        <?php
        session_start();
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        unset($_SESSION['user_id']);

        require 'db-login.php';
        require 'header.php';
        require 'go-to-top.php';
        include 'session.php';

        $username = $_POST['username'];
        $password = $_POST['password'];
        $message = "";
        /** Checks if username and password is filled in when submit button is pressed and does a search through the database 
        * for a user with the corresponding information. If correct info is found, will redirect to database management page. if not,
        * it will show an error depending on what the issue was.*
        */
        if (isset($_POST['submit']) && !empty($_POST['username']) 
            && !empty($_POST['password'])) {
            $statement = $connection -> prepare("SELECT * FROM users WHERE username ='$username' AND password ='$password'");
            $statement -> execute();
            if ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
                $_SESSION['user_id'] = $row['user_id'];
            }
            if($_SESSION['user_id'] != null) {
                $message = "LOGGER PÅ...";
        ?>
        <script>
            window.location.href="http://tek.westerdals.no/~salbjo16/PRO101/php/database-management.php";
        </script>
        <?php
            } else {
                $message = "FEIL PÅLOGGINGSINFO";
            }
        } else if(isset($_POST['submit']) && empty($_POST['username']) 
                  && empty($_POST['password'])) {
            $message = "MANGLER INFO";
        }

        ?>

        <div class="login-container">
            <div class="login-container-header">
                <h2>LOGG PÅ</h2>
            </div>


            <form method="POST" class="login-form" action="#">
                <div class="login-label"><b>BRUKERNAVN</b></div>
                <input class="login-input" type="text" name="username" placeholder="Skriv inn brukernavn">
                <div class="login-label"><b>PASSORD</b></div>
                <input class="login-input" type="password" name="password" placeholder="Skriv inn passord">
                <input class="login-button" type="submit" name="submit" value="LOGG PÅ">
            </form>

            <div class="login-message">
                <p><?php
                    echo $message;
                    ?>
                </p>
            </div>

        </div>
    </body>
</html>