<?php
namespace Manager;

class Fil_actuManager extends \W\Manager\Manager {
    
    
    public function findLastFilActu5() {
		
		$sql = "SELECT * FROM " . $this->table . " INNER JOIN wusers AS w ON w.id = id_wuser ORDER BY message DESC LIMIT 5"; // limte la selection aux 5 dernières entrées de la table
		$sth = $this->dbh->prepare($sql);
		$sth->execute();

		return $sth->fetchAll();
	}
	public function findFilactu($user_id)
	{
		if (!is_numeric($user_id)){
			return false;
		}

		$sql = "SELECT * FROM " . $this->table . " WHERE id_wuser = :id LIMIT 1";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":id", $user_id);
		$sth->execute();

		return $sth->fetch();
	}
	



}