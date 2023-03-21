<?php
require_once dirname(__DIR__) . '/Model/ComCandit.php'; 
require_once dirname(__DIR__) . '/Model/competences.php';
require_once dirname(__DIR__) .'/vendor/autoload.php';

use Smalot\PdfParser\Parser;
class ComController extends ComCandidat{


    function Update(){
        if(isset($_POST["sumbit"])){
            $idx=$_SESSION["js"];
            $number = (int)$_SESSION["id"];
             $cont= "competence-nom";
            $dom="competence-domain";
          for($i=0;$i<count($_POST["competence-nom"]);$i++){
           
            if(isset($_POST[$cont][$i]) and !empty($_POST[$cont][$i]) and isset($_POST[$dom][$i])and !empty($_POST[$dom][$i])){
                $this->setCom($_POST[$cont][$i],$_POST[$dom][$i],$_SESSION["id"]);
                }
        }
    }
    }

  

}