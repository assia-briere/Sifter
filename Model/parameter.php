<?php 

require_once dirname(__DIR__) . "/Model/Connexion.php";



class parameter extends Connection {

  


    public function setParam($id,$dom,$idcom,$niv,$lang,$exp){
      $query = "INSERT INTO  `param` (domaine,idcom,nivEtud	,Exp,lang,idR) value (:dom, :idc,:niv,:exp,:lang,:idR)";
      $stmt= $this->connect()->prepare($query);
      $stmt->bindParam(":dom",$dom);
      $stmt->bindParam(":idc",$idcom);
      $stmt->bindParam(":niv",$niv);
      $stmt->bindParam(":lang",$lang);
      $stmt->bindParam(":exp",$exp);
      $stmt->bindParam(":idR",$id);
      try{
        $stmt->execute();
        header("location: ../view/userprofile.php");
      }
      catch(Exception $e){
        echo "Error ";
      }
    }


}