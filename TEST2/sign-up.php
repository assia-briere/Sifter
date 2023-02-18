<?php
include("connexion.php");
// session_start();
// echo "Hi I am assia ";
if(isset($_POST['valider'])){
    if(isset($_POST['Firstname']) AND isset($_POST['email'])  AND isset($_POST['CIN'])  AND isset($_POST['Lastname'])  AND isset($_POST['Ville'])  AND isset($_POST['Telephone']) 
    AND isset($_POST['password-confirm'])  AND isset($_POST['password']) ){
        if(!empty($_POST['Firstname']) AND !empty($_POST['email'])  AND !empty($_POST['CIN'])  AND !empty($_POST['Lastname'])  AND !empty($_POST['Ville'])  AND !empty($_POST['Telephone']) AND !empty($_POST['password-confirm'])  AND !empty($_POST['password']) ){
            $name=htmlspecialchars(trim($_POST['Firstname']));
            $email=htmlspecialchars(trim($_POST['email'])); 
            $CIN=htmlspecialchars(trim($_POST['CIN'])); 
            $Telephone=htmlspecialchars(trim($_POST['Telephone'])); 
            $lastname=htmlspecialchars(trim($_POST['Lastname'])); 
            $ville=htmlspecialchars(trim($_POST['Ville'])); 
            $psc=htmlspecialchars(trim($_POST['password-confirm']));
            $ps=htmlspecialchars(trim($_POST['password']));
            if(strlen($Telephone)!=10){
                echo "le numero de telephone incorrect ";
                
            }
            else if(($name==='') or ($CIN==='') or ($lastname==='')  or ($ville==='') or ($name==='')  or ($ps==='')  or ($psc==='')){
                echo "les espace noon valable";
            }
            else if($ps==$psc and !($name==='')  and !($CIN==='')  and !($lastname==='')  and !($ville==='')  and !($name==='')  and !($ps==='')  and !($psc==='') ){
                // echo "<h2> Bonjour <mark><b> $name </b></mark> merci pour votre email:<mark><b> $email </b></mark> </h2>";
                $query = "INSERT INTO candidatinfo (gmail, 	CIN , 	ModePass, 	firstName, 	LastName, 	telephone, 	Ville) value ('$email','$CIN', '$ps', '$name', '$lastname', '$Telephone', 	'$ville')";
                if(mysqli_query($conn,$query)){
                    header("Location:lognin.php"); 
                }
            }
            else{
                echo "veulliez verfie le mode pass et le conferlie";
            }
            
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  rel="stylesheet" href="./style.css">
    <script src="./main.js"></script>
</head>
<body>
    <div class="signupFrm">
    <form class="form" action="" method="post">
        <h1 class="title">Sign up</h1>
        <div class="inputContainer">
            <label class="label" for="email">Email</label>
            <input class="input" type="email" name="email" placeholder="a" id="email">
            
        </div>
        <div class="inputContainer"> 
            <label class="label" for="email">CIN</label>
            <input class="input" type="text" name="CIN" placeholder="a">
           
        </div> 
        <div class="inputContainer">
            <label class="label" for="firstname">Firstname</label>
            <input class="input" type="text" name="Firstname" placeholder=" ">
           
        </div> 
        <div class="inputContainer"> 
            <label class="label" for="firstname">Lastname</label>
            <input class="input" type="text" name="Lastname" placeholder=" " required>
           
        </div> 
        <div class="inputContainer">
            <label class="label" for="firstname">Ville</label>
            <input class="input" type="text" name="Ville" placeholder=" "required>
        </div>  
        <div class="inputContainer"> 
            <label class="label" for="Telephone">Telephone</label>
            <input class="input" type="number" name="Telephone" placeholder=" " required>
           
        </div> 
        <div class="inputContainer">  
              <label class="label" for>Password</label>
            <input class="input" type="password" id="password" name="password" placeholder="a" minlength="6" required>
        
        </div>
        <div class="inputContainer"> 
                    <label class="label" for="password">Confirm Password</label>
                <input class="input" type="password" id="password-confirm" name="password-confirm" placeholder="a" required>
       
        </div>  
            <button  class="submitBtn"  type="submit" name="valider">Envoyer</button>
        </form>
    </div>

  
</body>
</html>