<?php

namespace App\Middlewares;

class AuthMiddleware
{
    public function handle(): bool
    {
        // Simulación: verificar si el usuario está "loggeado"
        $isLoggedIn = $_SESSION['logged_in'] ?? false;

        if (!$isLoggedIn) {
            http_response_code(401);
            echo "401 - No autorizado";
            return false;
        }

        return true;
    }
}
