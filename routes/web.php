<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [PortfolioController::class, 'login'])->name('login');
Route::get('/', [PortfolioController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio', [PortfolioController::class, 'getPortfolioDetails'])->name('portfolio.details');
Route::get('/portfolio/update', [PortfolioController::class, 'updateDetails'])->name('update.details');
Route::get('/projects', [ProjectController::class, 'getProjects'])->name('projects.all');
