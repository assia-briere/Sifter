<?php
require_once dirname(__DIR__) . '/Model/Candidat.php'; 
require_once dirname(__DIR__) .'/vendor/autoload.php';

use Smalot\PdfParser\Parser;
class ControllerCandidat extends Candidat{


    public function signUp() {
        if (isset($_POST['EE'])) {
            $_SESSION["gmail"]=$_POST['email'];
            $verification_code = rand(100000, 999999);
            $_SESSION["code"]= $verification_code;
            $mail = new PHPMailer\PHPMailer\PHPMailer();
            
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'briereassil@gmail.com'; // replace with your Gmail email address
            $mail->Password = 'gvmobsrczpkxxibh'; // replace with your Gmail password
            $mail->SMTPSecure = 'tls'; // set TLS encryption
            $mail->Port = 587 ;
            // Set the email details
            $mail->setFrom('assbrtst@gmail.com', 'Sifter'); // replace with your name and email address
            $mail->addAddress($_POST['email'], 'Client');
            $mail->Subject = 'Verification ';
            $mail->Body = 'Ce message pour verfication de email  , voullez entre ce code de verfication :'.$verification_code ;
            
            // Attempt to send the email
            if ($mail->send()) {
                header("location: ../view/verff.php");
            } else {
                echo 'Error: ' . $mail->ErrorInfo;
            }
            
        }
        if(isset($_POST['vr'])){
            if($_SESSION["code"]==$_POST["code"]){
                header("location: ../view/signup.php");
            }
        }
        if(isset($_POST['cs'])){
            if ( isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['pasword']) and isset($_POST['confirm-password'])) {
                $this->setUser($_POST['nom'],$_POST['prenom'],$_SESSION["gmail"],$_POST['pasword']);
            }
            else{
                echo "error";
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
                $file=$_FILES['cv'];
                $file_data = file_get_contents($file['tmp_name']);
                
                $this->choixCv($file_data);
               }
            }
        }
    }
    public function getChoix(){
        
        $cv = $this->getCv();
        if(empty($cv)){
            return 0;
        }
        else{
                 $filename = 'output.pdf';
        $file = fopen($filename, 'wb');
        fwrite($file, $cv);
        fclose($file);

    // Chemin d'accès au fichier PDF
    $file_path = '../view/output.pdf';
    // Créer une instance du parser
    $parser = new Parser();

    // Extraire le texte de toutes les pages
    $text = '';
    $pdf = $parser->parseFile($file_path);
    $pages = $pdf->getPages();
    foreach ($pages as $page) {
    $text .= $page->getText();   
    }
    // Afficher le texte
    $json = $this->trosfCv($text);
    return $json;
        }
    }
}


