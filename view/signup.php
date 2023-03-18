<?php
include_once dirname(__DIR__) . "/controller/login.php";
$Cont = new auth();
    $Cont->singUp();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheets/auth.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.3.0/css/all.css">
    <script src="../javascript/main.js" defer></script>
    <title>Document</title>
</head>

<body>


<div class="background">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
    <header>
        <nav>

        </nav>
    </header>
    <div class="container flex-column" id="container">
        <div class="class-passage-container">
        <section  class="welocme-page class-passage-container">
            <div class="main-header">
                <h2 class="welcome-h2">Prêt à passer à l'étape suivante ?</h2>
                <h4 class="welcome-p">Créez un compte ou connectez-vous.</h4>
                <p class="welcome-p">mbbrcurbvubv achta jjbvjrjbjkvbbv jbvjbvrjmbqrjbjbjrqvjbq rbvbrjbmbrjbqr jbqjrebjbjbrejjer
                    jbqrjbjrjebv </p>
            </div>
            <form action="" name="signin" class="form" id="form1" method="post" onsubmit="return validateForm()">
            <div class="main-body">
                <div class="two-input flex-row">
                    <div class="inputContainer">
                        <label class="label" for="">Entrez votre Nom <span style='color:red'>*</span></label>
                        <input class="input-2 input" type="text" name="nom" id="nom"
                            pattern="^[\w'\-,.][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$" required>
                    </div>
                    <div class="inputContainer">
                        <label class="label" for="">Entrez votre Prénom <span style='color:red'>*</span></label>
                        <input class="input-2 input" type="text" name="prenom" id="prenom"
                            pattern="^[\w'\-,.][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$" required>
        
        
                    </div>
                </div>
                <div class="inputContainer">
                    <label class="label" for="">Entrez votre mot de pass <span style='color:red'>*</span></label>
                    <input class="input-2 input" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"
                        name="pasword" id="password" required>
                </div>
                <div class="inputContainer">
                    <label class="label" for="">Entrez votre mot de pass <span style='color:red'>*</span></label>
                    <input class="input-2 input" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"
                        name="confirm-password" id="confirm_password" required>
                    <div class="mssg-error"></div>
                </div>
        
            </div>
            <div class="welcome-footer flex-column">
            <input type="submit" class="button-next" name="cs"value="Continuer"> 
                            <!--<i class="fa-duotone fa-arrow-right"></i>-->
                <p class="welcome-p">Si voulez vous revenir page <a href="/public/auth" class="acceuille"> Acceuille ?</a></p>
            </div>
            </form>  
        </section>
        </div>
    </div>
</body>