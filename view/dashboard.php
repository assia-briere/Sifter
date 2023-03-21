<?php
include_once dirname(__DIR__) . "/controller/ControllerCandidat.php";
    $Cont = new ControllerCandidat();
    $Cont->setChoix();

    
    $candidats = $Cont->getsCandidats();;

// loop through the results and do something with each row


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BoxIcons v2.1.2 -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <!-- Roboto Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- CSS File -->
    <style>
        * {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    list-style: none;
    box-sizing: border-box;
}
body {
    
    background-size: cover;
    font-family: 'Roboto', sans-serif;
    display: flex;
    flex-direction: row;
}
.sidebar {
    width: 120px;
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
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap");

.elements {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    align-items: center;
    justify-content: center;
}
.container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  max-width: 1200px;
  margin-block: 2rem;
  gap: 2rem;
}

img {
  max-width: 100%;
  display: block;
  object-fit: cover;
}

.card {
    display: flex;
    flex-direction: column;
    overflow: hidden;
    box-shadow: 0 0.1rem 1rem rgb(0 0 0 / 10%);
    border-radius: 1em;
    background: #f0edfa;;
    margin: 8px 30px;
     max-width: 40%;

}



.card__body {
  padding: 1rem;
  display: flex;
  flex-direction: column;
  gap: .5rem;
}


.tag {
  align-self: flex-start;
  padding: .25em .75em;
  border-radius: 1em;
  font-size: .75rem;
}

.tag + .tag {
  margin-left: .5em;
}



.tag-brown {
  background: #D1913C;
background: linear-gradient(to bottom, #FFD194, #D1913C);
  color: #fafafa;
}

.tag-red {
  background: #cb2d3e;
background: linear-gradient(to bottom, #ef473a, #cb2d3e);
  color: #fafafa;
}

.card__body h4 {
  font-size: 1.5rem;
  text-transform: capitalize;
}

.card__footer {
  display: flex;
  padding: 1rem;
  margin-top: auto;
}

.user {
  display: flex;
    gap: 0.5rem;
    margin: 14px;
}

.user__image {
  border-radius: 50%;
}

.user__info > small {
  color: #666;
}
.hon{
    color:#666;
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
            <h3> <?php echo $_SESSION["nom"]." ". $_SESSION["prenom"]  ?>  </h3>
        </div>
        <nav>
            <div class="nav-title">
                MENU
            </div>
            <ul>
                <li class="nav-item active">
                    <a href="./dashboard.php">
                        <i class="bx bxs-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
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
                    <a href="./Recpost.php">
                        <i class="bx bxs-bell"></i>
                        <span>Poste</span>
                    </a>
                </li>    
            </ul>
        </nav>
    </div>
    <div class="container">
       <div class="elements">
    <?php
         $i=0;
        foreach ($candidats as $row) {
            $i++;
    // access the values using the column names as keys
    $idc = $row['idc'];
    $nom = $row['nom'];
    $prenom = $row['prenom'];
    $gmail = $row['gmail'];
    $modPass = $row['modPass'];
    $Tele = $row['Tele'];
    $ville = $row['ville'];
    $paye = $row['paye'];
    $photo = $row['photo'];
    $CV = $row['CV'];
    $Score = $row['Score'];
    $domaine = $row['domaine'];
    $description = $row['description'];
    
    // do something with the values

    
    // ...
    
    
           
    
    ?>
        <div class="card">
            <div class="user">
                <img src="https://i.pravatar.cc/40?img=<?php echo $i?>" alt="user_image" class="user_image">
                <div class="user__info">
                <h5><a class="hon" href="./user/userprofile.php?id=<?php echo $idc?>"><?php echo  $nom." ".$prenom ?></h5></a>
                <input type="hidden" value="<?php echo $idc?>">
                <small>Score <?php echo $Score?></small>
                </div>
            </div>
            <div class="card__body">
            <span class="tag tag-red"><?php echo "$domaine"; ?> </span>
            <h4></h4>
            <p><?php echo "$description"?></p>
            </div>
            <div class="card__footer">
            
            </div>
        </div>
<?php
}
?>
</div>
</div>


    <!-- JS File -->
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
