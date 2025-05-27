<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function find(int $id): ?array
    {
        $user = User::find($id);
        return $user ?: null;
    }

    public function getAll(): array
    {
        $users = User::all();
        return $users;
    }

    public function validate(array $data): array
    {
        $errors = [];

        if (empty($data['name'])) {
            $errors[] = 'El nombre es obligatorio.';
        }

        if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'El correo electrónico no es válido.';
        }

        return $errors;
    }
}
