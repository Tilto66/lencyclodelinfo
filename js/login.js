const form = document.getElementById("loge");
// const namev = form.elements["nom"];
// let pseudo = namev.value;
function loginf(){
    form.addEventListener("submit", (event) => {
        event.preventDefault();
        let nom = form.elements["nom"].value;
        localStorage.setItem("loginName",nom);
    });
};
//fin.