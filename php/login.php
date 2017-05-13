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


        session_start();

        require 'db-login.php';
        require 'header.php';
        require 'go-to-top.php';
        include 'session.php';
 
        $username = $_POST['username'];
        $password = $_POST['password'];
        $message = "";
        
        if (isset($_POST['submit']) && !empty($_POST['username']) 
            && !empty($_POST['password'])) {
            $statement = $connection -> prepare("SELECT * FROM users WHERE username ='$username' AND password ='$password'");
            $statement -> execute();
            if ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
                $_SESSION['user_id'] = $row['user_id'];
            }
        } 

        if($_SESSION['user_id'] != null) {
            $message = "LOGGER PÅ..."
        ?>

        <script>   
            //window.location.href = "database-management.php";
        </script>
        <?php
        } else {
            $message = "FEIL PÅLOGGINGSINFO";

        }
        ?>

        <div class="login-container">
            <div class="login-container-header">
                <h2>LOGG PÅ</h2>
            </div>


            <form method="POST" class="login-form" action="">
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



        <script>
            var user = <?php echo json_encode($username);?>;
            var msg = <?php echo json_encode($message);?>;
            var uid = <?php echo json_encode($_SESSION['user_id']);?>;
            console.log(uid);
            console.log(msg);
            console.log(user);

        </script>
    </body>
</html>