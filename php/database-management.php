<?php 
session_start();
?>

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

        require 'db-login.php';
        require 'header.php';
        require 'go-to-top.php';

        $statement = $connection -> prepare("SELECT * FROM event");
        $statement -> execute();
        while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
            $events[] = $row;
        }?>
        
        <div class="database-management-container">
            <div class="info-top-container">
                <div class="table-name">ARRANGEMENTER</div>
            </div>
            <a href="login.php"><div class="logout-btn">LOGG UT</div></a>
            <div class="table-info-container">
                <div class="table-info-column table-event_id">EVENT_ID</div>
                <div class="table-info-column table-title">TITLE</div>
            </div>
            <?php foreach($events as $event) {?>
            <div class="table-info-container">
                <div class="table-info-column table-event_id"><?php echo $event["event_id"]?></div>
                <div class="table-info-column table-title"><?php echo $event['title']?></div>
                \
                <form method="POST" action="" onsubmit="setTimeout(function () { window.location.reload(); }, 10)">
                    <input type="submit" value="Slett" name="delete_event" class="delete_event">
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

                <div class="table-name">TIPS</div>
            </div>
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
                    <input type="submit" value="Slett" name="delete_tip" class="delete_tip">
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

        <a href="login.php"><div class="logout-btn">LOGG UT</div></a>

    </body>
</html>