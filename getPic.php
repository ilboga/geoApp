<?php
header('Content-Type: application/json');
include ('conn/configurazione.php');

//print_r($_FILES);
$new_image_name = "namethisimage.jpg";
$destination = $_SERVER['DOCUMENT_ROOT'] . "/geoApp/pics/".$new_image_name;
move_uploaded_file($_FILES["file"]["tmp_name"], $destination);
?>
