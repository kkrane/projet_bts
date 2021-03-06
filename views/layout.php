<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Maison des ligues</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="<?= baseUrl(); ?>css/animate.min.css">
		<link rel="stylesheet" href="<?= baseUrl(); ?>css/bootstrap.min.css">
		<link rel="stylesheet" href="<?= baseUrl(); ?>css/font-awesome.min.css">
		<link rel="stylesheet" href="<?= baseUrl(); ?>css/style.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?= baseUrl(); ?>css/templatemo-style.css">
		<script src="<?= baseUrl(); ?>js/jquery.js"></script>
        <script src="<?= baseUrl(); ?>includes/function.js"></script>
		<script src="<?= baseUrl(); ?>js/bootstrap.min.js"></script>
        <script src="<?= baseUrl(); ?>js/jquery.singlePageNav.min.js"></script>
		<script src="<?= baseUrl(); ?>js/typed.js"></script>
		<script src="<?= baseUrl(); ?>js/wow.min.js"></script>
		<script src="<?= baseUrl(); ?>js/custom.js"></script>
	</head>
	<body id="top">
		<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-wave">
     	 		<div class="sk-rect1"></div>
       			<div class="sk-rect2"></div>
       			<div class="sk-rect3"></div>
      	 		<div class="sk-rect4"></div>
      			<div class="sk-rect5"></div>
     		</div>
    	</div>
    	<!-- end preloader -->

        <!-- start header -->
<?php
        
        
$bdd = $GLOBALS['bdd'];

if (isset($_SESSION['connecte']) == true) {
	$requete = $bdd->query("SELECT * FROM user WHERE id_s=".$_SESSION['id_s']." ");
	$get_user = $requete->fetch();
	?>
            <nav class="navbar navbar-default templatemo-nav" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                    </button>
                    <a href="<?= baseUrl(); ?>accueil" class="navbar-brand"> <img src="<?= baseUrl(); ?>images/logo.png" class="img-responsive" style="width: 170px; height=10px; margin-top: -19px;";> </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                       <?php
                            if ($_SESSION['chef'] ==1){
                        ?>
                        <li><a href="<?= baseUrl(); ?>accueil">GESTION DES MEMBRES</a></li>
                        <?php
                            }
                        ?>
                        <?php
                            if ($_SESSION['chef'] ==0){
                        ?>
                        <li><a href="<?= baseUrl(); ?>accueil">MES FORMATIONS</a></li>
                        <?php
                            }
                        ?>
                        <li><a href="<?= baseUrl(); ?>formation">FORMATIONS</a></li>
                        <li><a href="<?= baseUrl(); ?>historique">HISTORIQUE</a></li>
                        <li><a href="<?= baseUrl(); ?>logout">DECONNEXION</a></li>
                        <li><a href="#"><?= $get_user['credit']; ?><span> Crédits </span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <?php
    }
 ?>
        <div class="class_content">
        <div class="row">
            <?php echo $content;?>
        </div>
        </div>
        
        <?php
            if(isset($erreurCo))
            {
                ?>
                <div class="alert alert-danger" style='margin-bottom:0px;'>
                    <strong>Attention! </strong> <?php echo $erreurCo." Veuillez essayer de vous reconnecter"; ?>
                </div>
        <?php
            }
        ?>
        
        <!-- end header -->

    	<!-- start home -->

        <!-- start copyright -->
       
        <!-- end copyright -->

	</body>
</html>