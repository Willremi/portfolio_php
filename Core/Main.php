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
            // Sauvegarde du 1er paramètre dans $controller en mettant sa 1ère lettre en majuscule, en ajoutant le namespage des contrôleurs et en ajoutant "Controller" à la fin
            $controller = '\\App\\Controllers\\'.ucfirst(array_shift($params).'Controller');

            // Sauvegarde du 2ème paramètre dans $action si il existe, sinon index
            $action = isset($params[0]) ? array_shift($params) : 'index';

            // Instancie le contôleur
            $controller = new $controller();

            if(method_exists($controller, $action)) {
                // Si il reste des paramètres, il faut appeler la méthode en envoyant les paramètres sinon il faut l'appeler "à vide"
                (isset($params[0])) ? call_user_func_array([$controller, $action], $params) : $controller->$action(); 
            } else {
                // On envoie le code réponse 404
                http_response_code(404);
                echo "La page recherchée n'existe pas";
            }
        } else {
            // Ici aucun paramètre n'est défini
            // Instancie le contrôleur par défaut (page d'accueil)
            $controller = new MainController;

            // Appelle la méthode index
            $controller->index();
        }
    }
}