let valid = document.getElementById("valid");
let card = document.getElementById("confirm");
let back = document.getElementById("back");
let confirm = document.getElementById("conf");
let negoweb = document.getElementById("app");
let fields = document.getElementsByClassName("field");

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
    }
}

function ret() {
    card.style.display = "none";
}

valid.addEventListener("click", forcard);
back.addEventListener("click", ret );
