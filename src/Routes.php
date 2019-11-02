<?php
namespace App;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
class Routes
{
    public static function register(RouteCollection $collection)
    {
        $routes = $collection;
//        self::addRoute($routes, '/', ProductsController::class, 'index');

    }

    private static function addRoute(RouteCollection $routeCollection, string $url, string $controller, string $method)
    {
        $routeCollection->add($controller . "::" . $method, new Route($url, ['_controller' => $controller . "::" . $method]));
    }
}