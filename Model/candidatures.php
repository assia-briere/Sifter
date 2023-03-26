<?php 

require_once dirname(__DIR__) . "/Model/Connexion.php";

class Candidatures extends Connection {


    public function setCandidatures($idcan,$idOffer){

        $query = "INSERT INTO candidatures (candidat_id ,offre_id ) value (?,?)";
        $stmt=$this->connect()->prepare($query);
        $stmt->bindParam(1,$idcan);
        $stmt->bindParam(2,$idOffer);
        $stmt->execute();
    }

    public function getCand($idRec){
        $query = "SELECT  DISTINCT candidat.* , offre_id from  candidatures , offre, candidat 
        WHERE  recruteur_id=? and offre.id=offre_id and candidat_id=idc  ";
        $stmt=$this->connect()->prepare($query);
        $stmt->bindParam(1,$idRec);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}