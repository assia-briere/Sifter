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
