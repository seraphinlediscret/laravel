@extends('welcome')
@section('content')

<h1 class="applic">NegoDevis</h1>


  <div id="paratime">
    <button type="button" class="btn btn-info" id="open">Configurer vos paramètres</button>
  </div>

  <!--//////////////WELCOME/////////////////////-->
  <div id="well">
    <h1 style="font-size:30px; color: blue;">Bienvenue dans la Negociation !</h1>
    <p style="font-size: 20px; color : green;">Veuillez configurer vos paramètres pour lancer la negociation</p>
  </div>

<!--//////////////////NEGODEVIS/////////////////////-->
<div id="theapplinego"><!--div start-->
<!--//////////////////nb tour and exit/////////////////////-->

  <div id="exitandtour">
    <button type="submit" class="btn btn-danger" id="exyt">Quitter la negociation</button>
    <span id="tourcontent">nombre de tours :<div>
        <span id="count"></span>
    </div></span>
  </div>

<!---////////timer/////////-->

<div id="pomodoro-app">
    <div id="container">
      <div id="timer">
          <div id="time">
              <span id="minutes">2</span>
              <span id="colon">:</span>
              <span id="seconds">00</span>
          </div>
          <!--<div id="filler"></div>-->
         <!-- <div id="buttons">
              <button id="work">Work</button>
              <button id="stop">Stop</button>
          </div>-->
      </div>
  </div>
</div>

<!--/////////////////////application////////////////////////-->

<div id="negodevis">
    <div id="pricea">
      <span class="titstart self titab">Prix vendeur</span>
      <span class="titstart self" id="showprice"></span>
      </div>
      <div id="pricev">
      <span class="titstart buy titab">Prix acheteur</span>
      <span class="titstart buy" id="showbuy">|</span>
      </div>

      <div id="nbtour">
      <span class="numbtour">0</span>
      <span class="numbtour">1</span>
      <span class="numbtour" id="showtour">2</span>
      </div>

      <div id="pricep">
      <span class="titstart want titab">Prix proposé</span>
      <span class="titstart want" id="showwant">_</span>
      </div>

      <div id="pricer">
      <span class="titstart exp titab">Rabais %</span>
      <span class="titstart exp" id="showrab">_</span>
      </div>
</div>

<!------///////////validation//////////-------------->
<div id="thenego">
<form action="" method="post" class="needs-validation propok" novalidate>
      <div id="valprop">
      <input type="number" class="form-control newprop" id="validationCustom07" placeholder="Entrez une proposition" value="" required> 
</form>
</div> 

<button class="btn btn-warning" type="submit" id="validaction">Valider votre proposition</button>

<div id="yesorno">
    <button type="submit" class="btn btn-success accept">Acceptez l'offre</button>
    <button type="submit" class="btn btn-danger refus">Refuser l'offre</button>
</div>
</div>

</div><!--div end-->
<!--//parameters window//-->

<div id="containerparam" >

    <button id="ixi" class="btn btn-danger">X</button>

    <h2>Modifier vos Paramètres</h2>

<form method="post" action="" class="needs-validation " novalidate>
    <div class="farm">
        <div class="firstthree">
            <div class="cardinput">
              <label for="validationCustom01" class="titi">Prix du devis</label>
              <input type="number" class="form-control field" id="validationCustom01" placeholder="Entrez votre prix initial" value="" required>
        <div class="input-group-append">
              <span class="input-group-text unit">€</span>
        </div>
        <div class="valid-feedback">
          Validé !
        </div>
      </div>

      <div class="cardinput">
        <label for="validationCustom02" class="titi">Nombre de trappes</label>
        <input type="number" class="form-control field nbt" id="validationCustom02" placeholder="Entrez votre nombre d'essais" value="" required>
        <div class="valid-feedback">
            Validé !
        </div>
      </div>

      <div class="cardinput">
        <label for="validationCustom03" class="titi">Taux de la trappe</label>
        <input type="number" class="form-control field" id="validationCustom03 " placeholder="Entrez le taux de trappe" value="" required>
        <div class="input-group-append">
          <span class="input-group-text unitpour">%</span>
        </div>
        <div class="valid-feedback">
            Validé !
        </div>
      </div>
    </div>

    <div class="secondthree">
      <div class="cardinput">
        <label for="validationCustom04" class="titi">Nombre de tours</label>
        <input type="number" class="form-control field" id="validationCustom04" placeholder="Entrez votre nombre de tours" value="" required>
        <div class="valid-feedback">
            Validé !
        </div>
      </div>

      <div class="cardinput">
        <label for="validationCustom05" class="titi">Prix minimum de vente</label>
        <input type="number" class="form-control field" id="validationCustom05 " placeholder="Entrez votre prix minimum" value="" required>
        <div class="input-group-append">
          <span class="input-group-text unitmin">€</span>
        </div>
        <div class="valid-feedback">
            Validé !
        </div>
        </div>

      <div class="cardinput">
        <label for="validationCustom06" class="titi">Temps de négociation</label>
        <input type="time" class="form-control field" id="validationCustom06" placeholder="Entrez la durée de négociation" value="" required>
        <div class="input-group-append">
          <span class="input-group-text unittime">minutes</span>
        </div>
        <div class="valid-feedback">
            Validé !
        </div>
      </div>
    </div>
      </div>
<!--////////////////////////////////////////card confirm///////////////////////////////////-->

<div class="card" id="confirm" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Validation</h5>
        <p class="card-text">Voulez-vous confirmer ces paramètres ?</p>
        <a href="#" class="btn btn-primary" id="conf">Je confirme</a>
        <a href="#" class="btn btn-primary" id="back">Retour</a>
    </div>
</div>
  </form>
  <button class="btn btn-success val" type="submit" id="valid">Valider vos paramètres</button>

</div>

  <!--///////////////////////////script////////////////////////////////////////////////////-->
  <script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>
@endsection
