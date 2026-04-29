<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Router;
use App\Controllers\HomepageController;
use App\Controllers\CategoryController;
use App\Controllers\PostController;

$router = Router::getRouter();

$router->get(
    '/',
    [HomepageController::class, 'index']
);
$router->get(
    '/category/{slug}',
    [CategoryController::class, 'listAllCategoryPosts']
);
$router->get(
    '/post/{id}',
    [PostController::class, 'show']
);

$router->dispatch();

