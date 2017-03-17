<?php

require_once 'models/connexion.php';

?>

<?php
if(isset($_GET['id_f'])){

    $check = $bdd->query("SELECT * FROM formation_suivi WHERE id_f= ".$_GET['id_f']." AND id_s= ".$_SESSION['id_s']." ");

    if($check->rowCount() == 1 )
    {
        $message = "Vous êtes déjà inscris à cette formation";
    }
    
    else
    {

        $req = $bdd->query("SELECT * FROM formation WHERE id_f= ".$_GET['id_f']." ");
        $req1 = $bdd->query("SELECT * FROM user WHERE id_s=".$_SESSION['id_s']." ");
        $get_formation = $req->fetch();
        $get_user = $req1->fetch();
        if($_SESSION['credit'] < $get_formation['cout'])
            {
                $message = "Crédits insuffisant";
            }
            else
            {
                if ($_SESSION['nbr_jour'] < $get_formation['duree'])
                {
                    $message = "Votre nombre de jours est insuffisant";
                }
                else
                {
                    $new_credits = $get_salaries['credits'] - $get_formation['credits_f'];
                    $new_jour = $get_salaries['jour'] - $get_formation['nb_jour'];

                    $_SESSION['credit'] = $new_credits;
                    $_SESSION['nbr_jour'] = $new_jour;

                    $sql = "UPDATE user SET credit= ".$new_credits.", nbr_jour= ".$new_jour." WHERE id_s= ".$_SESSION['id_s']." ";
                    $stmt = $bdd->prepare($sql);
    
                    $update = $stmt->execute();
    
                    if ($_SESSION['chef'] == 1) 
                    {
                        $ins = "INSERT INTO formation_suivi (id_s, id_f, valide) VALUES (" . $_SESSION['id_s'] . ", " . $_GET['id_f'] . ", 1)";
                    }
                    if ($_SESSION['chef'] == 0) 
                    {
                        $ins = "INSERT INTO formation_suivi (id_s, id_f, valide) VALUES (" . $_SESSION['id_s'] . ", " . $_GET['id_f'] . ", 0)";
                    }
                    $inse = $bdd->prepare($ins);

                    $insert = $inse->execute();
                    
                    $message = "La formation a été ajoutée avec succès";
                }
            }
        }
}

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
    $req1->bindParam(':idformation', $_SESSION['id_f']);
    $req1->bindParam(':idsalarie', $_SESSION['id_s']);
    $req1->execute();
    
    if(!$req1)
    {
        echo "requête defectueuse";
    }
    
    return $req1;
};
?>