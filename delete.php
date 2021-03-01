<?php 
    require_once "db.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM utilisateurs WHERE id=$id";
    
    if(mysqli_query($connexion,$sql)){
        echo "deleted!";
        //header("Location:index.php");
    }else{
        
        echo "Erreur lors de la suppression";
    }
?>