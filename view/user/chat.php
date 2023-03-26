<?php
include_once dirname(__DIR__) . "../../controller/ControllerCandidat.php";
include_once dirname(__DIR__) . "../../controller/MessageConroller.php";
$msg = new messageController();
$test= $msg->envoye();

$Cont = new ControllerCandidat();
$Cont->setChoix();
$candidats = $Cont->getCandid();

?>

<!DOCTYPE html>
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

.col-md-8{
    margin: 200px;
    padding: 50px;
    z-index: 1;
    height: 300px; /* set the desired height */
}
#message-box{
    height: 300px;
    overflow-y: scroll;
}

.send{
    text-align: left;
    /* color: seashell; */
}

.sendp{
    text-align: left;
    margin: 0% 70% 0% 0% ;
    background: rgba(10, 10, 10, .65);
    
    border-radius:25px;
    padding: 2%;
    color: seashell;
}
.recipent
{  text-align: right;
    /* color: seashell; */
}
.recipentp
{  text-align: right;
    background:#8A45C8;
    margin: 0% 0% 0% 70% ;
    border-radius:25px;
    color: seashell;
    padding: 2%;
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
                <li class="nav-item ">
                    <a href="./userprofile.php">
                        <i class='bx bxs-user-detail'></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="./listeChat.php">
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
		<div class="row">
			<div class="col-md-8">
				<div id="message-box">
						
					<!-- <?php  ?> -->
				</div>
				<form id="message-form" method="POST" action="">
					<div class="form-group">
						<textarea class="form-control" id="msg" name="message" rows="3" placeholder="Votre message"></textarea>
					</div>
					<button type="submit" class="btn btn-primary" name="sumbit">Envoyer</button>
				</form>
			</div>
		</div>
	</div>
    
</body>

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
    <?php $_SESSION["reci"]=$_GET['id']?>
    var incoming_id = <?php echo  $_SESSION["id"]; ?>;
    var chatBox = document.getElementById('message-box');
    setInterval(() =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../../controller/tst.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            chatBox.innerHTML = data;
            if(!chatBox.classList.contains("active")){
                // scrollToBottom();
              }
          }
      }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("incoming_id="+incoming_id);
    },500); 
     </script>
</html>