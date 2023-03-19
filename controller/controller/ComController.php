<?php
require_once dirname(__DIR__) . '/Model/ComCandit.php'; 
require_once dirname(__DIR__) .'/vendor/autoload.php';

use Smalot\PdfParser\Parser;
class ComController extends ComCandidat{


    function Update(){
        if(isset($_POST["sumbit"])){
            $idx=$_SESSION["js"];
            $number = (int)$_SESSION["id"];
            if(isset($_POST["competence-nom"]) and !empty($_POST["competence-nom"]) and isset($_POST["competence-domain"])and !empty($_POST["competence-domain"])){
             $this->setCom($_POST["competence-nom"],$_POST["competence-domain"],$_SESSION["id"]);
            
            }
          for($i=1;$i<count($idx["Compétence"]);$i++){
            $cont= "competence-nom".'-' . ($i+1);
            $dom="competence-domain".'-' . ($i+1);
            if(isset($_POST[$cont]) and !empty($_POST[$cont]) and isset($_POST[$dom])and !empty($_POST[$dom])){
                $this->setCom($_POST[$cont],$_POST[$dom],$_SESSION["id"]);
                }
        }
    }
    
    }
  

}