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

        $this->render('competences/index', compact('langages'), 'default');
    }
}