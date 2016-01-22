<?php
namespace Manager;

class GeneralManager extends \W\Manager\Manager {
    /*
    public function findAll($orderBy = "", $orderDir = "ASC") {

		$sql = "SELECT * FROM wusers AS w, competences AS c, diplomes AS d, experience_pro AS x, fil_actus AS fl, portfolios AS p, reseaux_divertissements AS rd, reseaux_pros AS rp, reseaux_socials AS rs WHERE c.id_wuser = w.id ";
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
    */
    
}
