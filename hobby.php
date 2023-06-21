<?php   $metaTitle = " hobby"?>
<?php $metaDescription = "voici ma page hobby" ?>

<?php
require 'header.php';

?>


<main class="container-fluid mx-auto my-0 bg-white">


    <section class="bg-white d-flex flex-column justify-content-center align-items-center ">
        <div class="d-flex align-items-center justify-content-center flex-column flex-md-row">
            <img class="rounded-pill my-2 img_cv_size mt-xl-4 " src="../photos/photo_david.jpg"
                 alt="Photo de david chaussinand">
            <div class="d-xl-flex flex-xl-column ms-md-2">
                <h1 class="mb-2 text-black m-md-2">David Chaussinand</h1>
                <h2 class="ms-2 mt-5 mb-1 mb-md-2 d-none d-xl-inline text-shadow-unable fs-3 fw-bold"> Développeur Web Front
                    End</h2>
            </div>
        </div>
        <h2 class="mb-1 mb-md-2 d-xl-none d-inline text-shadow-unable fs-3 fw-bold"> Développeur Web Front End</h2>
        <p class="m-2 text-center mt-xl-4 col-12 col-md-10 col-lg-8">Un développeur Web axé sur le frontend construisant
            la partie frontend des sites web et des applications web qui mène au succès global du produit</p>
    </section>


    <section class="mt-3 bg-light container-lg rounded col-12 col-md-10 col-lg-8">
        <h3 class="mb-3 text-success text-center position-relative start-50 translate-middle-x mt-2">Expériences
            professionnelles</h3>

        <table class="table table-hover table-striped mx-auto ">
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>2008-2023</td>
                <td>Gestionnaire assurance spécialisé</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>2023-2024</td>
                <td>Formation développeur logiciel</td>
            </tr>
            </tbody>
        </table>
    </section>

    <section
        class="bg-light mt-3 d-md-flex justify-content-md-evenly mt-md-4 mb-md-3 mx-md-auto py-md-2 py-lg-3 col-md-10 col-lg-8">

        <div class="d-flex flex-column justify-content-center align-items-center">
            <h3 class="text-success mt-md-2 mb-xl-1">Compétences</h3>


            <ul class="mt-1 mb-2 d-flex flex-column">
                <li>Autonomie</li>
                <li>Travail en équipe</li>
                <li>Gestion relation client</li>
            </ul>
        </div>


        <div class="d-flex flex-column justify-content-center align-items-center">
            <h3 class="text-success mt-md-2 mb-xl-1">Loisirs</h3>


            <ul class="mt-1 mb-2 d-flex flex-column">
                <li>Sport (randonnée, football)</li>
                <li>Jeux de société</li>
                <li>Escape game</li>
            </ul>
        </div>

    </section>

</main>

<?php
include'footer.php';

?>