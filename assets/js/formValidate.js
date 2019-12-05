let firstname = document.getElementById('firstname');
let lastname = document.getElementById('lastname');
let email = document.getElementById('email');
let country = document.getElementById('country');
let message = document.getElementById('message');
let submit = document.getElementById('submit');
let formError = document.getElementById('formError');
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
    submit.disabled = "true";
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

firstname.addEventListener('input',()=>{
    let regEx = RegExp(/[1-9]/);
    if(regEx.test(firstname.value)){
        firstname.style.backgroundColor = "rgba(207, 85, 83,0.3)";
        firstname.style.borderColor = 'rgba(207, 85, 83,0.9)';
        firstnameOk = false;
    }else if(firstname.value == ''){
        firstnameOk = false;
    }else{
        firstname.style.backgroundColor = 'inherit';
        firstname.style.borderColor = initBorderColor;
        firstnameOk = true;
    }
    enableButton();
});

lastname.addEventListener('input',()=>{
    let regEx = RegExp(/[1-9]/);
    if(regEx.test(lastname.value)){
        lastname.style.backgroundColor = "rgba(207, 85, 83,0.3)";
        lastname.style.borderColor = 'rgba(207, 85, 83,0.9)';
        lastnameOk = false;
    }else if(lastname.value == ''){
        lastnameOk = false;
    }else{
        lastname.style.backgroundColor = 'inherit';
        lastname.style.borderColor = initBorderColor;
        lastnameOk = true;
    }
    enableButton();
});

email.addEventListener('input',()=>{
    let regEx = RegExp( /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
    if(!regEx.test(email.value) && email.value != ''){
        email.style.backgroundColor = "rgba(207, 85, 83,0.3)";
        email.style.borderColor = 'rgba(207, 85, 83,0.9)';
        emailOk = false;
    }else if(email.value == ''){
        emailOk = false;
    }else{
        email.style.backgroundColor = 'inherit';
        email.style.borderColor = initBorderColor;
        emailOk = true;
    }
    enableButton();
});

country.addEventListener('input',()=>{
    if(country.value == 'other'){
        countryOk = false;
    }else{
        countryOk = true;
    }
    enableButton();
});

message.addEventListener('input',()=>{
    if(message.value == ''){
        message.style.backgroundColor = "rgba(207, 85, 83,0.3)";
        message.style.borderColor = 'rgba(207, 85, 83,0.9)';
        messageOk = false;
    }else{
        message.style.backgroundColor = 'inherit';
        message.style.borderColor = initBorderColor;
        messageOk = true;
    }
    enableButton();
});

man.addEventListener("click",()=>{
    genderOk = true;
    enableButton();
})
woman.addEventListener("click",()=>{
    genderOk = true;
    enableButton();
})
otherGender.addEventListener("click",()=>{
    genderOk = true;
    enableButton();
})


function enableButton(){
    if(firstnameOk && lastnameOk && emailOk && messageOk && countryOk && genderOk){
        submit.disabled = "";
        formError.innerHTML = "";

    }else{
        submit.disabled = "true";
        formError.innerHTML = '<i class="fas fa-exclamation-circle"></i> Un ou plusieurs champs sont vides ou incorrects.'
    }
}