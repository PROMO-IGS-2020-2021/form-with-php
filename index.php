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
        <form action="traitement.php" method="POST" id="addForm">
            <legend>Formulaire d'enregistrement</legend>
            <input type="text" id="nom" name="nom" placeholder="Veuillez ecrire votre nom s'il vous plait" required> <br>
            <input type="email" name="email" required placeholder="Veuillez ecrire votre email s'il vous plait"> <br>
            <textarea placeholder="Veuillez ecrire votre description s'il vous plait" name="description" required></textarea>
            <input type="submit" name="envoyer" value="Envoyer" />
        </form>
        <!-- SCRIPT JS POUR INSERER DES DONNEES DANS LA BD -->
        
        
        <br><hr>
        <h2>Liste d'enregistrement</h2>
        <table border="1" style="width: 100%;">
            <tr>
                <th>N°</th>
                <th>NOM</th>
                <th>EMAIL</th>
                <th>DESCRIPTION</th>
                <th>Action</th>
            </tr>
        <?php 
            if ($resultat->num_rows > 0) {
                // output data of each row
                $i = 1;
                while($row = mysqli_fetch_assoc($resultat)){
                ?>
                    <tr>    
                        <td><?php echo $i;?></td>
                        <td><?php echo $row['nom'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['description'];?></td>
                        <td>
                            <a href="update.php?id=<?php echo $row['id']; ?>">Modifier</a>
                           
                           <form action="#" method="post" id="deleteForm" onsubmit="return false;">
                                <table>
                                    <tr>
                                        <td><input type="hidden" class="userId" value="<?php echo $row['id']; ?>">
                                        </td>
                                    </tr>
                                </table>
                                <button type="submit" name="delete">supprimer</button>
                                <!-- <input type="submit" name="delete" value="supprimer"> -->
                           </form>
                        </td>
                    </tr>
                <?php
                $i++;
                }
            }
        ?>
        </table>
        <div>
            (<?php echo $resultat->num_rows.") Résultat(s)";?>
        </div>
        <script src="script.js"></script>
    </body>
</html>