
<?php
include_once dirname(__DIR__) . "../../controller/ControllerCandidat.php";
include_once dirname(__DIR__) ."../../controller/OfferController.php";
    $Cont = new ControllerCandidat();
    $offer= new offerController();
    $Cont->setChoix();

    $candidats = $Cont->getsCandidats();

    $offer->envoye();
// loop through the results and do something with each row



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.3.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Roboto Font -->
<link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap"
    rel="stylesheet">

<style type="text/css">
    * {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    list-style: none;
    box-sizing: border-box;
}

body {
    height: 100vh;
    display: flex;
    flex-direction: row;
    background-size: cover;
    font-family: 'Roboto', sans-serif;
    background-color: #e2e8f0;
}
.container {
    margin: 0;
    padding: 0;
    /* width: 100%; */
}

.sidebar {
    width: 120px;
    height:100%;
    backdrop-filter: blur(6px);
    background: rgba(10, 10, 10, .65);
    box-shadow: 0 8px 32px rgb(2, 4, 24);
    border-right: 2px solid rgba(255, 255, 255, .09);
    transition: .4s ease-in-out;
}

.sidebar.open {
    width: 360px;
}

.sidebar .logo {
    width: 100%;
    height: 240px;
    padding: 40px 0;
    display: grid;
    align-items: center;
    justify-items: center;
}

.sidebar .logo img {
    width: 56px;
    transition: .4s;
}

.sidebar.open .logo img {
    width: 96px;
}

.sidebar .logo h3 {
    color: #fff;
    font-size: 36px;
    margin-top: 12px;
    font-variant: small-caps;
    pointer-events: none;
    scale: 0;
    opacity: 0;
}

.sidebar.open .logo h3 {
    scale: 1;
    opacity: 1;
    transition: .4s;
    transition-delay: .2s;
}

.sidebar .nav-title {
    color: #dadada;
    margin: 40px 0 18px;
    pointer-events: none;
    opacity: 0;
}

.sidebar.open .nav-title {
    opacity: 1;
    transition: .4s;
    transition-delay: .2s;
}

.sidebar nav {
    padding: 0 30px;
}

.sidebar nav .nav-item {
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    border-radius: 4px;
    width: 100%;
    height: 56px;
    padding: 0 16px;
    margin: 8px 0;
    color: #fff;
    transition: .3s;
}

.sidebar nav .nav-item.active {
    background: #ff328e !important;
}

.sidebar nav .nav-item:hover {
    background: rgba(255, 255, 255, .1);
}

.sidebar nav .nav-item i {
    font-size: 26px;
}

.sidebar nav .nav-item span {
    font-size: 18px;
    margin-left: 8px;
    opacity: 0;
    pointer-events: none;
}

.sidebar.open nav .nav-item span {
    opacity: 1;
    pointer-events: visible;
    transition: .4s;
    transition-delay: .2s;
}



.sidebar.open hr {
    opacity: 1;
    transition: .4s;
}

.sidebar .toggle {
    cursor: pointer;
    position: absolute;
    color: #fff;
    top: 180px;
    right: -20px;
    font-size: 38px;
    line-height: 50%;
    text-align: center;
    border-radius: 50%;
    padding: 2px 0 2px 2px;
    background: linear-gradient(
        90deg,
        transparent 50%,
        rgba(10, 10, 10, .65) 50%
    );
}

.sidebar.open .toggle {
    transform: translateY(45px);
}

.sidebar .toggle i {
    transition: .4s linear;
}

.sidebar.open .toggle i {
    transform: rotateY(180deg);
}
a {
    
    text-decoration: none;
    color: #fff;
    display: flex;
    width: 100%;
    flex-direction: row;
}
.main-body {
    padding: 15px;
    margin: 47px 0px;
}

img.rounded-circle {
    background: #E9B7DB;
}

.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
    background-color: #f0edfa !important;
}
.list-group-item{
    background-color: #f0edfa !important;

}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
    
}
.col-sm-12 {
    text-align: center;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
.btn_outline {
    color: #8A45C8;
    border-color: #8A45C8;
}
.btn_outlin {
    color: #E9B7DB;
   background-color: #8A45C8;
}
.btn_outlin:hover {
    color: #8A45C8;
   background-color: #E9B7DB;
}
.btn_outline:hover {
    background:#8A45C8;
    color:#E9B7DB;
}
.col-sm-9.text-secondary>a {
    color: #8A45C8;
}

    	
.main-body {
    padding: 15px;
}

img.rounded-circle {
    background: #E9B7DB;
}

.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}
.col-sm-12 {
    text-align: center;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
.btn_outline {
    color: #8A45C8;
    border-color: #8A45C8;
}
.btn_outlin {
    color: #E9B7DB;
   background-color: #8A45C8;
}
.btn_outlin:hover {
    color: #8A45C8;
   background-color: #E9B7DB;
}
.btn_outline:hover {
    background:#8A45C8;
    color:#E9B7DB;
}
.col-sm-9.text-secondary>a {
    color: #8A45C8;
}
.container {
  max-width: 800px;
  margin: 100px auto;
  padding: 20px;
}

.title {
  display: block;
  font-size: 28px;
  font-weight: bold;
  margin-bottom: 20px;
}

.col-md {
  display: inline-block;
  width: 48%;
  margin-bottom: 20px;
}

label {
  display: block;
  font-size: 16px;
  font-weight: bold;
  margin-bottom: 5px;
}

input[type="text"],
input[type="number"],
textarea {
  display: block;
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
  margin-bottom: 10px;
}

input[type="submit"] {
  background-color: #8a45c8;;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color:#b35ece ;
}
</style>
</head>
<body>

    <div class="sidebar">

        <div class="toggle">
            <i class="bx bx-chevron-right"></i>
        </div>

        <div class="logo">
            <img src="https://cdn-icons-png.flaticon.com/512/1251/1251840.png" alt="...">
            <h3><?php echo $_SESSION["nom"]. " ". $_SESSION["prenom"]  ?></h3>
        </div>

        <nav>

            <div class="nav-title">
                MENU
            </div>

            <ul>
                <li class="nav-item ">
                    <a href="./dashboard.php">
                        <i class="bx bxs-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="./userprofileRec.php">
                        <i class='bx bxs-user-detail'></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./chat">
                        <i class='bx bx-chat' ></i>
                        <span>Chat</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./offer.php">
                        <i class="bx bxs-bell"></i>
                        <span>Poste</span>
                    </a>
                </li>    
            </ul>

        </nav>

    </div>
    <div  class="container">

    <span class="title">Nouveau Offer</span>

<form action="" method="POST">
    <div class="col-md">
        <label for="job_title">Titre du poste :</label>
  <input type="text" id="job_title" name="titre"><br>
    </div>

<div class="col-md">
    <label for="company_name">Nom de l'entreprise :</label>
  <input type="text" id="company_name" name="name"><br>
</div>
  
<div class="col-md">
  <label for="location">Emplacement :</label>
  <input type="text" id="location" row="3"name="location"><br>
</div>

<div class="col-md"> 
    <label for="domaine">domaine  :</label>
  <input type="number" id="salary" name="domaine"><br>
    
</div>
 
  <div class="col-md">
    <label for="job_description">Description du poste :</label>
  <textarea id="job_description" name="description" row="10"></textarea><br>
    </div>
  
  <div class="col-md">
     <input type="submit" value="Soumettre l'offre" name="sumbit">
    </div>
 
</form>
</div>
<script>
        const sidebar = document.querySelector('.sidebar');
        const navItems = document.querySelectorAll('nav .nav-item');
        const toggle = document.querySelector('.sidebar .toggle');
toggle.addEventListener('click', () => {
    if (sidebar.className === 'sidebar')
        sidebar.classList.add('open');
    else
        sidebar.classList.remove('open');
});
navItems.forEach(navItem => {
    navItem.addEventListener('click', () => {
        navItems.forEach(navItem => {
            navItem.classList.remove('active');
        });
        navItem.classList.add('active');
    });
});
    </script>
</body>
</html>