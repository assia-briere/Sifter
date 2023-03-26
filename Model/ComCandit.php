<?php 

require_once dirname(__DIR__) . "/Model/Connexion.php";
require_once dirname(__DIR__) . "/Model/competences.php";
class ComCandidat extends Connection {

    public function setCom($nom,$dom,$id){

    $com=new Competences();
    $idc=$com->getCompetence($nom);
    if(empty($idc)){
        $com->setCompetences($nom,$dom);
        $idc=$com->getCompetence($nom);
    }
    $query="INSERT INTO competence (candidat_id,idcom) value (:id,:nom)";
    $stmt = $this->connect()->prepare($query);
    $stmt->bindParam(":nom", $idc["idcom"]);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    }
    function getCom($id){
        $query="SELECT  * FROM  competence WHERE  candidat_id=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(":id", $id);
     try {
         $stmt->execute();
        $num = $stmt->rowCount();

        $comp= $stmt->fetch(PDO::FETCH_ASSOC);

        return $num;
     } catch (Exception $e) {
        echo "error : ".$e->getMessage();
     }
       
    }

    
    function ContgetCom($id,$dom){
        $query="SELECT  * FROM  competence , competences  WHERE  candidat_id=:id and domaine =:dom and competence.idcom =competences.idcom ";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":dom", $dom);
       try{
        $stmt->execute();
        $num = $stmt->rowCount();

        $comp= $stmt->fetch(PDO::FETCH_ASSOC);

        return $num;
        
       } catch(Exception $e){
        echo "error : ".$e->getMessage();
    }
    }
}