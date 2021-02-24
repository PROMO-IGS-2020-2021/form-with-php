<!DOCTYPE html>
<html>
    <head>
        <!-- encodage -->
        <meta charset="UTF-8">

        <!-- Adapter le contenu a tout type d ecran -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

        <!-- chargeons notre fichier style -->
        <link rel="stylesheet" href="./style.css">
    </head>

    <body>
        <form action="traitement.php" method="POST">
            <legend>Formulaire d'enregistrement</legend>
            <input type="text" id="nom" name="nom" placeholder="Veuillez ecrire votre nom s'il vous plait" required> <br>
            <input type="email" name="email" required placeholder="Veuillez ecrire votre email s'il vous plait"> <br>
            <textarea placeholder="Veuillez ecrire votre description s'il vous plait" name="description" required></textarea>
            <input type="submit" name="envoyer" value="Envoyer" />
        </form>
    </body>
</html>