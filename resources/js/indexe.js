let valid = document.getElementById("valid");
let card = document.getElementById("confirm");
let back = document.getElementById("back");
let confirm = document.getElementById("conf");
let negoweb = document.getElementById("app");
let fields = document.getElementsByClassName("field");
let open = document.getElementById("open");
let allparam = document.getElementById("containerparam");
let ixi = document.getElementById("ixi");

function checkAllValid()
{
    let allValid = true;
    for(let i=0; i<fields.length;i++)
    {
        if(fields[i].validity.valueMissing)
        {
            allValid = false;
        }
    }
    return allValid;
}

function forcard(event) {

    if(checkAllValid())
    {
        event.preventDefault();
        card.style.display = "initial";
    }else{
        alert("Veuillez remplir TOUS les champs du formulaire pour valider vos paramètres.")
    }
}

function ret() {
    card.style.display = "none";
}

function openParam() {
    allparam.style.display = "initial";
}

function closeParam() {
    allparam.style.display = "none";
    card.style.display = "none";
}
function closeWindow() {
    allparam.style.display = "none";
    card.style.display = "none";
}

valid.addEventListener("click", forcard);
back.addEventListener("click", ret );
open.addEventListener("click", openParam);
confirm.addEventListener("click", closeParam);
ixi.addEventListener("click", closeWindow);