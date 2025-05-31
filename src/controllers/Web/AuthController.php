<?php
namespace App\Controllers\Web;

use App\Models\User;

class AuthController
{
    public function showLoginForm(): void
    {
        require_once __DIR__ . '/../../../Views/auth/login.php';
    }

    public function login(): void
    {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $user = User::findByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            header('Location: /dashboard');
        } else {
            $_SESSION['error'] = 'Credenciales inválidas';
            header('Location: '. BASE_PATH .'/login');
        }
    }

    public function logout(): void
    {
        session_destroy();
        header('Location: /login');
    }
}
