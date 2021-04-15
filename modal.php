<?php 
     include "db.php";
     $recup_donnees= "SELECT * FROM utilisateurs ORDER BY id DESC";
     $resultat = $connexion->query($recup_donnees);
     $data = $query->fetch();
?>
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modifier Utilisateur</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
        </div>
        
      </div>
    </div>
  </div>