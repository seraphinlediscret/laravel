@extends('welcome')
@section('content')
<button type="button" class="btn btn-info" id="open">Configurer vos paramètres</button>

<h3>NegoDevis</h3>

<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos enim unde ratione voluptatum voluptates. Nisi asperiores a, rerum laudantium, pariatur quas cupiditate voluptates ullam accusamus molestiae necessitatibus consequatur optio corrupti aspernatur minima nesciunt ex aliquid laborum dolores modi quo. Blanditiis veritatis eaque recusandae similique praesentium, officiis cumque possimus numquam fugiat et ut quo ab repellendus id corrupti corporis quidem! Nisi alias blanditiis dolores consequatur aspernatur dolorum distinctio, quis exercitationem aliquid sunt magnam necessitatibus nemo ratione explicabo praesentium porro quod adipisci voluptate suscipit accusamus ullam! Architecto facilis numquam corporis? Aliquid possimus repellendus nam mollitia neque, velit deleniti deserunt ea, quos, ipsum fuga dolor tempore hic. Perspiciatis aperiam distinctio tenetur sequi, minus ab, possimus corrupti velit eius quam praesentium adipisci, omnis obcaecati sunt ut voluptate porro maxime consequuntur? Labore eos sed possimus aliquid, pariatur laboriosam suscipit repellat soluta magnam quas, earum reprehenderit, qui impedit similique totam laborum magni. Praesentium, ipsa corrupti! Veniam sint repellendus aliquam quidem quae hic, totam, minima, velit possimus cupiditate a. Ut asperiores enim aperiam porro at quo laudantium? Similique iure possimus voluptatem quidem placeat officia qui, facilis, adipisci reprehenderit labore, doloribus debitis. Minima beatae quam quod officiis laborum culpa ipsum earum ipsam placeat voluptatem quae ullam deleniti, deserunt, magni laboriosam neque! Quae quasi quia, adipisci tempora voluptates numquam a excepturi commodi, inventore nisi amet ullam suscipit blanditiis quis accusamus earum? Voluptatum nam nisi harum esse. Dicta sequi, itaque esse deserunt ipsa autem voluptatem. Consequatur minima iure quae quo ipsum unde quam voluptatem animi, perspiciatis modi omnis r </p>
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
