<?php   $metaTitle = "contact";
$metaDescription = "voici ma page contact";


$nom = filter_input(INPUT_POST, 'nom');
$prenom = filter_input(INPUT_POST, 'prenom');
$email = filter_input(INPUT_POST, 'e-mail');
$contact = filter_input(INPUT_POST, 'contact');
$message = filter_input(INPUT_POST, 'message');
$civilite = filter_input(INPUT_POST,'civilites');

$tableauDonnee = [$civilite,$nom, $prenom, $email, $contact, $message];

var_dump($nom);

$date = date('Y-m-d-H-i-s');
$nomFichier = "contact_" . $date . ".txt";

$erreur_champs_vide = " le champs est pas vide ";
$erreur_champs_non_valide = "le champs n'est pas valable ";


if (isset($_POST["envoyer"])
    && !empty($nom)
    && !empty($prenom)
    && !empty($email)
    && !empty($contact)
    && !empty($message))
{
    file_put_contents('contact/' . $nomFichier, implode(" ", $tableauDonnee));
}


/*
if (isset($_POST["envoyer"])) {
    if ( empty($nom) ) {
        echo $erreur_champs_vide;
    } elseif  ($nom != filter_input(INPUT_POST, 'nom',FILTER_SANITIZE_FULL_SPECIAL_CHARS )) {
        echo $erreur_champs_non_valide ;
    } else {
        file_put_contents('contact/' . $nomFichier, implode(" ", $tableauDonnee));
    }
} */





?>


<?php
require 'header.php';

?>

  <main>
    <div class="mx-auto justify-content-center align-items-center col-10 col-md-8 col-lg-8">
      <div class="text-center p-5">
        <h1 class="mb-3">Contact</h1>
      </div>

      <form method="post" action=""
        class="mx-auto justify-content-center align-items-center col-10 col-md-8 col-lg-8">
        <div class="form-group mb-3">
          <select class="form-control text-secondary" id="exampleFormControlSelect1" name="status">
            <option>Entreprise</option>
            <option>Particulier</option>
          </select>
        </div>
          <div class="col mb-3">
          <label for="civilite-select">Votre civilité :</label>
          <select name="civilites" id="civilite-select">
              <option value="M">M</option>
              <option value="Mme">Mme</option>
          </select>
          </div>




          <div class="col mb-3">
          <input type="text" class="form-control" placeholder="Nom" name="nom" value= "<?=$nom?>">
          </div>

          <?php
                if (isset($_POST["envoyer"]) && empty($nom)) {
                 echo " <h6 class='text-danger'> le champ nom n'est pas rempli </h6>";
                 }

          ?>


          <div class="col mb-3">
              <input type="text" class="form-control"  name="prenom" placeholder="prenom"  value="<?=$prenom?>">
          </div>

          <?php

          if (isset($_POST["envoyer"]) && empty($prenom)) {
              echo " <h6 class='text-danger'> le champ prenom n'est pas rempli </h6>";
          } ?>


          <?php
            if (isset($_POST["envoyer"]) ) {
                if (!filter_input(INPUT_POST, "e-mail", FILTER_VALIDATE_EMAIL)) {
                    echo"l'email n'est pas dans un format valide";
                }
            }
          ?>

        <div class="form-group mb-3">
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="E-mail" name="e-mail" value= "<?=$email?>">
        </div>
          <?php if (isset($_POST["envoyer"]) && empty($email)) {
              echo " <h6 class='text-danger'> le champ email n'est pas rempli </h6>";
          } ?>
        <div class="form-group mb-3">
                <legend>selection votre demande:</legend>
                <div>
                    <input type="radio" id="emploi" name="contact" value="emploi"
                           checked>
                    <label for="emploi">Proposition d'emploi</label>
                </div>
                <div>
                    <input type="radio" id="info" name="contact" value="info">
                    <label for="info">Demande d'information</label>
                </div>
                <div>
                    <input type="radio" id="Prestations" name="contact" value="Prestations">
                    <label for="Prestations">Prestations</label>
                </div>
        </div>

        <div class="form-group mb-4">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"
            name="message" value="<?=$message?>">
          </textarea>
        </div>
          <?php
          if (isset($_POST["envoyer"]) && empty($message)) {
              echo " <h6 class='text-danger'> le champ message n'est pas rempli </h6>";
          }
          elseif (isset($_POST['envoyer']) && (strlen($message) < 5 ) ) {
              echo "Veuillez entrer au moins 5 caractères dans votre message";
          }
              ?>

        <div class="text-center mb-5">
          <button type="submit" class="btn btn-success" name="envoyer">Envoyer</button>
        </div>
      </form>
    </div>
  </main>







<?php
include 'footer.php';

?>