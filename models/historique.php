<?php

require_once 'models/connexion.php';

?>


<?php

function getHistorique()
{
    $bdd = $GLOBALS['bdd'];
    $sql = "SELECT * FROM formation f, user u, formation_suivi fs WHERE f.id_f = fs.id_f AND fs.id_s = u.id_s AND fs.valide = 1";
    $req = $bdd->query($sql);

 if(!$req)
	 {
		echo 'Requête déféctueuse';
	 }

return $req;
};
?>