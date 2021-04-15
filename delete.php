<?php 
    require_once "db.php";
    $id = $_POST['id'];
    $sql = "DELETE FROM utilisateurs WHERE id=$id";
    if(mysqli_query($connexion,$sql)){
        $message["message"] = "Donnée Supprimée correctement!";
        $message["statut"] = 200;
        echo json_encode($message);
        //header("Location:index.php");
    }else{
        $message["error"] = "Erreur lors de la suppression!";
        $message["statut"] = 404;
        echo json_encode($message);
    }
?>