<?php

namespace App\Controllers;

class Formulaire extends BaseController
{
    public function index()
    {
        helper('form'); // 👉 Charger le helper 'form'

        return view('formulaire_view'); // 👉 Afficher une vue
    }
}
