<?php
namespace Manager;

class Fil_actuManager extends \W\Manager\Manager {
    
    /*
    public function findUserAll($orderBy = "", $orderDir = "ASC") {

		$sql = "SELECT \n"
    . "	* \n"
    . "FROM \n"
    . "	`wusers` AS w \n"
    . "	INNER JOIN fil_actus AS fl ON w.id = fl.id_wuser \n";
        
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
    
    public function findLastFilActu5() {
		
		$sql = "SELECT * FROM " . $this->table . " INNER JOIN wusers AS w ON w.id = id_wuser ORDER BY message DESC LIMIT 5";
		$sth = $this->dbh->prepare($sql);
		$sth->execute();

		return $sth->fetchAll();
	}

}