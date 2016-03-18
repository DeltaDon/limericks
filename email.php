<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$to = "don@uscca.com";
$subject = "PHP Email Test";
$txt = "Hello world!";
$headers = "From: tim@uscca.com";
mail($to,$subject,$txt,$headers);
?>