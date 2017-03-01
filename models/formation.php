<?php

require_once 'models/connexion.php';

?>

<?php

function getFormation()
{
    $bdd = $GLOBALS['bdd'];
    $sql = "SELECT * FROM formation";
    $req = $bbd->query($sql);
    
    if(!$req)
    {
        echo "requête defectueuse";
    }
    
    return $req;
};

?>