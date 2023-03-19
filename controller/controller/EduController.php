<?php
require_once dirname(__DIR__) . '/Model/Education.php'; 

class EduController extends Education{


    function Update(){
        if(isset($_POST["sumbit"])){
            $idx=$_SESSION["js"];
            if(isset($_POST["validationCustom07"]) and !empty($_POST["validationCustom07"])
            and isset($_POST["datedebut"])and !empty($_POST["datedebut"])
            and isset($_POST["datefin"])and !empty($_POST["datefin"])
            and isset($_POST["fillier"])and !empty($_POST["fillier"])and isset($_POST["faculte"])and !empty($_POST["faculte"])){
            $this->setEducation($_POST["validationCustom07"],$_POST["datedebut"],$_POST["datefin"]
            ,$_POST["fillier"],$_POST["faculte"],$_SESSION["id"]);
            
            }
        for($i=1;$i<count($idx["Education"]);$i++){
            $cont= "validationCustom07".'-' . ($i+1);
            $dd="datedebut".'-' . ($i+1);
            $df="datefin".'-' . ($i+1);
            $so="fillier".'-' . ($i+1);
            $tr="faculte".'-' . ($i+1);
            if(isset($_POST[$cont]) and !empty($_POST[$cont])
            and isset($_POST[$dd])and !empty($_POST[$dd])
            and isset($_POST[$df])and !empty($_POST[$df])
            and isset($_POST[$so])and !empty($_POST[$so])and isset($_POST[$tr])and !empty($_POST[$tr])){
                $this->setEducation($_POST[$cont],$_POST[$dd],$_POST[$df],$_POST[$so],$_POST[$tr],$_SESSION["id"]);
                }
        }
    }
    
    }

    

}