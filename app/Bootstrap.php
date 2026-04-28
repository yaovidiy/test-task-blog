<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Router;
use App\Controllers\HomepageController;

$router = Router::getRouter();

$router->get(
    '/',
    [HomepageController::class, 'index']
);
$router->get(
    '/post/{name}',
    [HomepageController::class, 'show']
);

$router->dispatch();

