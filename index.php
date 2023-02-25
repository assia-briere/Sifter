<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "App";
 
// Création de la connexion PDO
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Paramètres de connexion
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
   // echo "bienvenue";
   require_once("Controller/SignupController.php");

$cont = new ControllerSignup($conn);
require_once("view/signup.php");
$cont->submitForm() ;

} catch(PDOException $e) {
    echo "La connexion a échoué : " . $e->getMessage();
}




?>

