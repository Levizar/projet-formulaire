let form = document.getElementById("form");
let firstname = document.getElementById('firstname');
let lastname = document.getElementById('lastname');
let email = document.getElementById('email');
let country = document.getElementById('country');
let message = document.getElementById('message');
let radios = document.getElementById('radios');
let man = document.getElementById("Homme");
let woman = document.getElementById("Femme");
let otherGender = document.getElementById("Non-binaire");
let initBorderColor = firstname.style.borderColor;


let firstnameOk = false;
let lastnameOk = false;
let genderOk = false;
let emailOk = false;
let countryOk = false;
let messageOk = false;


document.getElementById('btn-delete-js').parentNode.removeChild(document.getElementById('btn-delete-js'));

document.getElementById('btn-pop-js').innerHTML = `<p id="formError" style="color:red"></p>
<button class="btn bg-color mb-5 ml-3" id="submit">Envoyer</button>`;

let formError = document.getElementById('formError');
let submit = document.getElementById('submit');


window.addEventListener("load", ()=>{
    firstnameOk = false;
    lastnameOk = false;
    genderOk = false;
    emailOk = false;
    countryOk = false;
    messageOk = false;

    if(firstname.value != ''){
        firstnameOk = true;
    }
    if(lastname.value != ''){
        lastnameOk = true;
    }
    if(email.value != ''){
        emailOk = true;
    }
    if(country.value != 'other'){
        countryOk = true;
    }
    if(message.value != ''){
        messageOk = true;
    }
    if(man.checked || woman.checked || otherGender.checked){
        genderOk = true;
    }
})

const checkFirstName = (checkEmpty = false) => {
    let regEx = RegExp(/[1-9]/);
    if(regEx.test(firstname.value)){
        firstname.classList.add('form-error');
        firstnameOk = false;
    }else if(firstname.value == ''){
        firstnameOk = false;
        if(checkEmpty == true){
            firstname.classList.add('form-error');
        }
    }else{
        firstname.classList.remove('form-error');
        firstnameOk = true;
    }}


const checkLastName = (checkEmpty = false) => {
    let regEx = RegExp(/[1-9]/);
    if(regEx.test(lastname.value)){
        lastname.classList.add('form-error');
        lastnameOk = false;
    }else if(lastname.value == ''){
        lastnameOk = false;
        if(checkEmpty == true){
            lastname.classList.add('form-error');
        }
    }else{
        lastname.classList.remove('form-error');
        lastnameOk = true;
    }
}

const checkEmail = (checkEmpty = false) => {
    let regEx = RegExp( /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
    if(!regEx.test(email.value) && email.value != ''){
        email.classList.add('form-error');
        emailOk = false;
    }else if(email.value == ''){
        emailOk = false;
        if(checkEmpty == true){
            email.classList.add('form-error');
        }
    }else{
        email.classList.remove('form-error');
        emailOk = true;
    }
}

const checkCountry = (checkEmpty = false) => {
    if(country.value == 'other'){
        countryOk = false;
        if(checkEmpty){
            country.classList.add('form-error');
        }
    }else{
        countryOk = true;
        country.classList.remove('form-error');
    }
}

const checkMessage = (checkEmpty = false) => {
    if(message.value == ''){
        if(checkEmpty){
            message.classList.add('form-error');
        }
        messageOk = false;
    }else{
        message.classList.remove('form-error');
        messageOk = true;
    }
}



firstname.addEventListener('input',()=>{
    checkFirstName();
    checkAndSubmit();
});

lastname.addEventListener('input',()=>{
    checkLastName();
    checkAndSubmit();
});

Array.from(document.querySelectorAll(".gender")).forEach(gender => gender.addEventListener("click", ()=>{
    radios.classList.remove('form-error');
    genderOk = true;
    checkAndSubmit();
}))

email.addEventListener('input',()=>{
    checkEmail();
    checkAndSubmit();
});

country.addEventListener('input',()=>{
   checkCountry();
   checkAndSubmit();
});

message.addEventListener('input',()=>{
    checkMessage();
    checkAndSubmit();
});



function checkAndSubmit(checkSubmit=false){
    if(firstnameOk && lastnameOk && emailOk && messageOk && countryOk && genderOk){
        formError.innerHTML = "";
        if(checkSubmit == true) form.submit();

    }else if (checkSubmit) {
        formError.innerHTML = '<i class="fas fa-exclamation-circle"></i> Un ou plusieurs champs sont vides ou incorrects.'
    }
}



submit.addEventListener("click", ()=>{

    if(man.checked || woman.checked || otherGender.checked){
        genderOk = true;
    }else{
        radios.classList.add('form-error');
        genderOk = false;
    }
    checkFirstName(true);
    checkLastName(true);
    checkEmail(true);
    checkCountry(true);
    checkMessage(true);
    checkAndSubmit(true);
})