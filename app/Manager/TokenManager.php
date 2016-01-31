<?php
namespace Manager;

use \w\Manager\ConnectionManager;

class TokenManager extends \W\Manager\Manager {
    
    public function findMail($mail)
	{

		$sql = "SELECT id, mail FROM wusers WHERE mail = :mail LIMIT 1";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":mail", $mail);
		$sth->execute();

		return $sth->fetch();
	}
    
    public function findToken($token)
	{

		$sql = "SELECT * FROM " . $this->table . " WHERE token = :token LIMIT 1";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":token", $token);
		$sth->execute();

		$trouve = $sth->fetch();
        
        if ($trouve){
	       return true;
	   } else {
            return false;
        }
	}

}