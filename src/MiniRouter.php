<?php

namespace App;

class MiniRouter
{
    private string $basePath;
    private array $routes = [];

    public function __construct(string $basePath = '')
    {
        $this->basePath = rtrim($basePath, '/');
    }

    public function add(string $method, string $pattern, $handler, array $middlewares = []): void
    {
        $this->routes[] = [$method, $pattern, $handler, $middlewares];
    }

    public function dispatch(): void
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        if (strpos($uri, $this->basePath) === 0) {
            $uri = substr($uri, strlen($this->basePath));
        }

        $matched = false;
        $isApi = str_starts_with($uri, '/api');

        foreach ($this->routes as [$routeMethod, $routePattern, $handler, $middlewares]) {
            if ($method !== $routeMethod) continue;

            $pattern = preg_replace('#\{(\w+)\}#', '(?P<\1>[^/]+)', $routePattern);
            $regex = "#^" . $pattern . "$#";

            if (preg_match($regex, $uri, $matches)) {
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);

                if (!$this->runMiddlewares($middlewares)) return;

                if (is_callable($handler)) {
                    call_user_func($handler, $params);
                } elseif (is_string($handler) && strpos($handler, '@') !== false) {
                    $this->invokeController($handler, $params, $isApi);
                }

                $matched = true;
                break;
            }
        }

        if (!$matched) {
            if ($this->isJsonRequest() || $isApi) {
                if (function_exists('jsonResponse')) {
                    jsonResponse(['error' => 'Ruta no encontrada'], 404);
                } else {
                    header('Content-Type: application/json');
                    http_response_code(404);
                    echo json_encode(['error' => 'Ruta no encontrada']);
                }
            } else {
                http_response_code(404);
                echo "404 - Ruta no encontrada";
            }
        }
    }

    private function runMiddlewares(array $middlewares): bool
    {
        foreach ($middlewares as $middlewareClass) {
            if (!class_exists($middlewareClass)) {
                http_response_code(500);
                echo "Middleware '$middlewareClass' no existe.";
                return false;
            }

            $middleware = new $middlewareClass();
            if (!method_exists($middleware, 'handle') || !$middleware->handle()) {
                return false;
            }
        }
        return true;
    }

    private function invokeController(string $handler, array $params, bool $isApi): void
    {
        [$controllerName, $method] = explode('@', $handler);

        $namespace = $isApi ? 'App\\Controllers\\Api\\' : 'App\\Controllers\\Web\\';
        $fqcn = $namespace . $controllerName;

        if (!class_exists($fqcn)) {
            http_response_code(500);
            echo "Error: clase '$fqcn' no encontrada.";
            return;
        }

        $controller = new $fqcn();

        if (!method_exists($controller, $method)) {
            http_response_code(500);
            echo "Error: método '$method' no existe en '$fqcn'.";
            return;
        }

        call_user_func([$controller, $method], $params);
    }

    private function isJsonRequest(): bool
    {
        return isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false;
    }
}
