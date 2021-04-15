<?php include "db.php";
//echo "connexion éffectuée avec succès";
$recup_donnees= "SELECT * FROM utilisateurs";
$resultat = $connexion->query($recup_donnees);
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- encodage -->
        <meta charset="UTF-8">
        <!-- Adapter le contenu a tout type d ecran -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <!-- chargeons notre fichier style -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <style>
            table tr th{
                background-color: #000;
                color:#fff;
            }
            table,th, td{
                border-collapse: collapse;
                text-align: center;
                padding: 15px;
            }
        </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <div id="message"></div>
        <form action="#" method="POST" id="addForm">
            <legend>Formulaire d'enregistrement</legend>
            <input type="text" id="nom" name="nom" placeholder="Veuillez ecrire votre nom s'il vous plait" required> <br>
            <input type="email" name="email" required placeholder="Veuillez ecrire votre email s'il vous plait"> <br>
            <textarea placeholder="Veuillez ecrire votre description s'il vous plait" name="description" required></textarea>
            <input type="submit" name="envoyer" value="Envoyer" />
        </form>
        <!-- SCRIPT JS POUR INSERER DES DONNEES DANS LA BD -->
        <br><hr>
        <h2>Liste d'enregistrement</h2>
        <div id="data-list"></div>
        <script src="./script.js"></script>
        <script src="./load.js"></script>
    </body>
</html>