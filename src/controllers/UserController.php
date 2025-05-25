<?php

namespace App\Controllers;

class UserController
{
    public function show($params)
    {
        echo "Usuario con ID: " . $params['id'];
    }
}
