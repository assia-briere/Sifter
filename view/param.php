<?php
include_once dirname(__DIR__) . "/controller/ControllerRecruter.php";
    $Cont = new ControlleR();
    $Cont->setParam();
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
                        <h5 class="modal-title">search for trainee</h5>
                    </div>
                    <div class="modal-body">
                        <div class="mb-0">
                            <label class="col-form-label" for="domaine">Domaine:</label>
                            <select class="form-select"  required aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-0">
                            <label class="col-form-label" for="competence">Competence:</label>
                            <select class="form-select"  required aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-0">
                            <label class="col-form-label" for="niveaux-etude">Niveau d'Etude:</label>
                            <select class="form-select"  required aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-0">
                            <label class="col-form-label" for="experience">Experience:</label>
                            <select class="form-select"  required aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-0">
                            <label class="col-form-label" for="lang">Langue:</label>
                            <select class="form-select"  required aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
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
