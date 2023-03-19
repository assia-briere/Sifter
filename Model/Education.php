<?php 

require_once dirname(__DIR__) . "/Model/Connexion.php";

class Education extends Connection {
    
    public function getEducation($id){
        $query = "SELECT * FROM Education  where candidat_id = :id ";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $num = $stmt->rowCount();

        $edu= $stmt->fetch(PDO::FETCH_ASSOC);

        return $edu;
    }
    
    public function setEducation ($edu,$dateD,$dateF,$fillier,$faculte,$id){
        $query = "INSERT INTO Education (nom,dateDebut,dateFin,fillier,faculte,candidat_id) 
        VALUES (:nom, :datD,:datF,:fil,:fac,:id)";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(":nom", $edu);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":datD", $dateD);
        $stmt->bindParam(":datF", $dateF);
        $stmt->bindParam(":fil", $fillier);
        $stmt->bindParam(":fac", $faculte);
        $stmt->execute();
    }
}

?>