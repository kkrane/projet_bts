<?php

require_once 'models/connexion.php';

function getFormationEnAttente()
{
    $bdd = $GLOBALS['bdd'];
    $sql = "SELECT * FROM formation";
    $req = $bdd->query($sql);
    
    if(!$req)
    {
        echo 'requête déféctueuse';
    }
    
    return $req;
};

?>