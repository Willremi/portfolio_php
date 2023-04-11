<?php

namespace App\Controllers;

use App\Models\LangagesModel;

class CompetencesController extends Controller
{
    public function index()
    {
        // Recherche dans la BDD
        $langagesModel = new LangagesModel;
        $langages = $langagesModel->findAll();

        // Recherche dans le fichier json
        $json = file_get_contents('js/datas/projets.json');
        $projets = json_decode($json);

        $this->render('competences/index', compact('langages', 'projets'), 'default');
    }
}