<?php 

require_once dirname(__DIR__) . "/Model/Connexion.php";

class Competences extends Connection {



    public function getCompetences(){
        $query = "SELECT * FROM competences ";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        $num = $stmt->rowCount();

        $comp= $stmt->fetch(PDO::FETCH_ASSOC);

        return $comp;
    }
    public function getCompetence($nom){
        $query = "SELECT * FROM competences where nom = :nom ";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(":nom", $nom);
        $stmt->execute();
        $num = $stmt->rowCount();

        $comp= $stmt->fetch(PDO::FETCH_ASSOC);

        return $comp;
    }
    
    public function setCompetences($comp,$dom){
        $query = "INSERT INTO competences (nom,domaine) VALUES (:nom, :dom)";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(":nom", $comp);
        $stmt->bindParam(":dom", $dom);

        $stmt->execute();
    }
}

?>