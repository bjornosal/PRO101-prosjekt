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
                    <option value="januar">JANUAR</option>
                    <option value="februar">FEBRUAR</option>
                    <option value="mars">MARS</option>
                    <option value="april">APRIL</option>
                    <option value="mai">MAI</option>
                    <option value="juni">JUNI</option>
                    <option value="juli">JULI</option>
                    <option value="august">AUGUST</option>
                    <option value="september">SEPTEMBER</option>
                    <option value="oktober">OKTOBER</option>
                    <option value="november">NOVEMBER</option>
                    <option value="desember">DESEMBER</option>
                </select>

                <select name="to-month" class="search-criteria">
                    <option selected disabled hidden>FRA MÅNED</option>
                    <option value="januar">JANUAR</option>
                    <option value="februar">FEBRUAR</option>
                    <option value="mars">MARS</option>
                    <option value="april">APRIL</option>
                    <option value="mai">MAI</option>
                    <option value="juni">JUNI</option>
                    <option value="juli">JULI</option>
                    <option value="august">AUGUST</option>
                    <option value="september">SEPTEMBER</option>
                    <option value="oktober">OKTOBER</option>
                    <option value="november">NOVEMBER</option>
                    <option value="desember">DESEMBER</option>
                </select>
                <!--<a href="#"><div class="search-button">SØK</div></a>-->
                <input type="submit" value="SØK" name="search" class="search-button">
            </form>
        </div>
    </div>
</div>

<?php 
if(isset($_POST['search']))
{
    $cat = $_POST["category"];
    //Clears table    
    $statement = $connection -> prepare("DELETE FROM results");
    $statement -> execute();

    $statement = $connection -> prepare("INSERT INTO results SELECT * FROM event WHERE category_id = '$cat'");
    $statement -> execute();
} else {
    echoTest();
}
?>

<?php 

function echoTest() {
    echo "########################KNAPP IKKE TRYKKET PÅ###########################";
}
?>