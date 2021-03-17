<?php 


require 'fonction.php';
if (isset($_POST['psuedo']) && isset($_POST['mdp']) && isset($_POST['cofirm'])) {
    
  // récupération et hashage du mot de passe
    $login =htmlspecialchars($_POST['psuedo']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $confirm =htmlspecialchars( $_POST['cofirm']);
    if(mb_strlen($login) <=3 || mb_strlen($login) > 90  ){
      $error= "Psuedo est tres court ";
      exit();
    }else if(mb_strlen($mdp) <= 3 || mb_strlen($mdp) >6 ){
      $error= "mdp est court";  
      exit();
    }else if ($mdp != $confirm){
      $error= "mdp et confirmation ont pas indentique";
      exit();
    }else {
      $encryptedPass = password_hash($mdp, PASSWORD_BCRYPT);
      sing_in($login, $encryptedPass);
      header('Location: ../index.php');
    }
    
    
    
    
  }
  
?>