
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
   </head>
   <body>
  
    <table border="1" style="width: 100%;">
    <tr>
        <th>N°</th>
        <th>NOM</th>
        <th>EMAIL</th>
        <th>DESCRIPTION</th>
        <th>Action</th>
    </tr>
<?php 
    include "db.php";
    $recup_donnees= "SELECT * FROM utilisateurs ORDER BY id DESC";
    $resultat = $connexion->query($recup_donnees);

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
                    <!-- <a href="update.php?id=<?php echo $row['id']; ?>" dclass="btn btn-primary" data-toggle="modal" data-target="#myModal">Modifier</a> -->
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">MODIFIER</a>
                    <form action="#" method="post" id="deleteForm">
                        <table>
                            <tr>
                                <td><input type="hidden" name="idUser" id="idUser" value="<?php echo $row['id']; ?>">
                                </td>
                            </tr>
                        </table>
                        <input type="submit" name="delete" value="supprimer">
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
   
    <script>
        $("form#deleteForm").submit(function(ev){
            ev.preventDefault();
            let id = $("#idUser").val();
            if(confirm("VOULEZ-VOUS SUPPRIMER")){
                $.ajax({
                    url:"delete.php",
                    type:"POST",
                    dataType:"json",
                    data:{id:id},
                    success:function(data){
                        //let fetch = JSON.parse(data);
                        //console.log(data.message);
                        if(data.message !==""){
                            swal("SUCCÈS", data.message, "success");
                            reload();
                        }
                       
                       
                    },
                    error:function(error){
                        swal("ERREUR", error.message, "error");
                    }
                    
                });
            }
        
        });

    </script>
 
  <!-- The Modal -->
        <?php include "modal.php";?>
   </body>
   </html>