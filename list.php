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