<?php
ob_start();
session_start();

date_default_timezone_set("Europe/London");

try{
    $conn = new PDO("mysql:dbname=streamsite_db;host=localhost", "root", "root");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch(PDOException $e){
    exit("Ошибка при плодключении: " . $e->getMessage());
}

?>