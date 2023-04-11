<?php

namespace App\Controllers;

class FormationsController extends Controller
{
    public function index()
    {
        // Recherche dans le fichier json
        $json = file_get_contents('js/datas/formations.json');
        $formations = json_decode($json);

        $this->render('formations/index', compact('formations'), 'default');
    }
}