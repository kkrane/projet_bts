<?php

require_once 'models/connexion.php';

function getListe()
{
    $bdd = $GLOBALS['bdd'];
    $sql = "SELECT * FROM user u WHERE u.id_s";
    $req = $bdd->query($sql);
    
    if(!$req)
    {
        echo 'requête déféctueuse';
    }
    
    return $req;
};

?>

<?php
require_once 'models/connexion.php';
function getFormationEnAttente()
{
    $bdd = $GLOBALS['bdd'];
    $sql = "SELECT * FROM formation f, formation_suivi fs WHERE f.id_f = fs.id_f AND fs.valide = 0 AND fs.id_s = '".$_SESSION['id_s']."'";
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
    $sql = "SELECT * FROM formation f, formation_suivi fs WHERE f.id_f = fs.id_f AND fs.valide = 1 AND fs.id_s = '".$_SESSION['id_s']."'";
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
    $sql = "SELECT * FROM formation f, formation_suivi fs WHERE f.id_f = fs.id_f AND fs.valide = 2 AND fs.id_s = '".$_SESSION['id_s']."'";
    $req = $bdd->query($sql);
    
    if(!$req)
    {
        echo 'requête déféctueuse';
    }
    
    return $req;
};
function getFormationDemande()
{
    $bdd = $GLOBALS['bdd'];
    $sql = "SELECT * FROM formation f, user u, formation_suivi fs WHERE f.id_f = fs.id_f AND fs.id_s = u.id_s AND fs.valide = 0";
    $req = $bdd->query($sql);
    
    if(!$req)
    {
        echo 'requête déféctueuse';
    }
    return $req;
}
function getFormationAccepte2()
{
    $bdd = $GLOBALS['bdd'];
    $sql = "SELECT * FROM formation f, user u, formation_suivi fs WHERE f.id_f = fs.id_f AND fs.id_s = u.id_s AND fs.valide = 1";
    $req = $bdd->query($sql);
    
    if(!$req)
    {
        echo 'requête déféctueuse';
    }
    return $req;
}
function getFormationRefuse2()
{
    $bdd = $GLOBALS['bdd'];
    $sql = "SELECT * FROM formation f, user u, formation_suivi fs WHERE f.id_f = fs.id_f AND fs.id_s = u.id_s AND fs.valide = 2";
    $req = $bdd->query($sql);
    
    if(!$req)
    {
        echo 'requête déféctueuse';
    }
    return $req;
}

function UpdateDemandeEnAttente()
{
    $bdd = $GLOBALS['bdd'];
    $sql = "UPDATE formation_suivi SET `valide` = 1";
    $req = $bdd->query($sql);
    
    if(!$req)
    {
        echo 'requête déféctueuse';
    }   
    
    return $req;
}
?>