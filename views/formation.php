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
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#formation1" class="portfolio-link" data-toggle="modal">
                        <div class="formation-hover">
                            <div class="formation-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/html_css.png" class="img-responsive" alt="">
                    </a>
                    <div class="formation_desc">
                        <h4>Parking</h4>
                        <p class="text-muted">Gestion de parking</p>
                    </div>
                </div>
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
                                        <!-- Project Details Go Here -->
                                        <h1>COUCOU</h1>
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