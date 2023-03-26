<?php 
require_once dirname(__DIR__) . "/Model/Connexion.php";
class Recruteur extends Connection {

    public function getUser($gmail, $modePass) {
        $query = "SELECT * FROM recruteur  WHERE gmail = :gmail AND modePass = :modePass";
        $stmt = $this->connect()->prepare($query);
         $stmt->bindParam(":gmail", $gmail);
         $stmt->bindParam(":modePass", $modePass);
        $stmt->execute();
        $num = $stmt->rowCount();
        
        if($num==0){
        return false;}
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        $_SESSION["id"] = $user["id"];
        $_SESSION["gmail"] = $gmail;
        $_SESSION["type"]='recruteur';
        $_SESSION["nom"]=$user["nom"];
        $_SESSION["prenom"]=$user["prenom"];


        
        $stmt->closeCursor();
        return true;
    }
    
    public function setUser($name,$prenom,$gmail,$modePass) {
        $query = "INSERT INTO recruteur (nom, prenom, gmail, modePass) VALUES (:nom, :prenom, :gmail, :modePass)";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(":nom", $name);
        $stmt->bindParam(":prenom", $prenom);
        $stmt->bindParam(":gmail", $gmail);
        $stmt->bindParam(":modePass", $modePass);


        try{
            $stmt->execute();
            $t=$this->getUser($gmail,$modePass);
              header("location: ../view/param.php");
                exit();
        }catch(Exception $e){
            echo "error : ".$e->getMessage();
        }
        
        $stmt->closeCursor();
    }
    
    public function getsRecruteurs(){
        try {
             // connect to the database using the parent class method
             $pdo = $this->connect();
             
             // prepare the SQL query
             $query = "SELECT * FROM recruteur ";
                       
             // execute the query and fetch the results
            $stmt = $pdo->query($query);
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
             
             return $results;
         } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
         }
        }
}
?>