<?php
namespace Manager;

class MembreManager extends \W\Manager\Manager {

    // INSERE LE MEMBRE
    /**
	 * Ajoute une ligne
	 * @param array $data Un tableau associatif de valeurs à insérer
	 * @param boolean $stripTags Active le strip_tags automatique sur toutes les valeurs
	 * @return mixed La valeur de retour de la méthode execute()
	 */
    public function insertUser(array $data, $stripTags = true)
    {

        $colNames = array_keys($data);
        $colNamesString = implode(", ", $colNames);

        $sql = "INSERT INTO " . $this->table . " ($colNamesString) VALUES (";
        foreach($data as $key => $value){
            $sql .= ":$key, ";
        }
        $sql = substr($sql, 0, -2);
        $sql .= ")";

        $sth = $this->dbh->prepare($sql);
        foreach($data as $key => $value){
            $value = ($stripTags) ? strip_tags($value) : $value;
            $sth->bindValue(":".$key, $value);
        }
        return $sth->execute();
    }

    // RECUPERE LE MEMBRE de la table Wusers
    public function find($mail)
    {
        // verification email

        $sql = "SELECT * FROM " . $this->table . " WHERE mail = :mail";
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(":mail", $mail);
        $sth->execute();

        return $sth->fetch();
    }






    public function insertDataMembre(array $data, $stripTags = true) {

        $colNames = array_keys($data);
        $colNamesString = implode(", ", $colNames);

        $sql = "INSERT INTO " . $this->table . " ($colNamesString) VALUES (";
        foreach($data as $key => $value){
            $sql .= ":$key, ";
        }
        $sql = substr($sql, 0, -2);
        $sql .= ")";

        $sth = $this->dbh->prepare($sql);
        foreach($data as $key => $value){
            $value = ($stripTags) ? strip_tags($value) : $value;
            $sth->bindValue(":".$key, $value);
        }
        return $sth->execute();
    }
}