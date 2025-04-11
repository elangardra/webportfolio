<?php

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Load composer
require __DIR__ . '/../vendor/autoload.php';

// Load environment
$app = require __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

try {
    $response = $kernel->handle(
        $request = Illuminate\Http\Request::capture()
    );

    $response->send();

    $kernel->terminate($request, $response);
} catch (Exception $e) {
    // Log the error
    error_log($e->getMessage());
    
    // Display error in debug mode
    if (env('APP_DEBUG') === true) {
        echo '<pre>';
        echo $e->getMessage() . "\n";
        echo $e->getTraceAsString();
        echo '</pre>';
    } else {
        http_response_code(500);
        echo "Internal Server Error";
    }
} 