<?php
require_once dirname(__DIR__) . '/Model/Langue.php'; 
require_once dirname(__DIR__) .'/vendor/autoload.php';

use Smalot\PdfParser\Parser;
class LangController extends langue{


    function Update(){
        if(isset($_POST["sumbit"])){
            $idx=$_SESSION["js"];
            if(isset($_POST["langage-nom"]) and !empty($_POST["langage-nom"]) and isset($_POST["langage-niveaux"])and !empty($_POST["langage-niveaux"])){
             $this->setLang($_POST["langage-nom"],$_POST["langage-niveaux"],$_SESSION["id"]);
            
            }
          for($i=1;$i<count($idx["Langues"]);$i++){
            $cont= "langage-nom".'-' . ($i+1);
            $dom="langage-niveaux".'-' . ($i+1);
            if(isset($_POST[$cont]) and !empty($_POST[$cont]) and isset($_POST[$dom])and !empty($_POST[$dom])){
                $this->setLang($_POST[$cont],$_POST[$dom],$_SESSION["id"]);
                }
        }
    }
    
    }
  

}