<?php
require_once __DIR__ . '/../app/core/AutoLoader.core.php';
require_once __DIR__ . '/../app/core/Router.core.php';

$router = new Router();
$router->handleRequest($_SERVER['REQUEST_URI']);