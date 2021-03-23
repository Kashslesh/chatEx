<?php 
function send_message (string $psuedo, string $mesg): bool
{
        require '../database/connect.php';
        // $psuedo = $_POST['psuedo'];
        // $mesg = $_POST['textChat'];
        $sql = 'INSERT INTO chat2 VALUES (NULL, :nom, :mesg)';
        $users = $db->prepare($sql);
        $users->bindValue(":nom", $psuedo, PDO::PARAM_STR);
        $users->bindValue(":mesg", $mesg, PDO::PARAM_STR);
        $response = $users->execute();
        return $response;
        // echo 'Hello world';
}
function affichage (): array 
{
        // echo 'Hello world';
        require '../database/connect.php';
        $sql = 'SELECT * FROM chat2 ORDER BY id ';
        $get_info = $db->prepare($sql);
        $get_info->execute();
        $response = $get_info->fetchAll(PDO::FETCH_ASSOC);
        return $response;
}

?>