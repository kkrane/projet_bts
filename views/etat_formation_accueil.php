<?php
if ($_SESSION['chef'] == 1){
?>
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
                  <input type="submit" class="btn btn-success validation" value= "Valider" data-id="<?= $donnee['id_f'] ?>" data-user="<?= $donnee['id_s'] ?>">
                  <input type="submit" class="btn btn-danger refuse" value = "Refuser" data-id="<?= $donnee['id_f'] ?>" data-user="<?= $donnee['id_s'] ?>">
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
              <form id="form_update1" method="post">
                  <input type="submit" class="btn btn-danger annulation" value= "Annuler" data-id="<?= $donnee['id_f']?>" data_user="<?= $donnee['id_s']?>">
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
              <form id="form_update1" method="post">
                  <input type="submit" class="btn btn-danger annulation" value= "Annuler" data-id="<?= $donnee['id_f']?>" data_user="<?= $donnee['id_s']?>">
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
<?php
}
?>