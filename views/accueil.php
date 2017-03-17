<?php
 if (isset($_SESSION['connecte'])){
?>    
    <body id="top">
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
            <div class="container">
                <div class="row">
                    <h3 style="color: #28a7e9" class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Demande en attente</h3>
                    <table class="table">
                      <thead class="thead-inverse">
                        <tr>
                          <th style="text-align: center;">Salarié</th>
                          <th style="text-align: center;">Formation</th>
                          <th style="text-align: center;">Durée</th>
                          <th style="text-align: center;">Valider</th>
                          <th style="text-align: center;">Refuser</th>
                        </tr>
                      </thead>
                      <tbody>
                          
              <?php
                $req = getFormationDemande();
                while($donnee = $req->fetch())
                {
              ?>
                        <tr>
                          <td style="text-align: center;" scope="row"><?php echo $donnee['nom'] ?></td>
                          <td style="text-align: center;" scope="row"><?php echo $donnee['titre'] ?></td>
                          <td style="text-align: center;" scope="row"><?php echo $donnee['duree'] ?> jours</td>
                          <td style="text-align: center;" scope="row"><img style="width: 20px; height: 20px;" src="images/valider.ico"></img></td>
                          <td style="text-align: center;" scope="row"><img style="width: 20px; height: 20px; text-align: center;" src="images/refuser.ico"</td>
                        </tr>

                      
            <?php
                    }
                
            ?>
            
     
                    </tbody>
                </table>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <h3 style="color: #28a7e9" class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Demande accepté </h3>
                    <table class="table">
                      <thead class="thead-inverse">
                        <tr>
                          <th style="text-align: center;">Salarié</th>
                          <th style="text-align: center;">Formation</th>
                          <th style="text-align: center;">Durée</th>
                          <th style="text-align: center;">Annuler</th>
                        </tr>
                      </thead>
                      <tbody>
                          
              <?php
                $req = getFormationAccepte2();
                while($donnee = $req->fetch())
                {
              ?>
                        <tr>
                          <td style="text-align: center;" scope="row"><?php echo $donnee['nom'] ?></td>
                          <td style="text-align: center;" scope="row"><?php echo $donnee['titre'] ?></td>
                          <td style="text-align: center;" scope="row"><?php echo  $donnee['duree'] ?> jours</td>
                          <td style="text-align: center;" scope="row"><img style="width: 20px; height: 20px; text-align: center;" src="images/refuser.ico"</td>
                        </tr>

                      
            <?php
                    }
                
            ?>
            
     
                    </tbody>
                </table>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <h3 style="color: #28a7e9" class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Demande refusé</h3>
                    <table class="table">
                      <thead class="thead-inverse">
                        <tr>
                          <th style="text-align: center;">Salarié</th>
                          <th style="text-align: center;">Formation</th>
                          <th style="text-align: center;">Durée</th>
                          <th style="text-align: center;">Annuler</th>
                        </tr>
                      </thead>
                      <tbody>
                          
              <?php
                $req = getFormationRefuse2();
                while($donnee = $req->fetch())
                {
              ?>
                        <tr>
                          <td style="text-align: center;" scope="row"><?php echo $donnee['nom'] ?></td>
                          <td style="text-align: center;" scope="row"><?php echo $donnee['titre'] ?></td>
                          <td style="text-align: center;" scope="row"><?php echo $donnee['duree'] ?> jours</td>
                          <td style="text-align: center;" scope="row"><img style="width: 20px; height: 20px; text-align: center;" src="images/refuser.ico"</td>
                        </tr>

                      
            <?php
                    }
                }
            ?>
            
     
                    </tbody>
                </table>
                </div>
            </div>
        </body>
        <?php
 }
?>