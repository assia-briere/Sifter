// function checkRequired() {
//   const name = document.getElementById("name");
//   const message = document.getElementById("message");

//   if (!name.checkValidity()) {
//     message.textContent = "Please enter a name.";
//   } else {
//     message.textContent = "";
//     // Submit form here
//   }
// }

  //for all this shit
  // const forms = document.querySelectorAll('form');
  //   // get reference to the button that will trigger the form submissions
     const submitButton = document.querySelector('#submit-all-forms-button');

  //   // add a click event listener to the submit button
  //   submitButton.addEventListener('click', (event) => {
  //     event.preventDefault(); // prevent the default button click behavior
  //     // loop through each form and submit it
  //     forms.forEach((form) => {
  //       console.log("");
  //       form.querySelectorAll("input").forEach(input=>{
        
  //         console.log(input.name +" : "+input.value );
  //       });

  //     });
  //   });



  const sections = document.querySelectorAll("section");
    let currentIndex = 0;

    // Hide all sections except for the first one
    for (let i = 1; i < sections.length; i++) {
      sections[i].style.display = "none";
    }

    // Add event listeners to the buttons
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");

    prevBtn.addEventListener("click", showPrevSection);
    nextBtn.addEventListener("click", showNextSection);

    // Show the previous section
    function showPrevSection() {
      sections[currentIndex].style.display = "none";
      currentIndex = (currentIndex - 1 + sections.length) % sections.length;
      sections[currentIndex].style.display = "flex";

      // Disable the "Previous" button if we're at the beginning
      if (currentIndex === 0) {
        prevBtn.disabled = true;
      }

      // Enable the "Next" button if we're not at the end
      if (currentIndex < sections.length - 1) {
        nextBtn.disabled = false;
        nextBtn.style.display = "block";
         submitButton.style.display = "none";

      }
    }

    // Show the next section
    function showNextSection() {
      sections[currentIndex].style.display = "none";
      currentIndex = (currentIndex + 1) % sections.length;
      sections[currentIndex].style.display = "flex";

      // Disable the "Next" button if we're at the end
      if (currentIndex === sections.length - 1) {
        nextBtn.disabled = true;
        nextBtn.style.display="none";
        submitButton.style.display="block";
      }

      // Enable the "Previous" button if we're not at the beginning
      if (currentIndex > 0) {
        prevBtn.disabled = false;
      }
    }

    // Disable the "Previous" button if we're at the beginning
    if (currentIndex === 0) {
      prevBtn.disabled = true;
      nextBtn.style.display = "block";

    }
  
   // LOISIR

  const section_loisir = document.querySelector('.loisir');
    const addButton_loisir = document.querySelector('#add-loisir-form');
    const removeButton_loisir = document.getElementById('remove-loisir-form');
    let formCount_loisir = 1;

    addButton_loisir.addEventListener('click', addFormLoisir);
    removeButton_loisir.addEventListener('click', removeFormLo);

    function addFormLoisir() {
       // prevent default form submission behavior
      let firstForm = section_loisir.querySelector('.loisir-form');
      let formClone = firstForm.cloneNode(true);
      formCount_loisir++;

      // set unique ids for each form input element
      formClone.querySelectorAll('[id]').forEach(function (element) {
        element.id = element.id + '-' + formCount_loisir;
        element.value = ''; // remove the value of the input field
      });

      // set unique names for each form input element
      formClone.querySelectorAll('[name]').forEach(function (element) {
        element.name = element.name + '-' + formCount_loisir;
        element.value = ''; // remove the value of the input field
      });

      section_loisir.querySelector('#loisir').appendChild(formClone);
    }



    function removeFormLo(event) {
      event.preventDefault(); // prevent default form submission behavior
      let forms = section_loisir.querySelectorAll('.langage-form');
      if (forms.length > 1) {
        let lastForm = forms[forms.length - 1];
        section_loisir.querySelector('#loisir').removeChild(lastForm);
        formCount_loisir--;
      }
    }

  // LES LANGUE
  const section_Lang = document.querySelector('.langage');
    const addButton_lang = document.querySelector('#add-langage-form');
    const removeButton_lang = document.getElementById('remove-langage-form');
    let formCount_lang = 1;

    addButton_lang.addEventListener('click', addFormLangage);
    removeButton_lang.addEventListener('click', removeForml);

    function addFormLangage() {
       // prevent default form submission behavior
      let firstForm = section_Lang.querySelector('.langage-form');
      let formClone = firstForm.cloneNode(true);
      formCount_lang++;

      // set unique ids for each form input element
      formClone.querySelectorAll('[id]').forEach(function (element) {
        element.id = element.id + '-' + formCount_lang;
        element.value = ''; // remove the value of the input field
      });

      // set unique names for each form input element
      formClone.querySelectorAll('[name]').forEach(function (element) {
        element.name = element.name + '-' + formCount_lang;
        element.value = ''; // remove the value of the input field
      });

      section_Lang.querySelector('#langage').appendChild(formClone);
    }



    function removeForml(event) {
      event.preventDefault(); // prevent default form submission behavior
      let forms = section_Lang.querySelectorAll('.langage-form');
      if (forms.length > 1) {
        let lastForm = forms[forms.length - 1];
        section_Lang.querySelector('#langage').removeChild(lastForm);
        formCount_lang--;
      }
    }

  // COMPETENCE
  const section_comp = document.querySelector('.competence');
  const addButton_comp = document.querySelector('#add-comp-form');
  const removeButton_comp = document.getElementById('remove-comp-form');
  let formCount_comp = 1;

  addButton_comp.addEventListener('click', addFormCompetence);
  removeButton_comp.addEventListener('click', removeFormC);

  function addFormCompetence() {
     // prevent default form submission behavior
    let firstForm = section_comp.querySelector('.competences-form');
    let formClone = firstForm.cloneNode(true);
    formCount_comp++;

    // set unique ids for each form input element
    formClone.querySelectorAll('[id]').forEach(function (element) {
      element.id = element.id + '-' + formCount_comp;
      element.value = ''; // remove the value of the input field
    });

    // set unique names for each form input element
    formClone.querySelectorAll('[name]').forEach(function (element) {
      element.name = element.name + '-' + formCount_comp;
      element.value = ''; // remove the value of the input field
    });

    section_comp.querySelector('#competence').appendChild(formClone);
  }



  function removeFormC(event) {
    event.preventDefault(); // prevent default form submission behavior
    let forms = section_comp.querySelectorAll('.competences-form');
    if (forms.length > 1) {
      let lastForm = forms[forms.length - 1];
      section_comp.querySelector('#competence').removeChild(lastForm);
      formCount_comp--;
    }
  }

  // EDUCATION
  const section = document.querySelector('.education');
  const addButton = document.getElementById('add-form');
  const removeButton = document.getElementById('remove-form');
  let formCount = 1;

addButton.addEventListener('click', addFormEducation);
removeButton.addEventListener('click', removeFormEd);

function addFormEducation() {
  // prevent default form submission behavior
  let firstForm = section.querySelector('.education-form');
  let formClone = firstForm.cloneNode(true);
  formCount++;

  // set unique ids for each form input element
  formClone.querySelectorAll('[id]').forEach(function(element) {
    element.id = element.id + '-' + formCount;
    element.value = ''; // remove the value of the input field
  });

  // set unique names for each form input element
  formClone.querySelectorAll('[name]').forEach(function(element) {
    element.name = element.name + '-' + formCount;
    element.value = ''; // remove the value of the input field
  });

  section.querySelector('#education').appendChild(formClone);
}



function removeFormEd(event) {
  event.preventDefault(); // prevent default form submission behavior
  let forms = section.querySelectorAll('.education-form');
  if (forms.length > 1) {
    let lastForm = forms[forms.length - 1];
    section.querySelector('#education').removeChild(lastForm);
    formCount--;
  }
}

  // EXPERIENCE
  const section_Experience = document.querySelector('.experience');
    const addButton_Experience = document.getElementById('add-form-experience');
    const removeButton_Experience = document.getElementById('remove-form-experience');
    let formCount_Experience = 1;

    addButton_Experience.addEventListener('click', addFormExperience);
    removeButton_Experience.addEventListener('click', removeFormEx);

    function addFormExperience() {
       // prevent default form submission behavior
      let firstForm = section_Experience.querySelector('.experience-form');
      let formClone = firstForm.cloneNode(true);
      formCount_Experience++;

      // set unique ids for each form input element
      formClone.querySelectorAll('[id]').forEach(function (element) {
        element.id = element.id + '-' + formCount;
        element.value = ''; // remove the value of the input field
      });

      // set unique names for each form input element
      formClone.querySelectorAll('[name]').forEach(function (element) {
        element.name = element.name + '-' + formCount_Experience;
        element.value = ''; // remove the value of the input field
      });

      section_Experience.querySelector('#experience').appendChild(formClone);
    }

    function removeFormEx(event) {
      event.preventDefault(); // prevent default form submission behavior
      let forms = section_Experience.querySelectorAll('.experience-form');
      if (forms.length > 1) {
        forms[forms.length - 1].remove();
        formCount_Experience--;
      }
    }
  

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
