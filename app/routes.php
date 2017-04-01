<?php namespace PalPote;

/** @var \Herbert\Framework\Router $router */

$router->get([
    'as'   => 'simpleRoute',
    'uri'  => '/simple',
    'uses' => function()
    {
        return 'Hello World';
    }
]);
