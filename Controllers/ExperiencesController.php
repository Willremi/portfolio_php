<?php

namespace App\Controllers;

class ExperiencesController extends Controller
{
    public function index()
    {
        // Recherche dans le fichier json
        $json = file_get_contents('js/datas/experiences.json');
        $experiences = json_decode($json);

        $this->render('experiences/index', compact('experiences'), 'default');
    }
}