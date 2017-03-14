<?php
 if (isset($_SESSION['connecte'])){
?>

<link rel="stylesheet" href="css/style.css">

    <body id="top">
        <div class="container">
            <div class="row">
                <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">HISTORIQUE DE VOS <span>FORMATIONS</span></h2>
                    <table class="table">
                      <thead class="thead-inverse">
                        <tr>
                          <th>Intitule formation</th>
                          <th>Dte début</th>
                          <th>Crédit</th>
                        </tr>
                      </thead>
                      <tbody>
              <?php
                                    
                $req = getHistorique();
                while($donnee = $req->fetch())
                {
              ?>
                        <tr>
                          <td scope="row"><?php echo $donnee['titre'] ?></td>
                          <td scope="row"><?php echo $donnee['date_debut'] ?></td>
                          <td scope="row"><?php echo $donnee['cout'] ?></td>
                        </tr>
                   
            <?php
                }
            ?>
    				    </table>
    			
    		</div>
        </div>
    </body>

<?php }
 ?>