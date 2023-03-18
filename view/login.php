<?php
include_once dirname(__DIR__) . "/controller/login.php";
    $Cont = new auth();
    $Cont->checked();
?>
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
            <form action="" name="signin" class="form welocme-page" id="form1" method="post" onsubmit="return validateForm()">
            <main >
                <div class="flex-column">
                    <div class="welcome-head flex-column">
                        <img src="" alt="this welcome image" width="150" height="200">
                        <h1 class="welcome-h1">Bienvenue</h1>
                    </div>
                    <div class="welcome-body">
                        <h2 class="welcome-h2">Prét pour l'étape suivante ?</h2>
                        <p class="welcome-p">Entre Votre Compte</p>
                    </div>
                    <!-- CHOFI HNA BEDLI LIBGHITY TBEDLI   -->
                    <div class="inputContainer">
                            <label class="label" for="">Entree votre Email<span style='color:red'>*</span></label>
                            <input class="input" type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                            <div id="msg"></div>    
                        </div>
                        <div class="inputContainer">
                            <label class="label" for="">Entrez votre mot de pass <span style='color:red'>*</span></label>
                            <input class="input-2 input" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" name="pasword" id="password" required>
                        </div>
                </div>
            </main>
            <div class="welcome-footer flex-column">
                    <input type="submit" class="button-next" name="cl"value="Continuer"> 
                    <!--<i class="fa-duotone fa-arrow-right"></i>-->
                    <p class="welcome-p">Si voulez vous revenir page <a href="/public/auth" class="acceuille"> Acceuille ?</a></p>
                </div>
        </form>  
        </div>

    </div>
 

</body>
</html>