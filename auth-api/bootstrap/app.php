<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Database\QueryException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (NotFoundHttpException $exception, Request $request) {
            // return ResponseError($exception, "Record not found", 404);
        });

        $exceptions->render(function (AuthorizationException $exception, Request $request) {
            // return ResponseError($exception,"This action is unauthorized",403);
        });

        $exceptions->render(function (AccessDeniedHttpException $exception, Request $request) {
            // return ResponseError($exception,"This action is unauthorized",403);
        });

        $exceptions->render(function (QueryException $exception, Request $request) {
            // return ResponseError($exception,"An error occurred while retrieving data. Please try again later.",500);

        });

        $exceptions->render(function (AuthenticationException $exception, Request $request) {
            return response()->json([
                'message'=>'Unauthorized',
            ],500);
        });
    })->create();
