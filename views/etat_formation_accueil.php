
<div class="result_valide">
<div class="container">
    <div class="row">
        <h3 style="color: #28a7e9" class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Demande en attente</h3>
        <table class="table">
          <thead class="thead-inverse">
            <tr>
              <th style="text-align: center;">Salarié</th>
              <th style="text-align: center;">Formation</th>
              <th style="text-align: center;">Durée</th>
              <th style="text-align: center;">Etat</th>
            </tr>
          </thead>
          <tbody>

  <?php
    $req = getFormationDemande();
    while($donnee = $req->fetch())
    {
  ?>
            <tr class="test">
              <td style="text-align: center;" scope="row"><?php echo $donnee['nom'] ?></td>
              <td style="text-align: center;" scope="row"><?php echo $donnee['titre'] ?></td>
              <td style="text-align: center;" scope="row"><?php echo $donnee['duree'] ?> jours</td>
              <td style="text-align: center;" scope="row">
              <form id="form_update1" method="post">
                  <input type="submit" class="btn btn-success validation" value= "Valider" data-id="<?= $donnee['id_f'] ?>">
                  <input type="submit" class="btn btn-danger validation" value = "Refuser" data-id="<?= $donnee['id_f'] ?>">
              </form>
              </td>
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
              <td style="text-align: center;" scope="row">
              <input id="annuler1" type="submit" class="btn btn-danger" value= "Annuler">
              </td>

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
              <td style="text-align: center;" scope="row">
              <form action="controllers/accueil.php" method="post">
              <button type="submit" class="btn btn-danger"></button>
              </form>
              </td>
            </tr>


<?php
        }
?>


        </tbody>
    </table>
    </div>
</div>