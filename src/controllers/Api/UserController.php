<?php

namespace App\Controllers\Api;

class UserController
{
    public function show($params)
    {
        echo "Usuario con ID: " . $params['id'];
    }

    // para la API
    public function getByid($params){
        $user = [
            'id' => $params['id'],
            'name' => 'Carlos García',
            'email' => 'carlos@example.com'
        ];

        jsonResponse([
            'success' => true,
            'data' => $user
        ]);
    }
}
