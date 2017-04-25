<?php

require "models/accueil.php";

session_start();

if (isset($_POST['id_formation']))
{
        
    $bdd = $GLOBALS['bdd'];
    
    if(!$bdd)
    {
        echo "Pas de connexion à la base de donnée";
    }
    
    $id_f = $_POST['id_formation'];
    
    /*$req = UpdateDemandeEnAttente2();
    $req = bindParam(':id_f', $id_f);
    $req = bindParam(':id_s', $id_s);
    $req->execute();*/
    $bdd = $GLOBALS['bdd'];
    $sql = "UPDATE formation_suivi SET `valide` = 1 WHERE id_f = '".$id_f."'";
    $req = $bdd->query($sql);
        
}


  
die();