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
                        <label for="dropzone-file" class="flex flex-col items-center justify-center border-2 border-blue-30 border-dashed rounded-lg cursor-pointer bg-blue-500 dark:hover:bg-gray-30 dark:bg-blue-700 hover:bg-gray-400 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center ">
                                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                <p class="mb-2 text-sm dark:text-gray-400"><span class="font-semibold">Click to upload</span></p>
                                <p class="text-xs text-bleu-500 dark:text-gray-400">PDF</p>
                            </div>
                            <input id="dropzone-file"  type="file" name="cv"  class="hidden" />
                            <input type="submit" class="button-next" name="ch"value="Continuer" onclick = "tst()"> 
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
</html>