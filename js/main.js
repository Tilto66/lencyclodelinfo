// Mon script: ENCORE R A VOIR ESPION >>>:(((((
let login = "";

function guess(){
    localStorage.setItem("username","Anonyme")
    window.location.href = "./accueil.html"
}
//  Login system

function lgn() {
    console.warn("Une personne veut se connecter");
    window.location.href = "./login.html";
}

function setuser(user){
    login = user;
}

