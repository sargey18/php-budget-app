<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use Framework\App;
use APP\Controllers\HomeController;

$app = new App();

// $app->get('/', ['App\Controllers\HomeController', 'home']);
$app->get('/', [HomeController::class, 'home']);


// dd($app);

return $app;