<?php 
// require 'fonction.php';
if(isset($_POST["textchat"])){
    
  
  $mess_envoyer = htmlspecialchars($_POST["textchat"], ENT_QUOTES);
  insert_msg($mess_envoyer);
  // $user_online = read($_SESSION["admin"]);
      
    }


?>