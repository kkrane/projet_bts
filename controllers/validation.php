<?php

require "models/accueil.php";

if (isset($_POST['id_formation']))
{
        
    $bdd = $GLOBALS['bdd'];
    
    if(!$bdd)
    {
        echo "Pas de connexion à la base de donnée";
    }
    
    $id_f = $_POST['id_formation'];
        
}

$req = UpdateDemandeEnAttente();
  
die();