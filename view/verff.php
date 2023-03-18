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
            <section id="first-section" class="welocme-page class-passage-container">
                <div class="main-header">
                    <h2 class="welcome-h2">Prêt à passer à l'étape suivante ?</h2>
                    <h4 class="welcome-p">Créez un compte ou connectez-vous.</h4>
                    <p class="welcome-p">mbbrcurbvubv achta jjbvjrjbjkvbbv jbvjbvrjmbqrjbjbjrqvjbq rbvbrjbmbrjbqr jbqjrebjbjbrejjer
                        jbqrjbjrjebv </p>
                </div>
            <form action="" method="post">
                <div class="main-body">
            
            <div class="inputContainer">
                        <label class="label" for="">Entree LE CODE <span style='color:red'>*</span></label>
                        <input class="input" type="number" name="code" id="email" minlengh="6" Srequired>
                        <div id="msg"></div>
                    </div>
            
                </div>
                <div class="welcome-footer flex-column">
                <input type="submit" class="input-welcome" id="input-email" value="verifie" name="vr">
                    <p class="welcome-p">Si voulez vous revenir page <a href="/public/auth" class="acceuille"> Acceuille ?</a></p>
            
                </div>

            </form>
                    
            </section>
        </div>
    </div>
</body>
