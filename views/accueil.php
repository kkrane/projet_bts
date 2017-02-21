<?php
 if (isset($_SESSION['connecte'])){
?>

        <body id="top">
            <div class="container">
                <div class="row">
                   <h3 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">FORMATION EN ATTENTE</h3>
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
            ?>
                    </tbody>
                </table>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                   <h3 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">FORMATION VALIDE</h3>
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
            ?>
                    </tbody>
                </table>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                   <h3 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">FORMATION REFUSE</h3>
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
            ?>
                    </tbody>
                </table>
                </div>
            </div>
			
    </body>
<?php }
 ?>