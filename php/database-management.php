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
            $table = 'event';
        }

        ?>

        <!--CHANGE DEPENDING ON CHOSEN TABLEs-->

        <div class="database-management-container">
            <div class="info-top-container">
                <select name="table" class="search-criteria table-search">
                    <option selected disabled hidden>VELG TABELL</option>
                    <option value="events">Arrangementer</option>
                    <option value="category">Kategori</option>
                    <option value="tip">Tips</option>
                    <option value="users">Brukere</option>
                </select>
                <div class="table-name">
                    <?php $tbl = strtoupper($table);
                    echo $tbl?>
                </div>

            </div>
            <!--One header for each table? -->
            <!--   <div class="table-info-container">
<div class="table-info-column">event_id</div>
<div class="table-info-column">title</div>
<div class="table-info-column">start_time</div>
<div class="table-info-column">event_date</div>
<div class="table-info-column">description</div>
<div class="table-info-column">price</div>
<div class="table-info-column">event_link</div>
<div class="table-info-column">image_path</div>
<div class="table-info-column">age_limit</div>
<div class="table-info-column">category_id</div>
<div class="table-info-column">Latitude</div>
<div class="table-info-column">Longitude</div>

</div>-->

            <div class="table-info"></div>
            <table>
                <?php
                    $statement = $connection -> prepare("SELECT * FROM '$table'");
                    $statement -> execute();
                    while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr><td>"$row['event_id']"</td>
                        <td>"$row['title']"</td>
                        <td>""</td>
                        <td>""</td>
                        <td>""</td>
                        <tr> "

                    }?>

            </table>

            <table>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th> 
                    <th>Age</th>
                </tr>
                <tr>
                    <td>Jill</td>
                    <td>Smith</td> 
                    <td>50</td>
                </tr>
                <tr>
                    <td>Eve</td>
                    <td>Jackson</td> 
                    <td>94</td>
                </tr>
            </table>
        </div>
    </body>
</html>