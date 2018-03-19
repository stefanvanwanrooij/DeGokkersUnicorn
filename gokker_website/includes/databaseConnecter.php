<?php //DataBaseConnector.php
require ('../config/config.php');
try{
    $conn = new PDO("mysql:dbname=$dbName;host=$dbServername",$dbUsername,$dbPassword);


}catch (PDOException $exception){
    die('er is een fout opgetreden bij het verbinden met de database.php, hier heb je hem'. $exception->getMessage());
}
