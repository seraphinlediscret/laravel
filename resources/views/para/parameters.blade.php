@extends('welcome')
@section('content')
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
        <label for="validationCustom02" class="titi">Nombre d'essaies pour le premier tour</label>
        <input type="number" class="form-control field" id="validationCustom02" placeholder="Entrez votre nombre d'essaies" value="" required>
        <div class="valid-feedback">
            Validé !
        </div>
      </div>
      <div class="cardinput">
        <label for="validationCustom02" class="titi">Taux de la trappe</label>
        <input type="number" class="form-control field" id="validationCustom02" placeholder="Entrez le taux de la trappe" value="" required>
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
        <label for="validationCustom02" class="titi">Nombre de tours</label>
        <input type="number" class="form-control field" id="validationCustom02" placeholder="Entrez votre nombre de tours" value="" required>
        <div class="valid-feedback">
            Validé !
        </div>
      </div>
      <div class="cardinput">
        <label for="validationCustom02" class="titi">Prix minimum de vente</label>
        <input type="number" class="form-control field" id="validationCustom02" placeholder="Entrez votre prix minimum" value="" required>
        <div class="input-group-append">
          <span class="input-group-text unitmin">€</span>
        </div>
        <div class="valid-feedback">
            Validé !
        </div>
        </div>
      <div class="cardinput">
        <label for="validationCustom02" class="titi">Temps de négociation</label>
        <input type="time" class="form-control field" id="validationCustom02" placeholder="Entrez la durée de négociation" value="" required>
        <div class="input-group-append">
          <span class="input-group-text unittime">min</span>
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
    <a href="{{ asset('/app')}}" class="btn btn-primary" id="conf">Je confirme</a>
    <a href="#" class="btn btn-primary" id="back">Retour</a>
  </div>
</div>
  </form>

  <button class="btn btn-success val" type="submit" id="valid">Valider vos paramètres</button>
  
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
