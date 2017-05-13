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
        session_destroy();

        require 'db-login.php';
        require 'header.php';
        require 'go-to-top.php';
        include 'session.php';

        $table = $_POST['table'];
        if($table == 0) {
            $table = "event";
        }

        if($table == "event") {
            $statement = $connection -> prepare("SELECT * FROM event");


        } else if($table == "tips") {
            $statement = $connection -> prepare("SELECT * FROM tips");

        } 
        else if($table == "category") {
            $statement = $connection -> prepare("SELECT * FROM category");
        } 

        $statement -> execute();
        while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
            $events[] = $row;
        }
        ?>

        <!--CHANGE DEPENDING ON CHOSEN TABLEs-->

        <div class="database-management-container">
            <div class="info-top-container">

                <!--Needed if multiple tables in one location with dropdown is what we will go for.-->
                <?php/*     <form>
                    <select name="table" class="search-criteria table-search">
                        <option selected disabled hidden>VELG TABELL</option>
                        <option value="event">Arrangementer</option>
                        <option value="category">Kategorier</option>
                        <option value="tips">Tips</option>
                    </select>
                    <input type="submit" value="SØK" class="search-criteria table-search">
                </form>*/?>
                <div class="table-name">
                    ARRANGEMENTER
                    <?php/* $tbl = strtoupper($table);
                    echo $tbl*/?>
                </div>

            </div>
            <!--One header for each table? -->
            <div class="table-info-container">
                <div class="table-info-column table-event_id">EVENT_ID</div>
                <div class="table-info-column table-title">TITLE</div>
            </div>
            <?php foreach($events as $event) {?>
            <div class="table-info-container">
                <div class="table-info-column table-event_id"><?php echo $event["event_id"]?></div>
                <div class="table-info-column table-title"><?php echo $event['title']?></div>
                <!--Solution required for updating the page on deletion that updates when the post has happened.-->
                <form method="POST" action="" onsubmit="setTimeout(function () { window.location.reload(); }, 10)">
                    <input type="submit" value="X" name="delete_event">
                    <input type="hidden" name="del_id" value="<?php echo $event["event_id"]?>"/> 
                </form>

            </div>
            <?php }
            if(isset($_POST['delete_event'])){
                $id = $_POST['del_id'];
                $statement = $connection -> prepare("DELETE FROM event WHERE event_id=$id");
                $statement -> execute();

            }
            ?>


        </div>

        <div class="database-management-container">
            <div class="info-top-container">
                <?php 
                $statement = $connection -> prepare("SELECT * FROM tips");
                $statement -> execute();

                while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
                    $tips[] = $row;
                }?>

                <!--Needed if multiple tables in one location with dropdown is what we will go for.-->
                <?php/*     <form>
                    <select name="table" class="search-criteria table-search">
                        <option selected disabled hidden>VELG TABELL</option>
                        <option value="event">Arrangementer</option>
                        <option value="category">Kategorier</option>
                        <option value="tips">Tips</option>
                    </select>
                    <input type="submit" value="SØK" class="search-criteria table-search">
                </form>*/?>
                <div class="table-name">
                    TIPS
                </div>
            </div>
            <!--One header for each table? -->
            <div class="table-info-container">
                <div class="table-info-column table-event_id">tip_id</div>
                <div class="table-info-column table-title">event_link</div>
            </div>
            <?php foreach($tips as $tip) {?>
            <div class="table-info-container">
                <div class="table-info-column table-event_id"><?php echo $tip["tip_id"]?></div>
                <div class="table-info-column table-title"><?php echo $tip['event_link']?></div>
                <!--Solution required for updating the page on deletion that updates when the post has happened.-->
                <form method="POST" action="" onsubmit="setTimeout(function () { window.location.reload(); }, 10)">
                    <input type="submit" value="X" name="delete_tip">
                    <input type="hidden" name="del_id" value="<?php echo $tip["tip_id"]?>"/> 
                </form>

            </div>
            <?php }
            if(isset($_POST['delete_tip'])){
                $id = $_POST['del_id'];
                $statement = $connection -> prepare("DELETE FROM tips WHERE tip_id=$id");
                $statement -> execute();

            }
            ?>

        </div>
    </body>
</html>