<?php
require_once dirname(__DIR__) . '/Model/Message.php'; 

class messageController extends message{

    public function envoye (){
        if(isset($_POST["sumbit"])){
            if(isset($_POST['message']) and !empty($_POST['message'])){
               if($this->setMessage($_SESSION["id"],$_SESSION["type"],$_GET['id'],'Candidat',$_POST['message'])){
                return $_POST['message'] ;
               }
            }
        }
    }
    public function getMessageS(){

       $sender= $this->getMesSender($_SESSION["id"],$_SESSION["reci"]);
       return $sender;
    }

}