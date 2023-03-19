<?php
include_once dirname(__DIR__) . "/controller/ControllerCandidat.php";
    $Cont = new ControllerCandidat();
    $Cont->setChoix();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>User Fullname</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
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

</style>
</head>
<body><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<title>User Fullname</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">

<!-- Roboto Font -->
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

    </style>
</head>
<body>

    <div class="sidebar">

        <div class="toggle">
            <i class="bx bx-chevron-right"></i>
        </div>

        <div class="logo">
            <img src="https://cdn-icons-png.flaticon.com/512/1251/1251840.png" alt="...">
            <h3>USER</h3>
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
                    <a href="./userprofile.php">
                        <i class='bx bxs-user-detail'></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#/chat">
                        <i class='bx bx-chat' ></i>
                        <span>Chat</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#/poste">
                        <i class="bx bxs-bell"></i>
                        <span>Poste</span>
                    </a>
                </li>    
            </ul>

        </nav>

    </div>
<div class="container">
<div class="main-body">

<div class="row gutters-sm">
<div class="col-md-4 mb-3">
<div class="card">
<div class="card-body">
<div class="d-flex flex-column align-items-center text-center">
<img src="#" alt="achraf" class="rounded-circle" width="150" height="150">
<div class="mt-3">
<h4>
   <?php echo $_SESSION["nom"]. " ". $_SESSION["prenom"]  ?>  
</h4>
<p class="text-secondary mb-1"> </p>
<p class="text-muted font-size-sm">Kenitra, Morocco </p>
<button class="btn btn_outline">Message</button>
</div>
</div>
</div>
</div>
<div class="card mt-3">
<ul class="list-group list-group-flush">
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
<span class="text-secondary">https://sifter.com</span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
<span class="text-secondary">achraf</span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
<span class="text-secondary">@ashf</span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
<span class="text-secondary">ashf6</span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#047bff" class="bi bi-linkedin mr-2  text-primary" viewBox="0 0 16 16" >
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg>Facebook</h6>
<span class="text-secondary">ashf-link</span>

</li>
</ul>
</div>
</div>
<div class="col-md-8">
<div class="card mb-3">
<div class="card-body">
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Full Name</h6>
</div>
<div class="col-sm-9 text-secondary">
  <?php echo $_SESSION["nom"]. " ". $_SESSION["prenom"]  ?>  
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Email</h6>
</div>
<div class="col-sm-9 text-secondary">
<a href="#"> 
    <?php echo $_SESSION["gmail"]  ?> 
</a>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Phone</h6>
</div>
<div class="col-sm-9 text-secondary">
(212) 53738-2682
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Mobile</h6>
</div>
<div class="col-sm-9 text-secondary">
(212) 66174-7280
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Address</h6>
</div>
<div class="col-sm-9 text-secondary">
Kenitra , Morocco 
 </div>
</div>
<hr>
<div class="row">
<div class="col-sm-12">
<a class="btn btn_outlin" href="#">Edit</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
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
