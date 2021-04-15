<?php
    include "db.php";
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $description = $_POST['description'];
    $request = "INSERT INTO utilisateurs(nom, email, description)
    VALUES ('$nom', '$email', '$description')";
    mysqli_query($connexion,$request);
    echo "UTILISATEUR CRÉE";
?>