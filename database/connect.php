<?php 

$host = 'localhost';
$databas = 'chat';
$name_db = 'root';
$mdp_bd = '';

try {
    $db = new PDO("mysql:host=$host;dbname=$databas", $name_db, $mdp_bd);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo  'JE SUIS CONNECTE';
} catch (PDOException $e) {
    echo 'Erreur :'. $e->getMessage();
}


?>