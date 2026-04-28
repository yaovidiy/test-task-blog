<?php
declare(strict_types= 1);

namespace App;

class Router
{
    private array $routes = [];

    private static Router $router;

    private function __construct()
    {

    }

    public static function getRouter()
    {
        if (!isset(self::$router)) {
            self::$router = new Router();
        }

        return self::$router;
    }

    private function register(string $route, string $method, array|callable $action)
    {
        $this->routes[$method][$route] = $action;
    }

    public function get(string $route, array|callable $action)
    {
        $this->register($route, 'GET', $action);
    }
    public function post(string $route, array|callable $action)
    {
        $this->register($route, 'POST', $action);
    }
    public function put(string $route, array|callable $action)
    {
        $this->register($route, 'PUT', $action);
    }
    public function delete(string $route, array|callable $action)
    {
        $this->register($route, 'DELETE', $action);
    }

    public function dispatch()
    {
        $requestedRoute = explode('?', $_SERVER['REQUEST_URI'])[0];

        if ($requestedRoute === '') {
            $requestedRoute = '/';
        }

        $routes = $this->routes[$_SERVER['REQUEST_METHOD']];

        foreach ($routes as $route => $action)
        {
            $routeRegex = preg_replace_callback('/{\w+(:([^}]+))?}/', fn($matches) => isset($matches[1]) ? '(' . $matches[2] . ')' : '([a-zA-Z0-9_-]+)', $route);

            $routeRegex = '@^' . $routeRegex . '$@';

            if (preg_match($routeRegex, $requestedRoute, $matches))
            {
                array_shift($matches);
                $routeParamsValues = $matches;

                $routeParamsNames = [];
                if (preg_match_all('/{(\w+)(:[^}]+)?}/', $route, $matches))
                {
                    $routeParamsNames = $matches[1];
                }

                $routeParams = array_combine($routeParamsNames, $routeParamsValues);
                return  $this->resolveAction($action, $routeParams);
            }
        }
        return $this->abort('404 Page not found');
    }

    private function resolveAction($action, $routeParams)
    {
        if (\is_callable($action))
        {
            return \call_user_func_array($action, $routeParams);
        }
        else if (\is_array($action))
        {
            return \call_user_func_array([new $action[0], $action[1]], $routeParams);
        }
    }

    private function abort(string $message, int $code = 404)
    {

        http_response_code($code);
        echo $message;
        exit();
    }

}
