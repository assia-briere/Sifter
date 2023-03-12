var input_type = document.querySelectorAll("#input-email, #input-emai");

var main = document.querySelector('.main');
var first_section = document.querySelector('#first-section');
input_type.forEach(e => {
    e.addEventListener("click", function () {
        main.style.display = "none";
        first_section.style.display = "flex";
    });
});
/*BUTTON CONTINUE*/
var next_button = document.getElementById("first-button");
var section2 = document.querySelector("#second-section");
next_button.addEventListener("click", function () {
    if ((section2.style.display = "none") && (first_section.style.display = "flex")) {
        section2.style.display = "flex";
        first_section.style.display = "none"
    }
});
var email_check = document.getElementById('email');
var next_button = document.getElementById("first-button");
var section2 = document.querySelector("#second-section");
next_button.addEventListener("click", function () {
    if ((section2.style.display = "none") && (first_section.style.display = "flex") && (email_check.value)) {
        section2.style.display = "flex";
        first_section.style.display = "none";

    } else {
        section2.style.display = "none";
        first_section.style.display = "flex";
        msg = "<p style = 'color:red;font-size: 11px;position: absolute;'> Donner votre Email.</p>";

    }
    document.getElementById("msg").innerHTML = msg;
});
/*-------Form-------*/ 





   
   
    

let mssg =  document.querySelector(".mssg-error");
function validateForm() {
    let password = document.getElementById("password");
    let confirm_password = document.getElementById("confirm_password");
    if (confirm_password.value === password.value) {
        
        return true;
    }else{

        mssg.innerHTML = "<p style = 'color:red;font-size: 11px;position: absolute;'> Veuiller confirmer votre password.</p>";
        return false;
    }
    
    
};