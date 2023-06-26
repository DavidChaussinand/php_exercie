<?php

//var_dump($_SESSION);

$metaTitle = "contact";
$metaDescription = "voici ma page contact";
$iscontactPosted = isset($_POST["envoyer"]);


$mesFiltres=[
    'nom'=> FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'prenom'=> FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'message'=> FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'civilite'=> FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'contact'=> FILTER_SANITIZE_FULL_SPECIAL_CHARS,
];

$mesInput = filter_input_array(INPUT_POST,$mesFiltres);

$nom = $mesInput['nom'] ?? "" ;      // si l input nom existe alors du le reprends ,sinon chaine vide
$prenom = $mesInput['prenom'] ?? "";
$contact = $mesInput['contact'] ?? "";
$message = $mesInput['message'] ?? "";
$civilite = $mesInput['civilite'] ?? "" ;
$email = filter_input(INPUT_POST, 'e-mail') ?? "";

$DonneesFormulaire = [$civilite,$nom, $prenom, $email, $contact, $message];


$formErrors = [
        'nom' => 'Le champs nom est vide , merci de le remplir',
        'prenom'=> 'Le champs prenom est vide , merci de le remplir',
        'message'=> 'Le champs message est vide , merci de le remplir',
        'message2'=> 'Votre message est trop court (minimum 5 caractères demandé)',
        'e-mail' => 'le champs email est vide , merci de le remplir'
];
$erreur_champs_email_non_valide = null;




date_default_timezone_set('Europe/Paris');
$date= date('Y-m-d-H-i-s');
$nomFichier = "contact_" . $date . ".txt";


// on vérifie si la clé 'dateFirstVisit' existe déjà dans la session. 
// Si elle n'existe pas, cela signifie que c'est la première visite du visiteur. 
// Dans ce cas, stockez la date actuelle dans la session sous la clé 'dateFirstVisit
if (!isset($_SESSION['dateFirstVisit'])) {
  $_SESSION['dateFirstVisit'] = $date;
}


// le compteur de vue ***************************
if (!isset($_SESSION['countViewPage'])){
  $_SESSION['countViewPage'] = 1;
} else {
  $_SESSION['countViewPage']++;
}
$count = $_SESSION['countViewPage'];

if (isset($_POST["envoyer"])
    && !empty($nom)
    && !empty($prenom)
    && !empty($email)
    && !empty($contact)
    && !empty($message))
{

    file_put_contents('contact/' . $nomFichier, implode(" ", $DonneesFormulaire));
}

// ********************* message *************************


if (!(isset($_POST["envoyer"]) && empty($message))) {
      $formErrors['message'] = '';
}

if (!(isset($_POST["envoyer"]) && !empty($message) && (strlen($message) < 5 ))) {
    $formErrors['message2'] = '';
}
// ********************* Prenom *************************
if (!(isset($_POST["envoyer"]) && empty($prenom))) {
    $formErrors['prenom'] = '';
}
// ********************* nom *************************
if (!(isset($_POST["envoyer"]) && empty($nom))) {
  $formErrors['nom'] = '';
}
// ********************* email *************************
if (!(isset($_POST["envoyer"]) && empty($email))) {
    $formErrors['e-mail'] = '';
}

if (isset($_POST["envoyer"]) ) {
    if (!filter_input(INPUT_POST, "e-mail", FILTER_VALIDATE_EMAIL) && !empty($email)) {
        $erreur_champs_email_non_valide = "l'email n'est pas dans un format valide";
    }
}


?>


<?php
require 'header.php';

?>

  <main>
    <div class="mx-auto justify-content-center align-items-center col-10 col-md-8 col-lg-8">
      <div class="text-center p-5">
        <h1 class="mb-3">Contact</h1>
      </div>

      <form method="post" action="" class="mx-auto justify-content-center align-items-center col-10 col-md-8 col-lg-8">
        
          <div class="col mb-3">
          <label for="civilite-select">Votre civilité :</label>
          <select name="civilite" id="civilite-select">
              <option value="M">M</option>
              <option value="Mme">Mme</option>
          </select>
          </div>




          <div class="col mb-3">
          <input type="text" class="form-control" placeholder="Nom" name="nom" value= "<?=$nom?>">
          </div>
          <?= "<h6 class='text-danger'> " . $formErrors['nom'] . "</h6>" ?>

          <div class="col mb-3">
              <input type="text" class="form-control"  name="prenom" placeholder="prenom"  value="<?=$prenom?>">
          </div>
          <?= "<h6 class='text-danger'>  " . $formErrors['prenom'] . "</h6>" ?>

          <div class="form-group mb-3">
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="E-mail" name="e-mail" value= "<?=$email?>">
          </div>
          <?= "<h6 class='text-danger'> $erreur_champs_email_non_valide </h6>" ?>
          <?= "<h6 class='text-danger'> " . $formErrors['e-mail'] . "</h6>" ?>

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
              name="message" ><?=$message?></textarea>
          </div>
          <?= "<h6 class='text-danger'>" . $formErrors['message'] . "</h6>" ?>
          <?= "<h6 class='text-danger'> " . $formErrors['message2'] . "</h6>" ?>

          <div class="text-center mb-5">
            <button type="submit" class="btn btn-success" name="envoyer">Envoyer</button>
          </div>

      </form>
    </div>
  </main>

<?php
include 'footer.php';
?>