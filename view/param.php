<?php
include_once dirname(__DIR__) . "/controller/ComController.php";
include_once dirname(__DIR__) . "/controller/paramController.php";
include_once dirname(__DIR__) . "/Model/competences.php";
include_once dirname(__DIR__) . "/Model/Langue.php";
    $Cont = new Competences();
    $param= new paramController();
    $noms =$Cont->getCompetences();
    $doms=$Cont->getDomaine();
    $lan = new langue();
    $langs= $lan->getLangs();
    $param->Parametr();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
    .modal-footer {
            align-items: center;
            justify-content: center;
            margin-top: 5%;
        }
    .btn_outlin {
    color: #E9B7DB;
   background-color: #8A45C8;
        }
    .btn_outlin:hover {
            color: #8A45C8;
        background-color: #E9B7DB;
        }
    .main {
    width: 78%;
    border: 1px solid #ccc;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 40px 450px;
    padding: 29px 30px;
    border-radius: 10px;
}
    </style>
</head>

<body style="display: flex; align-items: center; height: 100vh; justify-content: center;">

   <div class="main">           
    <div class="updateproduct" style="width: 70%;">
        <div class="modal-dialog ">
            <div class="modal-content">
                <form action="" method="POST" id="form-product" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title">Entrer les parametre de recherche </h5>
                    </div>
                    <div class="modal-body">
                        <div class="mb-0">
                            <label class="col-form-label" for="domaine">Domaine:</label>
                            <select class="form-select"  required aria-label="Default select example" name="domaine">
                                <option selected></option>
                                <?php
                                $op='';
                                foreach($doms as $dom){
                                    echo '<option value="'.$dom["domaine"].'">'.$dom["domaine"].'</option>';
                                } 
                                // echo $op
                                ?> 
                            </select>
                        </div>
                        <div class="mb-0">
                            <label class="col-form-label" for="competence">Competence:</label>
                            <select class="form-select"  required aria-label="Default select example" name ="competence">
                                <option selected>Open this select menu</option>
                                <?php 
                                $op='';
                                foreach($noms as $nom){
                                    echo '<option value="'.$nom["nom"].'">'.$nom["nom"].'</option>';
                                } 
                                // echo $op
                                ?> 
                            </select>
                        </div>
                        <div class="mb-0">
                            <label class="col-form-label" for="auxnive-etude">Niveau d'Etude:</label>
                            <select class="form-select"  required aria-label="Default select example" name="niveaux-etude">
                                <option selected></option>
                                <option value="Doctorat">Doctorat</option>
                                <option value="Master">Master</option>
                                <option value="licence">Licence</option>
                                <option value="bac+2">Technicien</option>
                                <option value="bac">Baccalauréat</option>
                            </select>
                        </div>
                        <div class="mb-0">
                            <label class="col-form-label" for="experience">Experience:</label>
                            <select class="form-select"  required aria-label="Default select example" name="experience">
                                <option selected>Open this select menu</option>
                                <option value="1">Moins de 6 mois </option>
                                <option value="2">Entre 6 et 12 mois </option>
                                <option value="3">plus d'un an </option>
                                <option value="3">plus de 2 ans </option>
                            </select>
                        </div>
                        <div class="mb-0">
                            <label class="col-form-label" for="lang">Langue:</label>
                            <select class="form-select"  required aria-label="Default select example" name ="lang">
                            <?php 
                                $op='';
                                foreach($langs as $lang){
                                    echo '<option value="'.$lang["nom"].'">'.$lang["nom"].'</option>';
                                }
                                ?> 
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="update" class="btn btn_outlin" id="product-save-btn">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>  
</body>

</html>
