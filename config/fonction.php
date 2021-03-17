<?php 
// fonction de creation d'une  sessione  
if (!function_exists("is_connected")) {
        function is_connected(): bool
        {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            return !empty($_SESSION['admin']);
        }
    }

// fonction de connexion à bdd
if(!function_exists("sing_in")){
function sing_in (string $login, string $mdp): bool
{
        require './database/connect.php';
        // $psuedo = $_POST['psuedo'];
        // $mesg = $_POST['textChat'];
        $sql = 'INSERT INTO users VALUES (NULL, :psuedo, :mdp)';
        $users = $db->prepare($sql);
        $users->bindValue(":psuedo", $login, PDO::PARAM_STR);
        $users->bindValue(":mdp", $mdp, PDO::PARAM_STR);
        $response = $users->execute();
        return $response;
}

}
// fonction  de selection d'un nom utilisater 
if(!function_exists("read")){

function read (string $verlog): array {
        require './database/connect.php';
        $sql = 'SELECT * FROM users WHERE psuedo = :psuedo';
        $get_info = $db->prepare($sql);
        $get_info->bindValue(':psuedo', $verlog, PDO::PARAM_STR);
        // $get_info->bindValue(":mdp", $logpass, PDO::PARAM_STR);
        $get_info->execute();
        $response = $get_info->fetch(PDO::FETCH_ASSOC);
        return $response;
}
}
// création d'insertion de bdd
if(!function_exists("insert_msg")){
    function insert_msg($mess_envoyer)
    {
        require './database/connect.php';
        $sql='INSERT INTO messages VALUES (NULL, :mesg)';
        // try {
        //     $db->exec($sql);
        //     echo "sdqsdq";
        // }catch(PDOException $e) {
        //     echo "Erreur : " . $e->getMessage();

        // }
        $new_msg=$db->prepare($sql);
        $new_msg->bindvalue(":mesg", $mess_envoyer, PDO::PARAM_STR);
        $new_msg->execute();
    }
}

?>