<?php

require_once 'models/connexion.php';

?>

<?php

function getFormation()
{
    $bdd = $GLOBALS['bdd'];
    $sql = "SELECT * FROM formation";
    $req = $bdd->query($sql);
    
    if(!$req)
    {
        echo "requête defectueuse";
    }
    
    return $req;
};

function addFormation()
{
    $bdd = $GLOBALS['bdd'];
    $sql1 = "INSERT INTO formation_suivi (id_f, id_s, valide) VALUES (:idformation, :idsalarie,0)";
    $req1 = $bdd->prepare($sql1);
    $req1->bindParam(':idformation', $_SESSION['idf']);
    $req1->bindParam(':idsalarie', $_SESSION['ids']);
    $req1->execute();
    
    if(!$req1)
    {
        echo "requête defectueuse";
    }
    
    return $req1;
};
?>