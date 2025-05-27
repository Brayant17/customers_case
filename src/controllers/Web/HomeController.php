<?php

namespace App\Controllers\Web;
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
