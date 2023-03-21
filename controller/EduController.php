<?php
require_once dirname(__DIR__) . '/Model/Education.php'; 

class EduController extends Education{


    function Update(){
        if(isset($_POST["sumbit"])){
             $cont= "validationCustom07";
            $dd="datedebut";
            $df="datefin";
            $so="fillier";
            $tr="faculte";
        for($i=0;$i<count($_POST["validationCustom07"]);$i++){
           
            if(isset($_POST[$cont][$i]) and !empty($_POST[$cont][$i])
            and isset($_POST[$dd][$i])and !empty($_POST[$dd][$i])
            and isset($_POST[$df][$i])and !empty($_POST[$df][$i])
            and isset($_POST[$so][$i])and !empty($_POST[$so][$i])and isset($_POST[$tr][$i])and !empty($_POST[$tr][$i])){
                $this->setEducation($_POST[$cont][$i],$_POST[$dd][$i],$_POST[$df][$i],$_POST[$so][$i],$_POST[$tr][$i],$_SESSION["id"]);
                }
        }
    }
    
    }

    

}