<?php

namespace App\Controllers\Api;
use App\Services\UserService;

class UserController
{
    public function show($params)
    {
        echo "Usuario con ID: " . $params['id'];
    }

    // para la API
    public function getByid($params){

        $user = (new UserService())->find($params['id']);

        if(!$user){
            jsonResponse(['error' => 'Usuario no encontrado'], 404);
        }

        jsonResponse([
            'data' => $user
        ]);
    }
}
