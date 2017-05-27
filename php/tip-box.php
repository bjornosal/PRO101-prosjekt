<div class="tip-container">
    <div class="tip-bar">TIPS OSS OM ET ARRANGEMENT!</div>
    <form method="post" id="tip-form">
        <br>
        Event-navn:<br>
        <input class="form-input" type="text" name="event-name">
        <br><br>
        Event-lenke:<br>
        <input class="form-input" type="text" name="hyperlink">
        <br><br>

        Beskrivelse: <br>
        <textarea class="form-desc" name="description" form="tip-form"></textarea>

        <br><br>
        <input class="form-button" type="submit" name="submit" value="Send">
    </form>
</div>

<?php
/**
* Posts the info submitted by the user into the tip database
*/
$event_name = $_POST['event-name'];
$event_link = $_POST['hyperlink'];
$event_desc = $_POST['description'];

if(isset($_POST['submit'])) {
    $statement = $connection -> prepare("INSERT INTO tips (event_name, event_link, event_description) VALUES('$event_name', '$event_link', '$event_desc')");

    $statement -> execute();
}
?>