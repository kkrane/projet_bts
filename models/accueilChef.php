<?php

require_once 'models/connexion.php';

function getSalarie()
{
    $bdd = $GLOBALS['bdd'];
    $sql = "SELECT * FROM user WHERE id_chef = 0";
    $req = $bdd->query($sql);
    
    if(!$req)
    {
        echo 'Requête déféctueuse';
    }
    
    return $req;
};

function getFormationSalarie()
{
    $bdd = $GLOBALS['bdd'];
    $sql1 = "SELECT * FROM formation, formation_suivi WHERE formation_suivi.valide = 0 AND formation.id_f = formation_suivi.id_f AND formation_suivi.id_s = '".$id_s."'";
    $req1 = $bdd->query($sql1);
    
    if(!$req1)
    {
        echo 'Requête déféctueuse';
    }
    
    return $req1;
};




?>