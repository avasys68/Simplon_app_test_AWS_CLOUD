<?php
/*$serverName = "localhost"; 
$DBUsername = "root";
$DBPassword = "";
$DBName = "simplon";*/

$serverName = "localhost"; 
$DBUsername = "id21314024_root";
$DBPassword = "Bonjour123@";
$DBName = "id21314024_testaws";

try {
    $connex = new PDO("mysql:host=$serverName;dbname=$DBName", $DBUsername, $DBPassword);
    $connex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "la connexion a echoué:" . $e->getMessage();
}
?>