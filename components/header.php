<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link href="/assets/css/style.css" rel="stylesheet" />
        <title>Projet en carton</title>
    </head>
    <body>
        <header>
            <div id="logos">
                <img id="logoMichelin" src="/assets/img/Michelin-Logo.png" alt="logo michelin">
                <img id="logoEbay" src="/assets/img/EBay_logo.png" alt="logo ebay">
            </div>
            <div id="logoAnniv">
                <img src="/assets/img/Logo-120-ans_rond.png" alt="logo anniversaire 120ans michelin">
            </div>
            <h1>Les enchères solidaires !</h1>
            <nav>
                <ul>
                    <?php $path = strtolower(substr($_SERVER["REQUEST_URI"], 1));?>
                    <div class="navLink<?php echo $path === 'home' ? ' active' : ''; ?>">
                        <li><a href="/home">accueil</a></li>
                    </div>
                    <div class="navLink<?php echo $path === 'presentation' ? ' active' : ''; ?>">
                        <li><a href="/presentation">présentation</a></li>
                    </div>
                    <div class="navLink<?php echo $path === 'inscription' ? ' active' : ''; ?>">
                        <li><a href="/inscription">inscription</a></li>
                    </div>
                </ul>
            </nav>
        </header>