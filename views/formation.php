<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
 if (isset($_SESSION['connecte'])){
?>
	<body id="top">
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
                        <a href="#formation1" class="portfolio-link" data-toggle="modal">
                            <div class="formation-hover">
                                <div class="formation-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img style="width: 400px; height: 200px;" src="images/<?php echo $donnee['image']?>" class="img-responsive" alt="">
                        </a>
                        <div class="formation_desc">       
                            <h4><?php echo $donnee['titre']; ?></h4>
                            <p class="text-muted">Cout de la formation en crédit : <?php echo $donnee['cout']; ?></p>
                            <p class="text-muted">Il reste <?php echo $donnee['nb_place']; ?> places</p>
                            <p class="text-muted">Durée : <?php echo $donnee['duree']; ?> jours</p>
                            <button type="button" class="btn btn-info">S'inscrire</button>
 

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
</html>