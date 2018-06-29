<?php

require 'core/bootstrap.php';
require 'core/Task.php';

$router = new Router;

require 'routes.php';

var_dump($_SERVER);

// require $router->direct($uri);
