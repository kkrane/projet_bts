<?php

require 'models/connexion.php';
    
if(isset($_POST['submit']))
{
		$login = $_POST['login'];
		$mdp = ($_POST['mdp']);
		
		$requete = $bdd->query("SELECT * FROM user
		                        WHERE mdp ='".$mdp."' 
								AND identifiant ='".$login."'");
        if($requete->rowCount() == 1 )
    {
            $reponse = $requete->fetch();
            $_SESSION['connecte'] = true;
            $_SESSION['identifiant'] = $login;
            $_SESSION['credit'] = $reponse['credit'];
            $_SESSION['nbr_jour'] = $reponse['nbr_jour'];
            $_SESSION['id_s'] = $reponse['id_s'];
            $_SESSION['chef'] = $reponse['chef'];
            header('location:accueil');
			die();
    }
        
    
        else alert: "Login ou Mot de Passe incorrect";

}
?>