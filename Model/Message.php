<?php 

require_once dirname(__DIR__) . "/Model/Connexion.php";
class message extends Connection {
    



    public function setMessage($sender,$sender_type,$reci,$reci_type,$message){
        $query="INSERT INTO messages (sender_id ,sender_type,recipient_id,recipient_type,message_text,timestamp ) values (?,?,?,?,?,NOW()) ";
        $stmt=$this->connect()->prepare($query);
        $stmt->bindParam(1,$sender);
        $stmt->bindParam(2,$sender_type);
        $stmt->bindParam(3,$reci);
        $stmt->bindParam(4,$reci_type);
        $stmt->bindParam(5,$message);
       if($stmt->execute()){
        return true ;
       } else{
        return false;
       }
    }

    public function getMesSender($sender , $reci ){
     $query = "SELECT * FROM messages where (sender_id=? and recipient_id=?) or  (sender_id=? and recipient_id=?)  ORDER BY timestamp DESC ";
     $stmt=$this->connect()->prepare($query);
     $stmt->bindParam(1,$sender);
     $stmt->bindParam(2,$reci);
     $stmt->bindParam(4,$sender);
     $stmt->bindParam(3,$reci);
     if($stmt->execute()){
        $mesSend = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
        return $mesSend;
       }
    }

}

