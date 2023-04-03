<?php

namespace App\Controllers;

class CompetencesController extends Controller
{
    public function index()
    {
        $this->render('competences/index', [], 'default');
    }
}