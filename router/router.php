<?php

$routes = [
  '/' => 'controllers/index.php',
  '/about' => 'controllers/about.php',
  '/help' => 'controllers/help.php',
  '/contact' => 'controllers/contact.php',
  '/testimonials' => 'controllers/testimonials.php'
];

function routeToController($uri, $routes) {

  if(array_key_exists($uri, $routes)) {
    require $routes[$uri];
  } else {
    abort();
  }
}

function abort($code = 404) {
  
  http_response_code($code);
  require 'views/404.php';
  die();
}

routeToController($uri, $routes);