<?php

// Définit une constante contenant le dossier racine du projet

use App\Autoloader;
use App\Core\Main;

define('ROOT', dirname(__DIR__));

// Importe l'Autoloader
require_once ROOT.'/Autoloader.php';
Autoloader::register();

// Instancie Main (le routeur)
$app = new Main;

// Démarre l'application
$app->start();
