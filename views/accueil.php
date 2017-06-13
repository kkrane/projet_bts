<?php
 if (isset($_SESSION['connecte'])){
?>
<link rel="stylesheet" href="<?= baseUrl(); ?>css/style.css">    
    <body id="top">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script>
              $(document).ready(function(){
              $(".validation").click(function(){
                    $.ajax({
                        type: "POST",
                        url: "http://localhost/M2L/projetbts/validation",
                        data: {
                            id_formation: this.dataset.id,
                            id_user: this.dataset.user,
                            value: this.value == 'Valider',
                            
                        }
                    });

                });
                });
              
              $(document).ready(function(){
              $(".refuse").click(function(){
                  $.ajax({
                      type:"POST",
                      url: "http://localhost/M2L/projetbts/refuser",
                      data: {
                          id_formation: this.dataset.id,
                          id_user: this.dataset.user,
                          value: this.value == 'Refuser',
                      }
                  });
              });
              });
              
              $(document).ready(function(){
              $(".annulation").click(function(){
                  $.ajax({
                      type:"POST",
                      url: "http://localhost/M2L/projetbts/annulation",
                      data: {
                          id_formation: this.dataset.id,
                          id_user: this.dataset.user,
                          value: this.value == 'Annuler',
                      }
                  });
              });
              });
            
              
          </script>
           <?php
                if ($_SESSION['chef'] == 1){
            ?>
            <div class="container">
            <div class="row">
                <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">LISTE DES <span>UTILISATEURS</span></h2>
                    <table class="table">
                      <thead class="thead-inverse">
                        <tr>
                          <th>Nom</th>
                          <th>Prénom</th>
                          <th>Email</th>
                          <th>Crédits</th>
                        </tr>
                      </thead>
                      <tbody>
        
                <?php
                $req = getListe();
                while($donnee = $req->fetch())
                {
                ?>
                        <tr>
                          <td scope="row"><?php echo $donnee['nom'] ?></td>
                          <td scope="row"><?php echo $donnee['prenom'] ?></td>
                          <td scope="row"><?php echo $donnee['email'] ?></td>
                          <td scope="row"><?php echo $donnee['credit'] ?></td>
                        </tr>
                        
        <?php
                }
        ?>
                    </tbody>
                </table>
            </div>
        </div>
<?php  
 }
?>

           <?php
                if ($_SESSION['chef'] ==0){
            ?>
            <div class="container">
                <div class="row">
                    <h3 style="color: #28a7e9" class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">FORMATION EN ATTENTE</h3>
                    <table class="table">
                      <thead class="thead-inverse">
                        <tr>
                          <th>Formation</th>
                          <th>Contenu</th>
                          <th>Date</th>
                          <th>Durée</th>
                          <th>Coût</th>
                          <th>Lieu</th>
                        </tr>
                      </thead>
                      <tbody>
        
                <?php
                $req = getFormationEnAttente();
                while($donnee = $req->fetch())
                {
                ?>
                        <tr>
                          <td scope="row"><?php echo $donnee['titre'] ?></td>
                          <td scope="row"><?php echo $donnee['contenu'] ?></td>
                          <td scope="row"><?php echo $donnee['date_debut'] ?></td>
                          <td scope="row"><?php echo $donnee['duree'] ?></td>
                          <td scope="row"><?php echo $donnee['cout'] ?></td>
                          <td scope="row"><?php echo $donnee['lieu'] ?></td>
                        </tr>
                        
                    
        <?php
                }
            }
        ?>

                    </tbody>
                </table>
                </div>
            </div>
            
            <?php
                if ($_SESSION['chef'] ==0){
            ?>
            <div class="container">
                <div class="row">
                    <h3 style="color: #28a7e9" class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">FORMATION VALIDE</h3>
                    <table class="table">
                      <thead class="thead-inverse">
                        <tr>
                          <th>Formation</th>
                          <th>Contenu</th>
                          <th>Date</th>
                          <th>Durée</th>
                          <th>Coût</th>
                          <th>Lieu</th>
                        </tr>
                      </thead>
                      <tbody>

               <?php
                $req = getFormationValide();
                while($donnee = $req->fetch())
                {
              ?>
                        <tr>
                          <td scope="row"><?php echo $donnee['titre'] ?></td>
                          <td scope="row"><?php echo $donnee['contenu'] ?></td>
                          <td scope="row"><?php echo $donnee['date_debut'] ?></td>
                          <td scope="row"><?php echo $donnee['duree'] ?></td>
                          <td scope="row"><?php echo $donnee['cout'] ?></td>
                          <td scope="row"><?php echo $donnee['lieu'] ?></td>
                        </tr>
                        
                      
                   
            <?php
                    }
                }
            ?>
                    </tbody>
                </table>
                </div>
            </div>
            <?php
                if ($_SESSION['chef'] ==0){
            ?>
            <div class="container">
                <div class="row">
                    <h3 style="color: #28a7e9" class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">FORMATION REFUSE</h3>
                    <table class="table">
                      <thead class="thead-inverse">
                        <tr>
                          <th>Formation</th>
                          <th>Contenu</th>
                          <th>Date</th>
                          <th>Durée</th>
                          <th>Coût</th>
                          <th>Lieu</th>
                        </tr>
                      </thead>
                      <tbody>
                          
              <?php
                $req = getFormationRefuse();
                while($donnee = $req->fetch())
                {
              ?>
                        <tr>
                          <td scope="row"><?php echo $donnee['titre'] ?></td>
                          <td scope="row"><?php echo $donnee['contenu'] ?></td>
                          <td scope="row"><?php echo $donnee['date_debut'] ?></td>
                          <td scope="row"><?php echo $donnee['duree'] ?></td>
                          <td scope="row"><?php echo $donnee['cout'] ?></td>
                          <td scope="row"><?php echo $donnee['lieu'] ?></td>
                        </tr>

                      
            <?php
                    }
                }
            ?>
            
     
                    </tbody>
                </table>
                </div>
            </div>
 
        <?php
                if ($_SESSION['chef'] ==1){
            ?>
             
        </body>
        
<?php
    }
}

?>