<<<<<<< HEAD
<?php/* //DataBaseConnector.php
require ('../config/config.php');
=======
<?php /* //DataBaseConnector.php
require ('../includes/config.php');
>>>>>>> 53bbe01b1b97c66cfbbe85a6c12b2cdf05da8bb5
try{
    $conn = new PDO("mysql:dbname=$dbName;host=$dbServername",$dbUsername,$dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch (PDOException $exception){
    die('er is een fout opgetreden bij het verbinden met de database.php, hier heb je hem'. $exception->getMessage());
}
*/