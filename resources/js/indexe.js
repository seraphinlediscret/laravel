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
let priceini = document.getElementById("priceini");
let divini = document.getElementById("divini");
let validaction = document.getElementById("validaction");
let accept = document.getElementById("accept");
let refus = document.getElementById("refus");
let priceprop = document.getElementById("priceprop");
let visibbutton = document.getElementById("valprop");
let yesorno = document.getElementById("yesorno");
let stop = document.getElementById("stop");
let thenego = document.getElementById("thenego");
let theEND = document.getElementById("theEND");

//envoie de données//
let priceshow =document.getElementById("validationCustom01");
let trapshow = document.getElementById("validationCustom02");
let rabshow = document.getElementById("validationCustom03");
let tourshow = document.getElementById("validationCustom04");
let priceminshow = document.getElementById("validationCustom05");
let timeshow = document.getElementById("validationCustom06");
let actionshow = document.getElementById("validationCustom07");

//reception affichage de données //
let showcount = document.getElementById("count");///nombre de tour
let showprice = document.getElementById("showprice");
let showbuy = document.getElementById("showbuy");
let showwant = document.getElementById("showwant");
let showtour = document.getElementById("showtour");
let showrab = document.getElementById("showrab");
let showtime = document.getElementById("minutes");

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
    divini.style.display = "initial";

    //envoie de données//

    priceini.textContent = priceshow.value;
    showcount.textContent = tourshow.value;
    showtime.textContent = timeshow.value;

   
 }

 

function closeWindow() {
    allparam.style.display = "none";
    card.style.display = "none";
}

function closeNego() {
    window.location.reload();
}

//////////ajout de tr et td/////////////

let count = 0;
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
    if (ev.target.tagName === 'LI'){
        ev.target.classList.toggle('checked');
    }
}, false);



function action() {
      /////////////ajout list////////////////
      var tr = document.createElement("TR");
    
      var actionshow = document.getElementById("validationCustom07").value;
      var pricetest = document.getElementById("validationCustom01").value;
      
      if (actionshow === ''){
          alert("Veuillez entrer une proposition !");
      } else {
          count++
          document.getElementById("theTABLE").appendChild(tr);
      }
      document.getElementById("validationCustom07").value = "";
      document.getElementById("validationCustom01").value = "";
      var span = document.createElement("TD");
      var txt = document.createTextNode(count);
 
      var spantwo = document.createElement("TD");
      var vend = document.createTextNode(pricetest);
     
      var spanthree = document.createElement("TD");
      var t = document.createTextNode(actionshow);
 
      var spanfour = document.createElement("TD");
      var want = document.createTextNode("25000");
 
      var spanfive = document.createElement("TD");
      var sold = document.createTextNode("20%");
 
      tr.className = "trTABLE";
      spantwo.className = "blockall selfed";// vendeur
      spantwo.id = "y";
      spanthree.className = "blockall buyed";//acheteur
      span.className = "blockall countered";//count
      spanfour.className = "blockall wanted";//prix proposé
      spanfour.id = "priceprop";
      spanfive.className = "blockall solded";//rabais %
      
      spantwo.appendChild(vend);//vendeur
      tr.appendChild(spantwo);//vendeur
 
      tr.appendChild(t); // value
 
      spanthree.appendChild(t);
      tr.appendChild(spanthree);
 
      span.appendChild(txt); // count
      tr.appendChild(span);//count
 
      spanfour.appendChild(want);//prix proposé
      tr.appendChild(spanfour);//prix proposé
 
      spanfive.appendChild(sold);//rabais %
      tr.appendChild(spanfive);//rabais %

      //////button invisible/////
      visibbutton.style.display = "none";
      yesorno.style.display = "initial";
      ///////decrementation//////
      showcount.textContent--;

      if(showcount.textContent < 1){
        stop.style.display= "flex";
        thenego.style.display = "none";
        } else if (showcount.textContent == 1) {
    stop.style.display= "none";
} 
}

validaction.addEventListener("click", action);

////////conditions//////////////

function acceptNego() {
//alert("Êtes-vous sur de vouloir accepter l'offre de " + "[" + priceprop + "] euros ");
alert("prochainement");
}

function refusNego() {
    visibbutton.style.display ="flex";
    yesorno.style.display = "none";
}

valid.addEventListener("click", forcard);
back.addEventListener("click", ret );
open.addEventListener("click", openParam);
confirm.addEventListener("click", closeParam);
ixi.addEventListener("click", closeWindow);
exyt.addEventListener("click", closeNego);
accept.addEventListener("click", acceptNego);
refus.addEventListener("click", refusNego);
theEND.addEventListener("click", closeNego);