<?php 
    require_once "db.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM utilisateurs WHERE id=$id";
    $row = $connexion->query($query);
    $fetchData = $row->fetch_assoc();
    //echo $fetchData['id'];

?>
<!DOCTYPE html>
<html>
    <head>
        <!-- encodage -->
        <meta charset="UTF-8">
        <!-- Adapter le contenu a tout type d ecran -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <!-- chargeons notre fichier style -->
        <link rel="stylesheet" href="style.css">
    </head>
<body>

<form action="updatetraitement.php" method="POST">
    <legend>Modifier l'enregistrement N°<?= $fetchData['id'];?></legend>
    <input type="text" id="nom" name="nom" placeholder="Veuillez ecrire votre nom s'il vous plait" required value="<?= $fetchData['nom'];?>"> <br>
    <input type="email" name="email" required placeholder="Veuillez ecrire votre email s'il vous plait" value="<?= $fetchData['email'];?>"> <br>
    <textarea placeholder="Veuillez ecrire votre description s'il vous plait" name="description" required><?= $fetchData['description'];?></textarea>
    <input type="hidden" name="id" value="<?= $fetchData['id'];?>">
    <input type="submit" name="envoyer" value="Modifier" />
</form>
    
</body>
</html>