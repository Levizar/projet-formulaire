let form = document.getElementById("form");
let firstname = document.getElementById('firstname');
let lastname = document.getElementById('lastname');
let email = document.getElementById('email');
let country = document.getElementById('country');
let message = document.getElementById('message');
let submit = document.getElementById('submit');
let formError = document.getElementById('formError');
let radios = document.getElementById('radios');
let man = document.getElementById("Homme");
let woman = document.getElementById("Femme");
let otherGender = document.getElementById("Autre");
let initBorderColor = firstname.style.borderColor;


let firstnameOk = false;
let lastnameOk = false;
let genderOk = false;
let emailOk = false;
let countryOk = false;
let messageOk = false;

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
        firstname.style.backgroundColor = "rgba(207, 85, 83,0.3)";
        firstname.style.borderColor = 'rgba(207, 85, 83,0.9)';
        firstnameOk = false;
    }else if(firstname.value == ''){
        firstnameOk = false;
        if(checkEmpty == true){
            firstname.style.backgroundColor = "rgba(207, 85, 83,0.3)";
            firstname.style.borderColor = 'rgba(207, 85, 83,0.9)';
        }
    }else{
        firstname.style.backgroundColor = 'inherit';
        firstname.style.borderColor = initBorderColor;
        firstnameOk = true;
    }}


const checkLastName = (checkEmpty = false) => {
    let regEx = RegExp(/[1-9]/);
    if(regEx.test(lastname.value)){
        lastname.style.backgroundColor = "rgba(207, 85, 83,0.3)";
        lastname.style.borderColor = 'rgba(207, 85, 83,0.9)';
        lastnameOk = false;
    }else if(lastname.value == ''){
        lastnameOk = false;
        if(checkEmpty == true){
            lastname.style.backgroundColor = "rgba(207, 85, 83,0.3)";
            lastname.style.borderColor = 'rgba(207, 85, 83,0.9)';
        }
    }else{
        lastname.style.backgroundColor = 'inherit';
        lastname.style.borderColor = initBorderColor;
        lastnameOk = true;
    }
}

const checkEmail = (checkEmpty = false) => {
    let regEx = RegExp( /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
    if(!regEx.test(email.value) && email.value != ''){
        email.style.backgroundColor = "rgba(207, 85, 83,0.3)";
        email.style.borderColor = 'rgba(207, 85, 83,0.9)';
        emailOk = false;
    }else if(email.value == ''){
        emailOk = false;
        if(checkEmpty == true){
            email.style.backgroundColor = "rgba(207, 85, 83,0.3)";
            email.style.borderColor = 'rgba(207, 85, 83,0.9)';
        }
    }else{
        email.style.backgroundColor = 'inherit';
        email.style.borderColor = initBorderColor;
        emailOk = true;
    }
}

const checkCountry = (checkEmpty = false) => {
    if(country.value == 'other'){
        countryOk = false;
        if(checkEmpty){
            country.style.backgroundColor = "rgba(207, 85, 83,0.3)";
            country.style.borderColor = 'rgba(207, 85, 83,0.9)';
        }
    }else{
        countryOk = true;
        country.style.backgroundColor = 'inherit';
        country.style.borderColor = initBorderColor;
    }
}

const checkMessage = (checkEmpty = false) => {
    if(message.value == ''){
        if(checkEmpty){
            message.style.backgroundColor = "rgba(207, 85, 83,0.3)";
            message.style.borderColor = 'rgba(207, 85, 83,0.9)';
        }
        messageOk = false;
    }else{
        message.style.backgroundColor = 'inherit';
        message.style.borderColor = initBorderColor;
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
    radios.style.backgroundColor = 'transparent';
    radios.style.borderColor = 'transparent';
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
        radios.style.backgroundColor = 'rgba(207, 85, 83,0.3)';
        radios.style.border = '1px solid rgba(207, 85, 83,0.9)';
        genderOk = false;
    }
    checkFirstName(true);
    checkLastName(true);
    checkEmail(true);
    checkCountry(true);
    checkMessage(true);
    checkAndSubmit(true);
})