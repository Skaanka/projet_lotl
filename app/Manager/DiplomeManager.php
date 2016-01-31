<?php
namespace Manager;

class DiplomeManager extends \W\Manager\Manager {
	
		public function findDiplome($user_id)
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