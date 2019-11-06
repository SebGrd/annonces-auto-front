<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Annonces Auto</title>

    <link href="https://fonts.googleapis.com/css?family=Lato|Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= frontFolder('/lib/slick/slick.css') ?>">
    <link rel="stylesheet" href="<?= frontFolder('/css/style.css') ?>">
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <a href="/">
                    <img src="<?= frontFolder('/img/logo.png') ?>" alt="Logo" class="img-fluid">
                </a>
            </div>
            <div class="col-9 d-flex align-items-center justify-content-end">
                <nav>
                    <ul>
                        <li class="level-1">
                            <a href="#" class="has-child">Annonces</a>
                            <ul class="nav-dropdown">
                                <li><a href="#">Véhicule Diesel</a></li>
                                <li><a href="#">Véhicule Essence</a></li>
                                <li><a href="#">Véhicule Electrique</a></li>
                                <li class="separated"><a href="#" class="font-weight-bold">Toutes les annonces</a></li>
                            </ul>
                        </li>
                        <li class="level-1">
                            <a href="#" class="has-child">Vendre</a>
                            <ul class="nav-dropdown">
                                <li><a href="#" class="font-weight-bold">Déposer une annonce</a></li>
                                <li class="separated"><a href="#">Calculer les chevaux fiscaux de son véhicule</a></li>
                                <li><a href="#">A quel Crit'air mon véhicule est-il éligible ?</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <a href="#">Se connecter</a>
            </div>
        </div>
    </div>
</header>