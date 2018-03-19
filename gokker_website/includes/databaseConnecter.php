<?php /* //DataBaseConnector.php
require ('../includes/config.php');
try{
    $conn = new PDO("mysql:dbname=$dbName;host=$dbServername",$dbUsername,$dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch (PDOException $exception){
    die('er is een fout opgetreden bij het verbinden met de database.php, hier heb je hem'. $exception->getMessage());
}
