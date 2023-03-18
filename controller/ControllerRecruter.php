<?php
require_once dirname(__DIR__) . "/Model/Recreteur.php"; 
class ControlleR extends Recruteur{



    public function setParam(){
        if(isset($_POST["update"])){
            header("location: ../view/userprofile.html");
        }
    }
}