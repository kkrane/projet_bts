<html>
<head>
    <link rel="stylesheet" href="<?= baseUrl(); ?>css/style.css">
</head>
<?php
 if (isset($_SESSION['connecte'])){
?>
	<body id="top">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script>
              
              $(document).ready(function(){
              $(".inscription").click(function(){
                    $.ajax({
                        type: "POST",
                        url: "http://localhost/M2L/projetbts/inscription",
                        data: {
                            id_formation: this.dataset.id,
                            id_user: this.dataset.user,
                            id_cout: this.dataset.cout,
                            id_jour: this.dataset.jour,
                            value: this.value == 'S\'inscrire',
                            
                        }
                    });

                });
                });
              
          </script>
            <div class="container">
				<div class="row">
					<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">CHERCHEZ UNE <span>FORMATION</span></h2>
    				</div>
				</div>
                <div class="row">
                <?php
                                   
                  $req = getFormation();
                  while ($donnee = $req->fetch())      
                  {
                ?>
                        <div style="padding-top: 10px; padding-bottom: 20px;" class="col-md-4 col-sm-6 portfolio-item">
                            <img style="width: 400px; height: 200px;" src="<?= baseUrl();?>images/<?php echo $donnee['image']?>" class="img-responsive" alt="">
                        
                        <div class="scrollbar" id="style-1">
                        <div class="formation_desc force-overflow">       
                            <h4><?php echo $donnee['titre']; ?></h4>
                            <p class="text-muted" align="left"><?php echo $donnee['contenu']; ?></p>
                            <p class="text-muted" align="left"><b>Cout de la formation en crédit :</b> <?php echo $donnee['cout']; ?></p>
                            <p class="text-muted" align="left"><b>Durée :</b> <?php echo $donnee['duree']; ?> jours</p>
                            <p class="text-muted" align="left"><b>Commence le :</b> <?php echo $donnee['date_debut']; ?></p>
                            <p class="text-muted" align="left"><b>Nombre de place disponible :</b> <?php echo $donnee['nb_place']; ?></p>
                            <h4>Lieu</h4>
                            <p class="text-muted" align="left"><?php echo $donnee['num_rue']." ".$donnee['rue'].","; ?></p>
                            <p class="text-muted" align="left"><?php echo $donnee['ville']." ".$donnee['code_postal']; ?></p>
                            <h4>Prestataire</h4>
                            <p class="text-muted" align="left"><?php echo $donnee['raison_sociale'];?></p>
                            
                            <form id="form_update1" method="post">
                                <input type="submit" class="btn btn-info inscription" value="S'inscrire" data-id="<?= $donnee['id_f']?>" data-user="<?= $_SESSION['id_s']?>" data-cout="<?= $donnee['cout']?>" data-jour="<?= $donnee['duree']?>">
                                
                            </form>

                        </div>
                        </div>
                        </div>
                    
                    <?php
                    }
                    ?>
                    
                    </div>
                    
			        </div>
			<!-- formation 1 -->
			
			<div class="formation-modal modal fade" id="formation1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl">
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="modal-body">
                                       
                                        <h1 style="color: grey; border-bottom : 4px solid grey; text-align: center;"><?php echo $donnee['titre'] ?></h1>
                                        <h4><?php echo $donnee['contenu'] ?></h4>
                                        <h4><?php echo $donnee['date_debut'] ?></h4>
                                        <h4><?php echo $donnee['duree'] ?></h4>
                                        <h4><?php echo $donnee['nb_place'] ?></h4>
                                        <h4><?php echo $donnee['cout'] ?></h4>
                                        <h4><?php echo $donnee['lieu'] ?></h4>
                                        
                                        <button type="button" class="btn btn-info">S'inscrire</button>
                                        
                                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Fermer</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
            
    
    </body>
<?php }
 ?>
    