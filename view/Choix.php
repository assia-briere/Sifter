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
            <main class="main">
                <div class="welocme-page flex-column">
                    <div class="welcome-head flex-column">
                        <img src="" alt="this welcome image" width="150" height="200">
                        <h1 class="welcome-h1">Bienvenue</h1>
                    </div>
                    <div class="welcome-body">
                        <h2 class="welcome-h2">Prét pour l'étape suivante ?</h2>
                        <p class="welcome-p">Crée un compte pour accéder à des outils pratiques</p>
                    </div>
                    <!-- CHOFI HNA BEDLI LIBGHITY TBEDLI   -->
                    <div class="welcome-footer flex-column input-email">
                        <form action="" class="form-client" method="post">
                            <input type="submit" class="input-welcome" id="input-emai" name="Can" value="Sign Up as a Candidat ">
                            <input type="submit" class="input-welcome" id="input-email" name="Rec" value="Sign Up as a Recruteur ">
                        </form>
                        <p class="welcome-p">Si voulez vous revenir page <a href="/public/" class="acceuille"> Acceuille ?</a></p>
                    </div>
                </div>
            </main>
        </div>
        </div>
    </body>        