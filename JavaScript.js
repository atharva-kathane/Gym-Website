const form = document.getElementById('form');
const user_name = document.getElementById('user_name');
const age = document.getElementById('age');
const gender = document.getElementById('gender');
const phone = document.getElementById('phone');
const email = document.getElementById('email');
const workout_program = document.getElementById('workout_program');
const time_slot = document.getElementById('time_slot');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    checkInputs();

});

function checkInputs(){
    //get the values from the inputs
    const user_nameValue = user_name.value.trim();
    const ageValue = age.value.trim();t
    const genderValue = gender.value.trim();
    const phoneValue = phone.value.trim();
    const emailValue = email.value.trim();
    const workout_programValue =  workout_program.value.trim();
    const time_slotValue = time_slot.value.trim();

    if(user_nameValue === ''){
        setErrorFor(user_name, 'Name cannot be blank');
    } else {
        // add success class
        setSuccessFor(user_name);
    }

    //if(user_nameValue === ''){
      //  setErrorFor(age, 'Age cannot be blank'); }

      if(emailValue === ''){
        setErrorFor(email, 'Email cannot be blank');
    }
}

function setErrorFor(input, message){
    const formControl = input.parentElement;   // .form-control
    const small =  formControl.querySelector('small');

    // add error message inside small
    small.innerText =  message;

    // add error class
    formControl.className =  'form-control error';
}

function setSuccessFor(input){
    const formControl = input.parentElement;
    formControl.className =  'form-control success';

}