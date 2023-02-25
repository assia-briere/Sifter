<?php 
class bac extends Formation{
    private $lycce;

    public function ajouterB($dateDebut, $dateFin, $idc ,$lycce ){
        $this->dateDebut=$dateDebut;
        $this->dateFin=$dateFin;
        $this->lycce=$lycce;
        $this->idc=$idc;
        $sql = "INSERT INTO bac (dateDebut , datefin , lycce , idc) VALUE (:dateDebut , : dateFin , :lycce , :idc)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":dateDebut", $this->dateDebut);
        $stmt->bindParam(":dateFin", $this->dateFin);
        $stmt->bindParam(":lycce", $this->lycce);
        $stmt->bindParam(":idc", $this->idc);

        if($stmt->execute()){
            echo "votre licence est bien ajouter";
        }
        else{
            echo " error";
        }
    }
}
?>