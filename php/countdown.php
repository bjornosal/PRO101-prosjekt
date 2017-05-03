<?php
$today = time();
$event_date = $event['event_date'];

$date = strtotime($event_date);
$event_day = date("d", $date);
$event_month = date("m",$date);
$event_year = date("y",$date);

$target = mktime(0,0,0,$event_month, $event_day, $event_year);

$difference = ($target - $today);
$days = (int) ($difference/86400);

?>