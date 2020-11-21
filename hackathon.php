<?php

error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');


$get = file_get_contents('https://www.hackerearth.com/challenges/?filters=competitive%2Chackathon');
preg_match_all("<a class=\"challenge-card-wrapper challenge-card-link\" target=\"_blank\" href=\"(.*)\">", $get, $matches1);
echo "<b>LINKS OF HACKATHON</b>";
echo "<pre>";
print_r($matches1[1]);
echo "</pre>";
preg_match_all("<div class=\"challenge-name ellipsis dark\" title=\"(.*)\">", $get, $matches1);
echo "<b>Name OF HACKATHON</b>";
echo "<pre>";
print_r($matches1[1]);
echo "</pre>";

?>
