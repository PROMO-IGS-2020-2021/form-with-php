<?php
    include "db.php";
    if(isset($_POST['envoyer'])) {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $description = $_POST['description'];
        // //insertion dans la base de donnée
        $request = "INSERT INTO utilisateurs(nom, email, description)
        VALUES ('$nom', '$email', '$description')";

        if ($connexion->query($request) === TRUE) {
        echo "données insérées avec succès";
        //header("Location:index.php");
        } else {
        echo "Problème lors de l insertion des données: " . $request. "<br>" . $connexion->error;
        }
    }
  
?>