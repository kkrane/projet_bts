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
    $id_s = $_POST['id_user'];
    
    
    $bdd = $GLOBALS['bdd'];
    $sql = "INSERT INTO formation_suivi (id_f, id_s, valide) VALUES('".$id_f."','".$id_s."', 0)";
    $req = $bdd->query($sql);
        
}


  
die();