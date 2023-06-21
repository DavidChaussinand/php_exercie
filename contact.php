<?php   $metaTitle = "contact"?>
<?php $metaDescription = "voici ma page contact" ?>

<?php
require 'header.php';
?>

  <main>
    <div class="mx-auto justify-content-center align-items-center col-10 col-md-8 col-lg-8">
      <div class="text-center p-5">
        <h1 class="mb-3">Contact</h1>
      </div>

      <form method="post" action="https://httpbin.org/post"
        class="mx-auto justify-content-center align-items-center col-10 col-md-8 col-lg-8">
        <div class="form-group mb-3">
          <select class="form-control text-secondary" id="exampleFormControlSelect1" name="status">
            <option>Entreprise</option>
            <option>Particulier</option>
          </select>
        </div>

        <div class="col mb-3">
          <input type="text" class="form-control" placeholder="Nom" name="nom">
        </div>
        <div class="form-group mb-3">
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-mail" name="e-mail">
        </div>
        <div class="form-group mb-3">
          <label for="exampleFormControlSelect1">Objet de la demande</label>
          <select class="form-control text-secondary" id="exampleFormControlSelect1" name="demande">
            <option>Demander un devis</option>
            <option>Prendre un rendez-vous</option>
            <option>Autre</option>
          </select>
        </div>
        <div class="form-group mb-4">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"
            name="message"></textarea>
        </div>
        <div class="text-center mb-5">
          <button type="submit" class="btn btn-success">Envoyer</button>
        </div>
      </form>
    </div>
  </main>

<?php
include'footer.php';

?>