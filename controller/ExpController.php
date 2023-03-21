<?php
require_once dirname(__DIR__) . '/Model/Exep.php'; 

class ExpController extends Exp{


    function Update(){
        if(isset($_POST["sumbit"])){
            $cont= "ecperience-list";
            $dd="datedebut-experience";
            $df="datefin-experience";
            $so="social";
            $tr="titre";
            $dec="Description";
        for($i=0;$i<count($_POST["ecperience-list"]);$i++){
            
            if(isset($_POST[$cont][$i]) and !empty($_POST[$cont][$i])
            and isset($_POST[$dd][$i])and !empty($_POST[$dd][$i])
            and isset($_POST[$df][$i])and !empty($_POST[$df][$i])
            and isset($_POST[$so][$i])and !empty($_POST[$so][$i])and isset($_POST[$tr][$i])and !empty($_POST[$tr][$i])
            and isset($_POST[$dec])and !empty($_POST[$dec])){
                $this->setExp($_POST[$cont][$i],$_POST[$dd][$i],$_POST[$df][$i],$_POST[$so][$i],$_POST[$tr][$i],$_POST[$dec][$i],$_SESSION["id"]);
                }
        }
    }
    
    }
  

}