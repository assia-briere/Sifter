<?php
require_once dirname(__DIR__) . '/Model/offer.php'; 

class offerController  extends offer{

    public function envoye (){
        if(isset($_POST["sumbit"])){
               if($this->setOffer($_POST["titre"],$_POST["name"],$_POST['domaine'],$_POST['location'],$_POST['description'],$_SESSION["id"]));
        }
    }
    public function getMessageS(){

       $sender= $this->getMesSender($_SESSION["id"],$_SESSION["reci"]);
       return $sender;
    }

}