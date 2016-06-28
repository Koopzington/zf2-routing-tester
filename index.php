<?php
require_once('vendor/autoload.php');

$testURL = $argv[1];

$moduleConfigPhp = include('module.config.php');
if (is_array($moduleConfigPhp) && array_key_exists('router', $moduleConfigPhp)) {
    $routingConfig = $moduleConfigPhp['router']['routes'];

    // Create new Router
    $router = new \Zend\Router\Http\TreeRouteStack();
    // Pass router config to it
    $router->addRoutes($routingConfig);

    // Fake a Request with the URL that you want to test
    $request = new \Zend\Http\Request();
    $request->setUri($testURL);

    // Match URL against Router
    $match = $router->match($request);

    // return RouteMatch
    var_dump($match);
} else {
    throw new Exception('Someone forgot to fill the module.config.php with content. Fix dat and retry!');
}