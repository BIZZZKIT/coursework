<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\AnswersController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\QuestionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/questions', [QuestionsController::class, 'get']);
Route::post('/answers' , [AnswersController::class, 'create']);
Route::post('/clients', [ClientsController::class, 'create']);
Route::post('/admins', [AdminsController::class, 'create']);
Route::post('/admins/login', [AdminsController::class, 'login']);
Route::get('/clients/get', [ClientsController::class, 'getClients']);
Route::post('/createElementPortfolio', [PortfolioController::class, 'createElement']);
Route::get('/getElements', [PortfolioController::class, 'getElements']);
