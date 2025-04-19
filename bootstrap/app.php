<?php

use App\Http\Middleware\RoleMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        function(\Illuminate\Routing\Router $router) {
            $router->middleware('web')
                ->group(base_path('routes/web.php'));
            // custom admin route
            $router->middleware(['web', 'auth', 'role:admin'])
                ->prefix('admin') // url prefix
                ->name('admin.') //url name prefix
                ->group(base_path('routes/admin.php'));
        },
        commands: __DIR__.'/../routes/console.php',
    )
    // register our custom role middleware
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'role' => RoleMiddleware::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
