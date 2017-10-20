<?php 

require_once __DIR__.'/../vendor/autoload.php';

try {

    (new Symfony\Component\Dotenv\Dotenv())->load(__DIR__.'/../.env');
} catch (Symfony\Component\Dotenv\Exception\PathException $e) {
    //
}

$app = new Laravel\Lumen\Application(
    realpath(__DIR__.'/../')
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);


$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$kernel = new \App\Kernel();
$kernel->register($app);

$app->router->group([
    'namespace' => 'App\Http\Controllers',
], function ($router) {
    $files = array_diff(scandir(__DIR__.'/../routes/'), array('.', '..'));
    foreach ($files as $file) {
        require __DIR__.'/../routes/'.$file;
    }
    
});

return $app;