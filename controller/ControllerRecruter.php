<?php
require_once dirname(__DIR__) . "/Model/Recreteur.php"; 
class ControlleR extends Recruteur{


    public function signUp() {
        if (isset($_POST['ct'])) {
            if(isset($_POST['recruteur']) and !empty($_POST['recruteur'])){
                if ( isset($_POST['nom']) and isset($_POST['prenom'])and isset($_POST['email'])and isset($_POST['pasword'])) {
                    
                    $_SESSION['prenom'] = $_POST['prenom'];
                    $_SESSION['name'] = $_POST['nom'];
                    $_SESSION['pasword']=$_POST['pasword'];
                    $_SESSION['gmail'] = $_POST['email'];
                    $this->setUser($_POST['nom'],$_POST['prenom'] ,$_POST['email'] , $_POST['pasword'] );
                }
            }
    }
}

    public function logIn(){
        if (isset($_POST['cl'])) {
                if (  isset($_POST['email'])and isset($_POST['pasword'])) {
                    $this->getUser($_POST['email'] , $_POST['pasword'] );
                }
    }
    }


    public function setChoix(){

        if(isset($_POST['ch'])){
                if(isset($_FILES['cv'])){
            if(!empty($_FILES['cv'])){
                $pdf=$_FILES['cv']['name'];
                $pdf_type=$_FILES['cv']['type'];
                $pdf_size=$_FILES['cv']['size'];
                $pdf_tem_loc=$_FILES['cv']['tmp_name'];
                $pdf_store="pdf/".$pdf;

            move_uploaded_file($pdf_tem_loc,$pdf_store);
            if($this->choixCv($pdf)){
                echo "Done";
            }
               else{
                echo "hhh";
               }
            }
        }
  
    }
}
}