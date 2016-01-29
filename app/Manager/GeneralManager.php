<?php
namespace Manager;

class GeneralManager extends \W\Manager\Manager {
    
    public function findUserAll($orderBy = "", $orderDir = "ASC") {

		$sql = "SELECT \n"
    . "	* \n"
    . "FROM \n"
    . "	`wusers` AS w \n"
    . "	INNER JOIN competences AS c ON w.id = c.id_wuser \n"
    . "	INNER JOIN diplomes AS d ON w.id = d.id_wuser \n"
    . "	INNER JOIN experience_pros AS x ON w.id = x.id_wuser \n"
    . "	INNER JOIN fil_actus AS fl ON w.id = fl.id_wuser \n"
    . "	INNER JOIN portfolios AS p ON w.id = p.id_wuser \n"
    . "	INNER JOIN reseaux_divertissements AS rd ON w.id = rd.id_wuser \n"
    . "	INNER JOIN reseaux_pros AS rp ON w.id = rp.id_wuser \n"
    . "	INNER JOIN reseaux_socials AS rs On w.id = rs.id_wuser";
		if (!empty($orderBy)){

			//sécurisation des paramètres, pour éviter les injections SQL
			if(!preg_match("#^[a-zA-Z0-9_$]+$#", $orderBy)){
				die("invalid orderBy param");
			}
			$orderDir = strtoupper($orderDir);
			if($orderDir != "ASC" && $orderDir != "DESC"){
				die("invalid orderDir param");
			}

			$sql .= " ORDER BY $orderBy $orderDir";
		}
		$sth = $this->dbh->prepare($sql);
		$sth->execute();

		return $sth->fetchAll();
	}
    
    


/* MODIFICATION TABLE SQL :

Dans le formulaire diplome / xp_pro, faire une seule entrée dans la BDD

par exemple :

ID / ID_WUSER / ANNEE_OBT / INTITULE / ECOLE / ANNEE_OBT1 / INTITULE1 / ECOLE1 / ANNEE_OBT2 / INTITULE2 / ECOLE2 / ........

"idem pour experiences_pro"




REQUETE INNERJOIN ALL TABLES


--Version SQL ---
SELECT 
	* 
FROM 
	`wusers` AS w 
	INNER JOIN competences AS c ON w.id = c.id_wuser 
	INNER JOIN diplomes AS d ON w.id = d.id_wuser 
	INNER JOIN experience_pros AS x ON w.id = x.id_wuser 
	INNER JOIN fil_actus AS fl ON w.id = fl.id_wuser 
	INNER JOIN portfolios AS p ON w.id = p.id_wuser 
	INNER JOIN reseaux_divertissements AS rd ON w.id = rd.id_wuser 
	INNER JOIN reseaux_pros AS rp ON w.id = rp.id_wuser 
	INNER JOIN reseaux_socials AS rs On w.id = rs.id_wuser
    
--Version PHP ---
$sql = "SELECT \n"
    . "	* \n"
    . "FROM \n"
    . "	`wusers` AS w \n"
    . "	INNER JOIN competences AS c ON w.id = c.id_wuser \n"
    . "	INNER JOIN diplomes AS d ON w.id = d.id_wuser \n"
    . "	INNER JOIN experience_pros AS x ON w.id = x.id_wuser \n"
    . "	INNER JOIN fil_actus AS fl ON w.id = fl.id_wuser \n"
    . "	INNER JOIN portfolios AS p ON w.id = p.id_wuser \n"
    . "	INNER JOIN reseaux_divertissements AS rd ON w.id = rd.id_wuser \n"
    . "	INNER JOIN reseaux_pros AS rp ON w.id = rp.id_wuser \n"
    . "	INNER JOIN reseaux_socials AS rs On w.id = rs.id_wuser";
*/




    



//// vérification de l'email : est-il dans la table membres ?
//	$stmt = $db->prepare("SELECT * FROM wusers WHERE mail=? AND id=?");
//	$stmt->execute(array($_POST["mail"]));
//	$result = $stmt->fetch(PDO::FETCH_ASSOC);

    
}























