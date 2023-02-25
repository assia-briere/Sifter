
<?php 
class Licence extends Formation{
    private $faculte;

    public function ajouterL($dateDebut, $dateFin, $idc ,$faculte ){
        $this->dateDebut=$dateDebut;
        $this->dateFin=$dateFin;
        $this->faculte=$faculte;
        $this->idc=$idc;
        $sql = "INSERT INTO Licence (dateDebut , datefin , faculte , idc) VALUE (:dateDebut , : dateFin , :faculte , :idc) ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":dateDebut", $this->dateDebut);
        $stmt->bindParam(":dateFin", $this->dateFin);
        $stmt->bindParam(":faculte", $this->faculte);
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