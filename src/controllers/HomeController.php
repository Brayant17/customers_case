<?php

namespace App\Controllers;

use App\View;

class HomeController
{
    public function index($params)
    {
        View::render('home', [
            'title' => 'Inicio',
            'usuario' => ['Nombre' => 'Brayant']
        ]);
    }
}
