<?php

namespace App\Core;

use App\Controllers\MainController;

/**
 * Router principal
 */
class Main
{
    public function start()
    {
        // Démarrage de la session
        session_start();

        // Retire le "trailing slash" éventuel de l'URL
        // Récuppère l'adresse
        $uri = $_SERVER['REQUEST_URI'];

        // Vérifie si elle n'est pas vide et si elle se termine par un /
        if (!empty($uri) && $uri != '/' && $uri[-1] === '/') {
            // Dans ce cas enlève le /
            $uri = substr($uri, 0, -1);

            // envoie une redirectipermanente
            http_response_code(301);

            // redirige vers l'URL dans /
            header('Location: ' . $uri);
            exit;
        }

        // Gère les paramètres d'URL
        // p=controleur/methode/paramètres
        // Sépare les paramètres dans un tableau
        $params = explode('/', $_GET['p']);

        // Si au moins 1 paramètre existe
        if ($params[0] != "") {
        } else {
            // Ici aucun paramètre n'est défini
            // Instancie le contrôleur par défaut (page d'accueil)
            $controller = new MainController;

            // Appelle la méthode index
            $controller->index();
        }
    }
}