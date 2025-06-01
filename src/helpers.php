<?php

function jsonResponse($data = [], int $status = 200): void
{
    http_response_code($status);
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

function currentUser(): ?array {
    if (!isset($_SESSION['user_id'])) return null;
    return \App\Models\User::find($_SESSION['user_id']);
}