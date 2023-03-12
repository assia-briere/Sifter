function fetchData() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var jsonData = JSON.parse(this.responseText);
        console.log(jsonData);
      }
    };
    xhttp.open("GET", "../Model/Candidat.php", true);
    xhttp.send();
  }

  fetchData();

// var edu = document.getElementById("validationCustom07");
// var Exp= document.getElementById("ecperience-list");
// var com= document.getElementById("competence-nom");



// edu.innerHTML= " <option>{"+data.Education[0].kew+"</option>";



