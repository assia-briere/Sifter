<?php
include("connexion.php");
if(isset($_POST['valider'])){
    if( isset($_POST['email'])  AND isset($_POST['password'])   ){
        if(!empty($_POST['email']) AND !empty($_POST['password']) ){
            $email=htmlspecialchars(trim($_POST['email']));
            $ps=htmlspecialchars(trim($_POST['password']));

                //echo "<h2> Bonjour <mark><b> </b></mark> merci pour votre email:<mark><b> $email </b></mark> </h2>";
                $query = "SELECT * FROM  candidatinfo WHERE gmail = '$email' && ModePass= '$ps'";
                if(mysqli_num_rows(mysqli_query($conn,$query))>0){
                    //header("Location:lognin.php"); 
                    echo "Hello " ; 
                }
            else{
                echo "Le mode pass ou gmail est incorrect !!";
            }
        
        
        }
        }}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logn in</title>
    <link  rel="stylesheet" href="./style.css">
    <script src="./main.js"></script>
</head>
<body>
    <div class="signupFrm">
    <form class="form" action="" method="post">
        <h1 class="title">Logn in</h1>
        <div class="inputContainer">
            <label class="label" for="email">Email</label>
            <input class="input" type="email" name="email" placeholder="a" id="email">
            
        </div>
        <div class="inputContainer">  
            <label class="label" for>Password</label>
            <input class="input" type="password" id="password" name="password" placeholder="a" minlength="6" required>
        </div>
        
            <button  class="submitBtn"  type="submit" name="valider">Logn in </button>
        </form>
    </div>

  
</body>
</html>