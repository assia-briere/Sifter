<?php 

require_once dirname(__DIR__) . "/Model/Connexion.php";
class offer extends Connection {

    public function setOffer($titre,$entro,$domaine,$location,$description,$dc){
            $query="INSERT INTO offre (poste ,entreprise,domaine,localisation,description,recruteur_id ) 
            values (?,?,?,?,?,?) ";
            $stmt=$this->connect()->prepare($query);
            $stmt->bindParam(1,$titre);
            $stmt->bindParam(2,$entro);
            $stmt->bindParam(3,$domaine);
            $stmt->bindParam(4,$location);
            $stmt->bindParam(5,$description);
            $stmt->bindParam(6,$dc);
           if($stmt->execute()){
            header("location: ./userprofileRec.php");
           } else{
            echo  "error";
           }
        
    }
    public function getOffer(){
        $query="SELECT * FROM offre";
        $stmt=$this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}