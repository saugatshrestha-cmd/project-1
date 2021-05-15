var Login = document.getElementById("Login");
var Register = document.getElementById("Register");
var Indicator = document.getElementById("Indicator");

function register(){
    Register.style.transform="translateX(0px)";
    Login.style.transform="translateX(0px)";
    Indicator.style.transform="translateX(65px)";
}

function login(){
    Register.style.transform="translateX(300px)";
    Login.style.transform="translateX(300px)";
    Indicator.style.transform="translateX(-60px)";
}