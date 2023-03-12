<?php
require_once dirname(__DIR__) . '/Model/Candidat.php'; 
require_once dirname(__DIR__) . '/Model/Recreteur.php';
class login{


    public function checked(){

        if (isset($_POST['cl'])) {
            if (  isset($_POST['email'])and isset($_POST['pasword'])) {
                $Cont = new Candidat();
                $Rec =new Recruteur();
                if($Cont->getUser($_POST['email'] , $_POST['pasword'] )){
                    header('location: ../view/Candidat.php');
                    exit();
                }else if( $Rec->getUser($_POST['email'] , $_POST['pasword'] )){
                    echo "Hi";
                }
            }
        }
    }
}

?>