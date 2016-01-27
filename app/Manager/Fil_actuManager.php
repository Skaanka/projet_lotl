<?php
namespace Manager;

class Fil_actuManager extends \W\Manager\Manager {
    
    
    public function findLastFilActu5() {
		
		$sql = "SELECT * FROM " . $this->table . " INNER JOIN wusers AS w ON w.id = id_wuser ORDER BY message DESC LIMIT 5"; // limte la selection aux 5 dernières entrées de la table
		$sth = $this->dbh->prepare($sql);
		$sth->execute();

		return $sth->fetchAll();
	}

}