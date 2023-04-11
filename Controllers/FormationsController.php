<?php

namespace App\Controllers;

class FormationsController extends Controller
{
    public function index()
    {
        $this->render('formations/index', [], 'default');
    }
}