<?php

use Illuminate\Http\Request;
use Laravel\Passport\Http\Controllers\{
    AccessTokenController,
    AuthorizationController,
    TransientTokenController,
};
use App\Http\Controllers\{
    ContaContabilController,
};


use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

// Adicione estas rotas no arquivo api.php
Route::post('/oauth/token', [AccessTokenController::class, 'issueToken']);
Route::get('/oauth/authorize', [AuthorizationController::class, 'authorize']);
Route::post('/oauth/token/refresh', [TransientTokenController::class, 'refresh']);

Route::apiResource('plano-contas', ContaContabilController::class);
