<?php

namespace App;

class View
{
    public static function render(string $view, array $params = [])
    {
        $viewPath = __DIR__ . '/../views/' . $view . '.php';
        $layoutPath = __DIR__ . '/../views/layouts/main.php';

        if (!file_exists($viewPath)) {
            http_response_code(500);
            echo "Vista '$view' no encontrada.";
            return;
        }

        // Variables disponibles en la vista
        extract($params);

        // Capturar contenido de la vista
        ob_start();
        include $viewPath;
        $content = ob_get_clean();

        // Incluir layout con $content y otras variables
        include $layoutPath;
    }
}
