<?php

require "models/formation.php";

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
    $cout = $_POST['cout'];
    $duree = $_POST['duree'];
    
    
    $bdd = $GLOBALS['bdd'];
    $sql = "INSERT INTO formation_suivi (id_f, id_s, valide) VALUES('".$id_f."','".$id_s."', 0)";
    $req = $bdd->query($sql);
    
    $sql1 = "UPDATE user SET nbr_jour = nbr_jour - '$duree', credit = credit - '$cout' WHERE id_s = '".$id_s."'";
    $req1 = $bdd->query($sql1);    
}


  
die();