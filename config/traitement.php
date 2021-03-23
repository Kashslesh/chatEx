<?php 
 require 'fonction.php';
if(isset($_POST['psuedo']) && isset($_POST['textchat'])){
    $psuedo = htmlspecialchars($_POST['psuedo']);
    $mesg = htmlspecialchars($_POST['textchat']);
    
    send_message($psuedo, $mesg);

    header("Location: ../index.php");
}
//  affichage();
 $allMessage = affichage();

echo json_encode($allMessage);

?>