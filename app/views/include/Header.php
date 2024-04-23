<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= URL_ROUTE; ?>/public/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <title><?= SITE_NAME; ?></title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-toggleable-lg navbar-inverse bg-inverse mb-3">
            <button class="navbar-toggle navbar-toggle-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDafault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href=<?php echo URL_ROUTE; ?> class="navbar-brand">CRUD MVC</a>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item float-right">
                        <a href="<?php echo URL_ROUTE; ?>/pages/insert" class="nav-link">Insertar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>