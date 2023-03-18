<?php 

require_once dirname(__DIR__) . "/Model/Connexion.php";
class langue extends Connection {

    public function setLang($lang,$niv,$id){
    
    $query="INSERT INTO langues (nom,nv,idc) value (:nom,:nv,:id)";
    $stmt = $this->connect()->prepare($query);
    $stmt->bindParam(":nom", $lang);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nv", $niv);
    $stmt->execute();
    }

    function getLang($id){
        $query="SELECT  * FROM  langues WHERE  idc=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $num = $stmt->rowCount();

        $lang= $stmt->fetch(PDO::FETCH_ASSOC);
        return  $lang;
    }
}