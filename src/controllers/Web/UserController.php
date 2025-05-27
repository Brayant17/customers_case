<?php

namespace App\controllers\Web;
use App\Services\UserService;
use App\View;

class UserController {
    public function show($params)
    {
        $user = (new UserService())->find($params['id']);

        if (!$user) {
            http_response_code(404);
            echo "Usuario no encontrado";
            return;
        }

        View::render('user/show', [
            'title' => 'Perfil de usuario',
            'user' => $user
        ]);
    }
}
