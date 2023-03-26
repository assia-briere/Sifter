<?php 

require_once dirname(__DIR__) . "/Model/Connexion.php";
class Exp extends Connection {

    public function setExp($exp,$dateDebut,$DateFin,$societe,$titre,$desc,$id){
    
    $query="INSERT INTO poste (nom,dateDebut,dateFin,societe,optionS,description,idc) value (:exp,:datD,:datF,:soc,:titr,:descr,:id)";
    $stmt = $this->connect()->prepare($query);
    $stmt->bindParam(":exp", $exp);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":datD", $dateDebut);
    $stmt->bindParam(":datF", $DateFin);
    $stmt->bindParam(":soc", $societe);
    $stmt->bindParam(":titr", $titre);
    $stmt->bindParam(":descr", $desc);
    $stmt->execute();
    }
    public function Expscore($id){
        $query="SELECT TIMESTAMPDIFF(MONTH,dateDebut,dateFin)as durre ,nom FROM poste WHERE idc=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $exps= $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $exps;

    }
    public  function getExp($id){
        $query="SELECT  * FROM  poste WHERE  idc=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $num = $stmt->rowCount();

        $exp= $stmt->fetch(PDO::FETCH_ASSOC);
        return  $exp;
    }
}