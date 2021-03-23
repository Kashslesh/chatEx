<?php 

try {
    $db = new PDO("mysql:host=localhost;dbname=chat", 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo  'JE SUIS CONNECTE';
} catch (PDOException $e) {
    echo 'Erreur :'. $e->getMessage();
}

?>