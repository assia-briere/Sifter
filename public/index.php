<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/stylesheets/auth.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.3.0/css/all.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="/javascript/main.js" defer></script>
    <title>Document</title>
</head>
<body>
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
                        <input class="input-welcome" type="submit" id="input-emai" name="candidat" value="Recherche d' emploi" >
                        <input class="input-welcome" type="submit" id="input-email" name="recruteur" value="Je Suis un Employeur">
                        <p class="welcome-p">Si voulez vous revenir page <a href="/public/" class="acceuille"> Acceuille ?</a></p>
                    </div>
                </div>
            </main>
            <section id="first-section" class="welocme-page section1 class-passage-container">
                <div class="main-header">
                    <h2 class="welcome-h2">Prêt à passer à l'étape suivante ?</h2>
                    <h4 class="welcome-p">Créez un compte ou connectez-vous.</h4>
                    <p class="welcome-p">mbbrcurbvubv achta jjbvjrjbjkvbbv  jbvjbvrjmbqrjbjbjrqvjbq rbvbrjbmbrjbqr jbqjrebjbjbrejjer jbqrjbjrjebv </p>
                </div>
                <div class="main-body">
                    <form action="" class="form" method="post">
                        <div class="inputContainer">
                            <label class="label" for="">Entree votre Email<span style='color:red'>*</span></label>
                            <input class="input" type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                            <div id="msg"></div>    
                        </div>
                    </form>
                </div>
                <div class="welcome-footer flex-column">
                    <button type="sumbmit" class="button-next" id="first-button" >Continuer <i class="fa-duotone fa-arrow-right"></i></button>
                    <p class="welcome-p">Si voulez vous revenir page <a href="/public/auth" class="acceuille"> Acceuille ?</a></p>

                </div>
            </section>
            <section id="second-section" class="welocme-page class-passage-container">
                <div class="main-header">
                    <h2 class="welcome-h2">Prêt à passer à l'étape suivante ?</h2>
                    <h4 class="welcome-p">Créez un compte ou connectez-vous.</h4>
                    <p class="welcome-p">mbbrcurbvubv achta jjbvjrjbjkvbbv  jbvjbvrjmbqrjbjbjrqvjbq rbvbrjbmbrjbqr jbqjrebjbjbrejjer jbqrjbjrjebv </p>
                </div>
                <div class="main-body">
                    <form action="candidat.php" name="signin" class="form" id="form1" method="post" onsubmit="return validateForm()">
                        <div class="two-input flex-row">   <div class="inputContainer">
                                <label class="label" for="">Entrez votre Nom <span style='color:red'>*</span></label>
                                <input class="input-2 input" type="text" name="nom" id="nom" pattern="^[\w'\-,.][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$" required>
                            </div>
                            <div class="inputContainer">
                                <label class="label" for="">Entrez votre Prénom <span style='color:red'>*</span></label>
                                <input class="input-2 input" type="text" name="prenom" id="prenom" pattern="^[\w'\-,.][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$" required>
                                

                            </div>
                        </div>     
                        <div class="inputContainer">
                            <label class="label" for="">Entrez votre mot de pass <span style='color:red'>*</span></label>
                            <input class="input-2 input" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" name="pasword" id="password" required>
                        </div>
                        <div class="inputContainer">
                            <label class="label" for="">Entrez votre mot de pass <span style='color:red'>*</span></label>
                            <input class="input-2 input" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" name="confirm-password" id="confirm_password"  required>
                            <div class="mssg-error"></div>
                        </div>
                    
                </div>
                    <div class="welcome-footer flex-column">
                     <input type="submit" class="button-next" value="Continuer"> 
                     <!--<i class="fa-duotone fa-arrow-right"></i>-->
                    <p class="welcome-p">Si voulez vous revenir page <a href="/public/auth" class="acceuille"> Acceuille ?</a></p>
                </div>
                 </form>
            </section>
            
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>