<div class="search-container">

    <div class="search-info-container">
        <h3 class="search-info-header">SØK ETTER ARRANGEMENTER</h3>

        <div class="search-box">

            <form method="post" action="event-calendar.php" class="search-form">
                <select name="category" class="search-criteria" id="category">
                    <option selected disabled hidden>KATEGORI</option>
                    <option value="1">MAT</option>
                    <option value="2">KULTUR</option>
                    <option value="3">UTELIV</option>
                    <option value="4">SPORT</option>
                    <option value="5">TEKNOLOGI</option>
                </select>

                <select name="from-month" class="search-criteria">
                    <option selected disabled hidden>FRA MÅNED</option>
                    <option value="01">JANUAR</option>
                    <option value="02">FEBRUAR</option>
                    <option value="03">MARS</option>
                    <option value="04">APRIL</option>
                    <option value="05">MAI</option>
                    <option value="06">JUNI</option>
                    <option value="07">JULI</option>
                    <option value="08">AUGUST</option>
                    <option value="09">SEPTEMBER</option>
                    <option value="10">OKTOBER</option>
                    <option value="11">NOVEMBER</option>
                    <option value="12">DESEMBER</option>
                </select>

                <select name="to-month" class="search-criteria">
                    <option selected disabled hidden>TIL MÅNED</option>
                    <option value="01">JANUAR</option>
                    <option value="02">FEBRUAR</option>
                    <option value="03">MARS</option>
                    <option value="04">APRIL</option>
                    <option value="05">MAI</option>
                    <option value="06">JUNI</option>
                    <option value="07">JULI</option>
                    <option value="08">AUGUST</option>
                    <option value="09">SEPTEMBER</option>
                    <option value="10">OKTOBER</option>
                    <option value="11">NOVEMBER</option>
                    <option value="12">DESEMBER</option>
                </select>
                <!--<a href="#"><div class="search-button">SØK</div></a>-->
                <input type="submit" value="SØK" name="search" class="search-button">
            </form>
        </div>
    </div>
</div>

<?php 
$cat = $_POST["category"];
$from_mon = $_POST["from-month"];
$to_mon = $_POST["to-month"];
session_start();

//Checks if button is being pressed and that category is set. 
if(isset($_POST['search']) && $cat != 0 && $from_mon != 0 && $to_mon != 0)
{
    $_SESSION["searched"] = true;
    
    //Clears table    
    $statement = $connection -> prepare("DELETE FROM results");
    $statement -> execute();

    $statement = $connection -> prepare("SELECT * FROM event WHERE category_id = '$cat' AND event_date BETWEEN '2017-$from_mon-01' AND '2017-$to_mon-31'");
    $statement -> execute;

    //Inserts all information to results table
    $statement = $connection -> prepare("INSERT INTO results SELECT * FROM event WHERE category_id = '$cat' AND event_date BETWEEN '2017-$from_mon-01' AND '2017-$to_mon-31'");
    $statement -> execute();

    $res = $connection->query('SELECT COUNT(*) FROM results');
    $num_rows = $res->fetchColumn();

    //If no events are found, sets no-events to true and prints out all events
    if($num_rows == 0) {
        $_SESSION["no-events"] = true;

        //Clears table    
        $statement = $connection -> prepare("DELETE FROM results");
        $statement -> execute();

        //Puts all events in the results table so some information will be shown.
        $statement = $connection -> prepare("INSERT INTO results SELECT * FROM event");
        $statement -> execute();
    } 
} else if(($_POST['search']) && ($cat == 0 || $from_mon == 0 || $to_mon == 0)){    
    $_SESSION["lack-criteria"] = true;

    //Clears table    
    $statement = $connection -> prepare("DELETE FROM results");
    $statement -> execute();

    //Puts all events in the results table so some information will be shown.
    $statement = $connection -> prepare("INSERT INTO results SELECT * FROM event");
    $statement -> execute();
} else {    
    $_SESSION["no-events"] = false;

    //Clears table    
    $statement = $connection -> prepare("DELETE FROM results");
    $statement -> execute();

    //Puts all events in the results table so some information will be shown.
    $statement = $connection -> prepare("INSERT INTO results SELECT * FROM event");
    $statement -> execute();
}
?>