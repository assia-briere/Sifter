<?php 
class Candidat  {
    private $conn;
    private $table_name ="Candidat";
    public $nom;
    public $prenom;
    public $gmail;
    public $modePass;
    public $telephone; 

    public function __construct($db , $n , $p , $gmail , $md ,$telephone) {
        $this->conn = $db;
        $this->nom=$n;
        $this->prenom=$p;
        $this->gmail=$gmail;
        $this->modePass=$md;
        $this->telephone =$telephone;
    }
    
    
    public function login($gmail, $modePass) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE gmail = :gmail AND modPass = :modePass";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":gmail", $gmail);
        $stmt->bindParam(":modePass", $modePass);
        $stmt->execute();
        $num = $stmt->rowCount();
        $stmt->closeCursor();
        
        if ($num > 0) {
            echo "Vous êtes connecté.";
        } else {
            echo "Veuillez vérifier vos informations de connexion et réessayer.";
        }
    }

    public function signup() {
        $query = "INSERT INTO Candidat (nom, prenom, gmail, modPass, Tele) VALUES (:nom, :prenom, :gmail, :modePass, :telephone)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nom", $this->nom);
        $stmt->bindParam(":prenom", $this->prenom);
        $stmt->bindParam(":gmail", $this->gmail);
        $stmt->bindParam(":modePass", $this->modePass);
        $stmt->bindParam(":telephone", $this->telephone);
        try{
            if ($stmt->execute()) {
            return true ;
        }
        }catch(Exception $e){
            echo "error".$e->getMessage();
        }
        
        $stmt->closeCursor();
    }
}
?>