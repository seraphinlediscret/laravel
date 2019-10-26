let valid = document.getElementById("valid");
let card = document.getElementById("confirm");
let back = document.getElementById("back");
let confirm = document.getElementById("conf");
let negoweb = document.getElementById("app");
let fields = document.getElementsByClassName("field");
let open = document.getElementById("open");
let allparam = document.getElementById("containerparam");
let ixi = document.getElementById("ixi");
let appli = document.getElementById("theapplinego")
let exyt = document.getElementById("exyt");
let well = document.getElementById("well");
  let validaction = document.getElementById("validaction");

  let first = document.getElementById("firstbtn");
//envoie de données//
let priceshow =document.getElementById("validationCustom01");
let trapshow = document.getElementById("validationCustom02");
let rabshow = document.getElementById("validationCustom03");
let tourshow = document.getElementById("validationCustom04");
let priceminshow = document.getElementById("validationCustom05");
let timeshow = document.getElementById("validationCustom06");
let actionshow = document.getElementById("validationCustom07");

//reception affichage de données //
let showcount = document.getElementById("count");
let showprice = document.getElementById("showprice");
let showbuy = document.getElementById("showbuy");
let showwant = document.getElementById("showwant");
let showtour = document.getElementById("showtour");
let showrab = document.getElementById("showrab");
let showtime = document.getElementById("minutes");

//tableau de span//

let table = [];

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
    appli.style.display = "initial";
    open.style.display = "none";
    well.style.display = "none";
    //envoie de données//
   showcount.textContent = tourshow.value;
   showprice.textContent = priceshow.value;
   showtime.textContent = timeshow.value;
 }

function closeWindow() {
    allparam.style.display = "none";
    card.style.display = "none";
}

function closeNego() {
    window.location.reload();
}

//////////ajout de span/////////////

let count = 0;
let list = document.querySelector('ul');
list.addEventListener('click', function (ev) {
    if (ev.target.tagName === 'LI'){
        ev.target.classList.toggle('checked');
    }
    
}, false);

validaction.addEventListener("click", action);

function actionFirst() {
    showbuy.textContent = actionshow.value;
    first.style.display = "none";
}
first.addEventListener("click", actionFirst);

function action () {
     /////////////ajout list////////////////
     let li = document.createElement("li");
     let actionshow = document.getElementById("validationCustom07").value;
     let t = document.createTextNode(actionshow);
     li.appendChild(t);
 
     if (actionshow === ''){
         alert("Veuillez entrer une proposition !");
     } else{
         count++
         document.getElementById("myUL").appendChild(li);
     }
     document.getElementById("actionshow").value = "";
     let span = document.createElement("SPAN");
     let txt = document.createTextNode(count);
     span.className = "increment";
     span.appendChild(txt);
     li.appendChild(span);
}


valid.addEventListener("click", forcard);
back.addEventListener("click", ret );
open.addEventListener("click", openParam);
confirm.addEventListener("click", closeParam);
ixi.addEventListener("click", closeWindow);
exyt.addEventListener("click", closeNego);


