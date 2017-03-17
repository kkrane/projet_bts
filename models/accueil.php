<?php

require_once 'models/connexion.php';

function getFormationEnAttente()
{
    $bdd = $GLOBALS['bdd'];
    $sql = "SELECT * FROM formation f, formation_suivi fs WHERE f.id_f = fs.id_f AND fs.valide = 0";
    $req = $bdd->query($sql);
    
    if(!$req)
    {
        echo 'requête déféctueuse';
    }
    
    return $req;
};

function getFormationValide()
{
    $bdd = $GLOBALS['bdd'];
    $sql = "SELECT * FROM formation f, formation_suivi fs WHERE f.id_f = fs.id_f AND fs.valide = 1";
    $req = $bdd->query($sql);
    
    if(!$req)
    {
        echo 'requête déféctueuse';
    }
    
    return $req;
};

function getFormationRefuse()
{
    $bdd = $GLOBALS['bdd'];
    $sql = "SELECT * FROM formation f, formation_suivi fs WHERE f.id_f = fs.id_f AND fs.valide = 2";
    $req = $bdd->query($sql);
    
    if(!$req)
    {
        echo 'requête déféctueuse';
    }
    
    return $req;
};

?>