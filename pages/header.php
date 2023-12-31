<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $metaTitle; ?> </title>
    <link rel="stylesheet" href="../CSS/style.css">
    <meta name="description" content=" <?= $metaDescription; ?>">
    <link rel="icon" href="../photos/logo_team_fleury.svg" type="image/svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<header class="d-flex justify-content-between align-items-center  bg-light">
    <div class="">
        <img class="mt-2 " src="../photos/logo_team_fleury.svg" alt="logo de la compagnie">
    </div>

    <nav class="navbar navbar-expand-sm ">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/?page=hobby">Hobby</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/?page=contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>