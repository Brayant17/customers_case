<?php

namespace App\Middlewares;

class AuthMiddleware
{
    public function handle(): bool
    {
        session_start();

        if (!isset($_SESSION['user_id'])) {
            header('Location: ' . BASE_PATH . '/login');
            return false;
        }

        return true;
    }
}
