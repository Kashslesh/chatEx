<?php 
require 'fonction.php';
$error = null;
// connexion à chat
if(isset($_POST["verlog"]) && isset($_POST["logpass"])){
    $array_user = read ($_POST["verlog"]);
    if (password_verify(($_POST["logpass"]), $array_user["mdp"])){

        $_SESSION["admin"]= $_POST["verlog"];
        header('LOCATION: ../views/chat.php');
     }else{
        $error = "Mot de passe ou identifiant invalident";
     }

}

?>