<?php
require_once dirname(__DIR__) . '/Model/Exep.php'; 

class ExpController extends Exp{


    function Update(){
        if(isset($_POST["sumbit"])){
            $idx=$_SESSION["js"];
            if(isset($_POST["ecperience-list"]) and !empty($_POST["ecperience-list"])
            and isset($_POST["datedebut-experience"])and !empty($_POST["datedebut-experience"])
            and isset($_POST["datefin-experience"])and !empty($_POST["datefin-experience"])
            and isset($_POST["social"])and !empty($_POST["social"])and isset($_POST["titre"])and !empty($_POST["titre"])
            and isset($_POST["Description"])and !empty($_POST["Description"])){
            $this->setExp($_POST["ecperience-list"],$_POST["datedebut-experience"],$_POST["datefin-experience"]
            ,$_POST["social"],$_POST["faculte"],$_POST["Description"],$_SESSION["id"]);
            
            }
        for($i=1;$i<count($idx["Expérience"]);$i++){
            $cont= "ecperience-list".'-' . ($i+1);
            $dd="datedebut-experience".'-' . ($i+1);
            $df="datefin-experience".'-' . ($i+1);
            $so="social".'-' . ($i+1);
            $tr="titre".'-' . ($i+1);
            $dec="Description".'-' . ($i+1);
            if(isset($_POST[$cont]) and !empty($_POST[$cont])
            and isset($_POST[$dd])and !empty($_POST[$dd])
            and isset($_POST[$df])and !empty($_POST[$df])
            and isset($_POST[$so])and !empty($_POST[$so])and isset($_POST[$tr])and !empty($_POST[$tr])
            and isset($_POST[$dec])and !empty($_POST[$dec])){
                $this->setExp($_POST[$cont],$_POST[$dd],$_POST[$df],$_POST[$so],$_POST[$tr],$_POST[$dec],$_SESSION["id"]);
                }
        }
    }
    
    }
  

}