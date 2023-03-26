<?php
include_once dirname(__DIR__) . "/controller/ControllerCandidat.php";
    $Cont = new ControllerCandidat();
    $Cont->setChoix();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheets/auth.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />

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
        <section id="third-section" class="welocme-page class-passage-container">
                <div class="main-header">
                <div class="welcome-head flex-column">
                        <h1 class="welcome-h1">Bienvenue <?php 
                        echo $_SESSION["nom"] ?></h1>
                        <p>Choisi la bon choix</p>
                    </div>
                </div>
                <div class="main-body">
                <div class="choice-can ">
                    <div class="flex items-center justify-center ">
                    <form action="" method="post" enctype="multipart/form-data">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center border-2 rounded-lg cursor-pointer ">
                            <div class="flex flex-col items-center justify-center ">
                                <p class="cv-href" id="result"><span class="font-semibold">Click to upload</span></p>
                            </div>
                            <input id="dropzone-file"  type="file" name="cv"  class="hidden" />
                            <input type="submit" class="hidden" name="ch" value="Continuer" > 
                        </label>
                    </form>
                    </div> 
                    <div class="create-cv">
                        <a href="./info.php" class="cv-href">Creer un CV </a>
                    </div>
                </div>
                <div class="welcome-footer flex-column">
                    <p  class="welcome-p"> Si vous n avez un cv creyer un ? </p>
                    <p class="welcome-p">Si voulez vous revenir page <a href="/public/auth" class="acceuille"> Acceuille ?</a></p>
                </div>
            </section>
    </div>
</body>
<script>
document.getElementById("dropzone-file").onchange = function() {
    document.getElementById("result").innerHTML = "<span class='font-semibold'>Uploaded</span>";
    document.getElementsByName("ch")[0].click();
};
</script>
</html>