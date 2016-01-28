<?php
namespace Manager;

class TokenManager extends \W\Manager\Manager {
    
    public function findMail($mail)
	{

		$sql = "SELECT id, mail FROM wusers WHERE mail = :mail LIMIT 1";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":mail", $mail);
		$sth->execute();

		return $sth->fetch();
	}

}