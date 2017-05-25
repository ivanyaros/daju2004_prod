<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
    'MyBakePlugin',
    ['path' => '/my-bake-plugin'],
    function (RouteBuilder $routes) {
        $routes->fallbacks(DashedRoute::class);
    }
);
