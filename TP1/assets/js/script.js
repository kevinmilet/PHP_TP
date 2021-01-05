// Déclaration des variables pour les champs
let lastname = document.getElementById('lastname');
let firstname = document.getElementById('firstname');
// let birthday = document.getElementById('birhtday');
// let birthplace = document.getElementById('birthplace');
let nationality = document.getElementById('nationality');
let address = document.getElementById('address');
let cp = document.getElementById('cp');
let city = document.getElementById('city');
let email = document.getElementById('email');
let phone = document.getElementById('phone');
// let diplome = document.getElementById('diplome');
let poleEmploi = document.getElementById('poleEmploi');
let badges = document.getElementById('badges');
let codecademy = document.getElementById('codecademy');
let hero = document.getElementById('hero');
let hacks = document.getElementById('hacks');
// let exp = document.querySelectorAll('.exp');

let lastnameError = document.querySelector('.lastnameError');
let firstnameError = document.querySelector('.firstnameError');
let birthdayError = document.querySelector('.birhtdayError');
let birthplaceError = document.querySelector('.birthplaceError');
let nationalityError = document.querySelector('.nationalityError');
let addressError = document.querySelector('.addressError');
let cpError = document.querySelector('.cpError');
let cityError = document.querySelector('.cityError');
let emailError = document.querySelector('.emailError');
let phoneError = document.querySelector('.phoneError');
let diplomeError = document.querySelector('.diplomeError');
let peError = document.querySelector('.peError');
let badgesError = document.querySelector('.badgesError');
let codecademyError = document.querySelector('.codecademyError');
let heroError = document.querySelector('.heroError');
let hacksError = document.querySelector('.hacksError');
// let exp = document.querySelectorAll('.exp');

// Stockage des Regex

const cpReg = /^\d{2}[ ]?\d{3}$/;
const nameReg = /^[a-zA-Zéèàùûêâôëç \'-]+$/;
const urlReg = /^(http[s]?:\/\/)?([^:\/\s]+)(:([^\/]*))?(\/\w+\.)*([^#?\s]+)(\?([^#]*))?(#(.*))?$/;
const peReg = /^[0-9]{8}[A-Z]{2}$/;
const phoneReg = /^[0-9]*$/;
const textReg = /^[0-9a-zA-Zéèàùûêâôëç \'-]+$/;
const emailReg = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,5}$/;

// déclaration des écouteurs
lastname.addEventListener('input', checkName);
firstname.addEventListener('input', checkName);
// birthday.addEventListener('input', checkBirthday);
// birthplace.addEventListener('select', checkBirthplace);
nationality.addEventListener('input', checkName);
address.addEventListener('input', checkAddress);
cp.addEventListener('input', checkCp);
city.addEventListener('input', checkName);
email.addEventListener('input', checkMail);
phone.addEventListener('input', checkPhone);
// diplome.addEventListener('select', checkDiplome);
// poleEmploi.addEventListener('input', checkPE);
// badges.addEventListener('input', checkBadges);
// codecademy.addEventListener('input', checkUrl);

// Fonctions de tests
function checkName() {
    if (nameReg.test(lastname.value)) {
        lastnameError.textContent = '';
    }
    else {
        lastnameError.textContent = 'Que des lettres, des -, des \' ou des espaces';
    };
}

function checkAddress() {
    if (textReg.test(address.value)) {
        addressError.textContent = '';
    } 
    else {
        addressError.textContent = 'Que des lettres, des chiffres, des -, des \' ou des espaces';
    };
}

function checkCp() {
    if (cpReg.test(cp.value)) {
        cpError.textContent = '';
    } 
    else {
        cpError.textContent = '5 chiffres uniquement';
    };
}

function checkMail() {
    if (emailReg.test(email.value)) {
        emailError.textContent = '';
    }
    else {
        emailError.textContent = 'Ceci n\'est pas un email valide';
    };
}

function checkPhone() {
    if (phoneReg.test(phone.value)) {
        phoneError.textContent = '';
    }
    else {
        phoneError.textContent = 'Que des chiffres et des espaces';
    };
}