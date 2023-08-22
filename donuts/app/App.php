<?php
namespace Donuts;

use Donuts\Controllers\DonutsController as DC;

class App {

    public static function start () {
        return '<h1>Hi from App<h1/>';
    }


    public static function router()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $uri = explode('/', $uri);
        array_shift($uri);
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method == 'GET' && count($uri) == 1 && $uri[0] == '') {
            return (new DC)->index();
        }

        return '<h1> 404 Page not fuond </h1>';

    }
}