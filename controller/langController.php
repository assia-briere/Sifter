<?php
require_once dirname(__DIR__) . '/Model/Langue.php'; 
require_once dirname(__DIR__) .'/vendor/autoload.php';

use Smalot\PdfParser\Parser;
class LangController extends langue{


    function Update(){
        if(isset($_POST["sumbit"])){
            $cont= "langage-nom";
            $dom="langage-niveaux";
          for($i=0;$i<count($_POST["langage-nom"]);$i++){
            
            if(isset($_POST[$cont][$i]) and !empty($_POST[$cont][$i]) and isset($_POST[$dom][$i])and !empty($_POST[$dom][$i])){
                $this->setLang($_POST[$cont][$i],$_POST[$dom][$i],$_SESSION["id"]);
                }
        }
    }
    
    }
    

}