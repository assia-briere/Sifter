<?php
include_once dirname(__DIR__) . "/controller/ControllerCandidat.php";
include_once dirname(__DIR__) ."/controller/ComController.php";
require_once dirname(__DIR__) . '/controller/langController.php'; 
require_once dirname(__DIR__) . '/controller/ExpController.php';
require_once dirname(__DIR__) . '/controller/EduController.php';
$Cont = new ControllerCandidat();
$com= new ComController();
$lang = new LangController();
$exp= new ExpController();
$edu = new EduController();
$json=$Cont->getChoix();

$Cont->Update();
$com->Update();
$lang->Update();
$exp->Update();
$edu->Update();
$Cont->score();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.3.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="../stylesheets/bootstrap.css">
    <title>Les informations personnelles</title>
   
</head>

<body> 
 <!--  <div class="background">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
 -->

  
    <div class="container">
                
                  
                    
                  
    <form action="" method="post">
    <section class="main ">

<header>Inscription</header>
<div class="row g-3 needs-validation" id="my-form" novalidate>
    <span class="title">Détails personnels</span>
    
      <div class="personel">
          <div class="row-flex">
          <div class="upload_image">
            <i class="fa-solid fa-user"></i> 
            <div class="round">
                <input type="file">
                <i class="fa fa-camera" style="color: #fff;"></i>
            </div>
        </div>
        <div class="col-md">
            <div class="col-md">
                <label for="validationCustom01" class="form-label">Nom :</label>
                <input type="text" class="form-control" name="nom" id="validationCustom01" value="<?php echo $_SESSION["nom"] ?>" required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md">
                <label for="validationCustom02" class="form-label">Prenom :</label>
                <input type="text" class="form-control" name="prenom" id="validationCustom02" value="Br" required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
        </div>    
        </div>    
          <div class="row"> 
            <div class="col-md">
                <label for="validationCustom03" class="form-label">Ville</label>
                <input type="text" name="ville" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                Please provide a valid Ville.
                </div>
            </div>
            <div class="col-md">
                <label for="validationCustom04" class="form-label">telephone</label>
                <input type="tel" id="telephone" name="telephone" class="form-control" id="validationCustom04" required>
                <div class="invalid-feedback">
                Please provide a valid phone number.
                </div>
            </div>
          </div>  
         <div class="row">                     
            <div class="col-md">
                <label for="validationCustom05" class="form-label">Payé</label>
                <input type="text" name="country" class="form-control" id="validationCustom05" required>
                <div class="invalid-feedback">
                Please select a valid state.
                </div>
            </div>
            <div class="col-md">
                <label for="validationCustom06" class="form-label">Domaine</label>
                <input type="text" name="domaine" class="form-control" id="validationCustom06" required>
                <div class="invalid-feedback">
                Please select a valid state.
                </div>
            </div>
        </div>
            
         </div>
            <div class="col-12">
              
            </div>
</div>        
  </section>         

  <section class="education">
    <div class="education-header">
      <div class="left-header">
        <i class="fa-duotone fa-diploma"></i>
        <h2>Education</h2>
     </div>
    <div class="buttons">
    <button type="button" class="btn-add" id="add-form"><i class="fa-duotone fa-plus"></i></button> 

    <button type="button" class="btn-add" id="remove-form"  ><i class="fa-duotone fa-xmark"></i></button>
</div>
</div>
<div id="education">
<div class="row g-3 needs-validation education-form" id="education-form" >
    <div class="personel">
        <div class="col-md">
          <label for="validationCustom07" class="form-label">List:</label>
          <select class="form-select" id="validationCustom07" name="validationCustom07" required>
            <option>Doctorat</option>
            <option>Master</option>
            <option>License</option>
            <option>Bac</option>
          </select> 
        </div>
        <div class="row"> 
            <div class="col-md">
                <label for="date-debut" class="form-label">Date Debut:</label>
                <input type="date" id="datedebut" class="form-control" name="datedebut" required>
                
            </div>
            <div class="col-md">
                <label for="validationCustom05" class="form-label">Date Fin</label>
                <input type="date" id="datefin" class="form-control" name="datefin" required>
                
            </div>
          </div>  
         <div class="row">                     
            <div class="col-md">
                <label for="validationCustom04" class="form-label">Fillier:</label>
                <input type="text" name="fillier" class="form-control" id="fillier" required>

            </div>
            <div class="col-md">
                <label for="faculte" class="form-label">Faculte:</label>
                <input type="text" name="faculte" class="form-control" id="faculte" required>
                
            </div>
        </div>
    </div>     
            
</div>
</div>
</section>
<section class=" experience">
<div class="education-header">
  <div class="left-header">
    <i class="fa-duotone fa-briefcase"></i>
    <h2>Experience</h2>
  </div>
<div class="buttons">
    <button type="button" class="btn-add" id="add-form-experience"><i class="fa-duotone fa-plus"></i></button> 

    <button type="button" class="btn-add" id="remove-form-experience"  ><i class="fa-duotone fa-xmark"></i></button>
</div>
</div>
<div id="experience">
<div class="row g-3 needs-validation experience-form" id="experience-form" >
    <div class="personel">
        <div class="col-md">
          <label for="validationCustom04" class="form-label">List:</label>
          <select class="form-select" id="ecperience-list" name="ecperience-list" required>
            <option value="Stage">Stage</option>
            <option value="Poste">Poste de travaile</option>
          </select> 
        </div>
        <div class="row"> 
            <div class="col-md">
                <label for="date-debut" class="form-label">Date Debut:</label>
                <input type="date" id="datedebut" class="form-control" name="datedebut-experience" required>
                
            </div>
            <div class="col-md">
                <label for="validationCustom05" class="form-label">Date Fin:</label>
                <input type="date" id="datefin" class="form-control" name="datefin-experience" required>
            </div>
          </div>  
         <div class="row">                     
            <div class="col-md">
                <label for="validationCustom04" class="form-label">Social:</label>
                <input type="text" name="social" class="form-control" id="social" required>
            </div>
            <div class="col-md">
                <label for="faculte" class="form-label">Titre:</label>
                <input type="text" name="titre" class="form-control" id="titre" required>   
            </div>
        </div>
        <div class="col-md">
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Description"></textarea>
          </div>
        </div>
        </div>     
</div>
</div>
</section>
<section class="competence">
<div class="education-header">
<div class="left-header">
  <i class="fa-duotone fa-briefcase"></i>
  <h2>Competences:</h2>
</div>
<div class="buttons">
  <button type="button" class="btn-add" id="add-comp-form"><i class="fa-duotone fa-plus"></i></button>

  <button type="button" class="btn-add" id="remove-comp-form"><i class="fa-duotone fa-xmark"></i></button>
</div>
</div>
<div id="competence">
<div class="row g-3 competences-form" id="competences-form">
  <div class="personel">
    <div class="row">
      <div class="col-md">
        <label for="competence-nom" class="form-label">Nom:</label>
        <input type="text" id="competence-nom" class="form-control" name="competence-nom" required>
      </div>
      <div class="col-md">
        <label for="competence-domain" class="form-label">Domain:</label>
        <input type="text" id="competence-domain" class="form-control" name="competence-domain" required>
      </div>
    </div>
  </div>
</div>
</div>
</section>
<section class="langage">
<div class="education-header">
<div class="left-header">
  <i class="fa-duotone fa-briefcase"></i>
  <h2>Language:</h2>
</div>
<div class="buttons">
  <button type="button" class="btn-add" id="add-langage-form"><i class="fa-duotone fa-plus"></i></button>

  <button type="button" class="btn-add" id="remove-langage-form"><i class="fa-duotone fa-xmark"></i></button>
</div>
</div>
<div id="langage">
<div class="row g-3 langage-form" id="langage-form">
  <div class="personel">
    <div class="row">
      <div class="col-md">
        <label for="langage-nom" class="form-label">Langue:</label>
        <input type="text" id="langage-nom" class="form-control" name="langage-nom" required>
      </div>
      <div class="col-md">
        <label for="langauge-domain" class="form-label">Niveaux:</label>
        <input type="text" id="langage-niveaux" class="form-control" name="langage-niveaux" required>
      </div>
    </div>
  </div>
</div>
</div>
</section>
<section class="loisir">
<div class="education-header">
<div class="left-header">
  <i class="fa-duotone fa-briefcase"></i>
  <h2>Loisir:</h2>
</div>
<div class="buttons">
  <button type="button" class="btn-add" id="add-loisir-form"><i class="fa-duotone fa-plus"></i></button>

  <button type="button" class="btn-add" id="remove-loisir-form"><i class="fa-duotone fa-xmark"></i></button>
</div>
</div>
<div id="loisir">
<div class="row g-3 loisir-form" id="loisir-form">
  <div class="personel">
    <div class="row">
      <div class="col-md">
        <label for="loisir-nom" class="form-label">Nom:</label>
        <input type="text" id="loisir-nom" class="form-control" name="loisir-nom" required>
      </div>
      <div class="col-md">
        <label for="langauge-domain" class="form-label">Domain:</label>
        <input type="text" id="loisir-domain" class="form-control" name="loisir-domain" required>
      </div>
    </div>
  </div>
</div>
</div>
</section>
<div class="buttons">
<button id="prevBtn" class="btn n" >Previous</button>
<button id="nextBtn" class="btn n">Next</button>
<button id="submit-all-forms-button" type="submit"  class="btn n" style="display:none;" name="sumbit"  >submit</button>
</form>
<p id="message"></p>

    </div>
</div>
<script src="../javascript/info.js"></script>
<script>


var js = <?php echo $json ;?>;
if(js!==0){

var edu = document.getElementById("validationCustom07");
var Exp= document.getElementById("ecperience-list");
var com= document.getElementById("competence-nom");
var loi=document.getElementById("loisir-nom");
var lan = document.getElementById("langage-nom");

edu.value=js.Education[0].kew;
Exp.value=js["Exp\u00e9rience"][0]["kew"];
com.value=js["Comp\u00e9tence"][0].kew;
lan.value=js["Langues"][0].kew;
loi.value=js["Loisirs"][0].kew;

for(i=1;i<js.Education.length;i++){
  addFormEducation();
}


if(js.Education.length >1){
  for(i=1 ;i<js.Education.length ;i++){
    cont= "validationCustom07"+ '-' + (i+1);
    edu=document.getElementById(cont);
    edu.value=js.Education[i].kew;      //js.Education[i].kew;
  }
}
for(i=1;i<js["Exp\u00e9rience"].length;i++){
  addFormExperience();
}
for(i=1 ;i<js["Exp\u00e9rience"].length;i++){
    cont= "ecperience-list"+ '-' + (i+1);
    Exp=document.getElementById(cont);
    Exp.value=js["Exp\u00e9rience"][i]["kew"];    //js.Education[i].kew;
  }
for(i=1;i<js["Comp\u00e9tence"].length;i++){
  addFormCompetence();
}
for(i=1 ;i<js["Comp\u00e9tence"].length;i++){
    cont= "competence-nom"+ '-' + (i+1);
    com=document.getElementById(cont);
    com.value=js["Comp\u00e9tence"][i]["kew"];    //js.Education[i].kew;
  }
  for(i=1;i<js.Loisirs.length;i++){
    addFormLoisir();
}
for(i=1 ;i<js["Loisirs"].length;i++){
    cont= "loisir-nom"+ '-' + (i+1);
    loi=document.getElementById(cont);
    loi.value=js["Loisirs"][i]["kew"];  //js.Education[i].kew;
  }
for(i=1;i<js.Langues.length;i++){
    addFormLangage();
}
  for(i=1 ;i<js["Langues"].length;i++){
    cont= "langage-nom"+ '-' + (i+1);
    lan=document.getElementById(cont);
    lan.value=js["Langues"][i]["kew"];  //js.Education[i].kew;
  }
}

</script>

<script>
    (() => {
  'use strict'
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')
  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})()
</script>



</body>

</html>
