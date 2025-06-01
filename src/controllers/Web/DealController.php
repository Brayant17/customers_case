<?php

namespace App\Controllers\Web;
use App\View;

class DealController
{
    public function configuration($params)
    {
        View::render('deal/configuration', [
            'title' => 'Inicio',
            'usuario' => ['Nombre' => 'Brayant']
        ]);
    }
}
