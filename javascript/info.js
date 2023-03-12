
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
      }

      // Enable the "Previous" button if we're not at the beginning
      if (currentIndex > 0) {
        prevBtn.disabled = false;
      }
    }

    // Disable the "Previous" button if we're at the beginning
    if (currentIndex === 0) {
      prevBtn.disabled = true;
    }
  
  // COMPETENCE
  const section_comp = document.querySelector('.competence');
  const addButton_comp = document.querySelector('#add-comp-form');
  const removeButton_comp = document.getElementById('remove-comp-form');
  let formCount_comp = 1;

  addButton_comp.addEventListener('click', addFormCompetence);
  removeButton_comp.addEventListener('click', removeFormc);

  function addFormCompetence() {
    // event.preventDefault(); // prevent default form submission behavior
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



  function removeFormc() {
   // prevent default form submission behavior
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
  // event.preventDefault(); // prevent default form submission behavior
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
      //event.preventDefault(); // prevent default form submission behavior
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
