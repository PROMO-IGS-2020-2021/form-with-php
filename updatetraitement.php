<?php
    include "db.php";
    if(isset($_POST['envoyer'])) {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $description = $_POST['description'];
        $id = $_POST['id'];
        // //insertion dans la base de donnée
        $request = "UPDATE utilisateurs SET nom='$nom', email='$email', description='$description' WHERE id=$id";

        if (mysqli_query($connexion,$request)) {
        echo "données modifiées avec succès";
        header("Location:index.php");
        } else {
        echo "Problème lors de la modification des données: " . $request. "<br>" . $connexion->error;
        }
    }
  
?>