<?php
require_once dirname(__DIR__) . '/Model/Candidat.php'; 
require_once dirname(__DIR__) . '/Model/Recreteur.php';
require_once dirname(__DIR__) .'/vendor/autoload.php';

use Smalot\PdfParser\Parser;
class auth{


    public function checked(){

        if (isset($_POST['cl'])) {
            if (isset($_POST['email']) and isset($_POST['pasword'])) {
                $Cont = new Candidat();
                $Rec =new Recruteur();
                if($Cont->getUser($_POST['email'] , $_POST['pasword'] )){
                    if(!empty($_SESSION["Tele"])){
                        header('location: ../view/dashboard.php');
                        exit();
                    }
                    header('location: ../view/Candidat.php');
                    exit();
                }
                else if($Rec->getUser($_POST['email'],$_POST['pasword'] )){
                    header('location: ../view/param.php');
                    exit();
                }
            }
        }
    }
     
    public function singUp(){
        

        if(isset($_POST['Can'])){
            $_SESSION["user"]="Candidat";
            header("location: ../view/email.php");
            exit();
        }else if(isset($_POST['Rec'])){
            $_SESSION["user"]="Rec";
            header("location: ../view/email.php");
            exit();
        }

        if (isset($_POST['EE'])) {
            $_SESSION["gmail"]=$_POST['email'];
            $verification_code = rand(100000, 999999);
            $_SESSION["code"]= $verification_code;
            $mail = new PHPMailer\PHPMailer\PHPMailer();
            
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'assbrtst@gmail.com'; // replace with your Gmail email address
            $mail->Password = 'ddnymzrxxlgnzcjn'; // replace with your Gmail password
            $mail->SMTPSecure = 'tls'; // set TLS encryption
            $mail->Port = 587 ;
            // Set the email details
            $mail->setFrom('assbrtst@gmail.com', 'Sifter'); // replace with your name and email address
            $mail->addAddress($_POST['email'], 'Client');
            $mail->Subject = 'Verification ';
            $mail->Body = '<html><body><h1>Ce message pour verification de email, veuillez entrer ce code de verification:</h1>'.$verification_code.'</body></html>';
            $mail->isHTML(true);
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
                if($_SESSION["user"]=="Candidat"){
                    $Cont = new Candidat();
                    $Cont->setUser($_POST['nom'],$_POST['prenom'],$_SESSION["gmail"],$_POST['pasword']);
                }else if($_SESSION["user"]=="Rec"){
                    $Rec =new Recruteur();
                    $Rec->setUser($_POST['nom'],$_POST['prenom'],$_SESSION["gmail"],$_POST['pasword']);
                }
            }
            else{
                echo "error";
            }
        }
    }
}

?>