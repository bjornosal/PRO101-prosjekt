<div class="database-management-container">
    <div class="info-top-container">
        <div class="table-name">ARRANGEMENTER</div>
    </div>
    <a href="login.php"><div class="logout-btn">LOGG UT</div></a>
    <div class="table-info-container">
        <div class="table-info-column table-event_id">EVENT_ID</div>
        <div class="table-info-column table-title">TITLE</div>
    </div>
    <?php 
    /** 
    * Loops through events and displays the event id and event title together with a delete button
    */
    foreach($events as $event) {?>
    <div class="table-info-container">
        <div class="table-info-column table-event_id"><?php echo $event["event_id"]?></div>
        <div class="table-info-column table-title"><?php echo $event['title']?></div>

        <form method="POST" action="" onsubmit="setTimeout(function () { window.location.reload(); }, 10)">
            <input type="submit" value="Slett" name="delete_event" class="delete_event">
            <input type="hidden" name="del_id" value="<?php echo $event["event_id"]?>"/> 
        </form>

    </div>
    <?php }
    /**
    * Deletes the corresponding event if button is clicked.
    */
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
    <?php
    /**
    * Loops through all tips to display them  with tip id, and event link
    */
    foreach($tips as $tip) {?>
    <div class="table-info-container">
        <div class="table-info-column table-event_id"><?php echo $tip["tip_id"]?></div>
        <div class="table-info-column table-title"><?php echo $tip['event_link']?></div>
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