<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Models\Service;

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

// User Routes
Route::get('/', [PortfolioController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio/{id}', [PortfolioController::class, 'getPortfolioDetails'])->name('portfolio.details');
Route::get('/portfolio/update/{projectID}', [PortfolioController::class, 'updateDetails'])->name('update.details');

// Admin Routes
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginAdmin'])->name('loggingIn');

// Route::middleware('auth')->group(function(){
    Route::get('/admindashboard', [ProjectController::class, 'adminDashboard'])->name('dashbaord.admin');
    Route::get('/project', [ProjectController::class, 'addProject'])->name('project.add');
    Route::post('/project/create', [ProjectController::class, 'createProject'])->name('project.create');
    Route::put('/project/update/{projectID}', [ProjectController::class, 'updateProject'])->name('project.update');
    Route::delete('/project/delete/{projectID}', [ProjectController::class, 'deleteProject'])->name('project.delete');
// });

//Service Route
Route::get('/service/add', [ServiceController::class, 'addService'])->name('addService');
Route::get('/services', [ServiceController::class, 'getServices'])->name('services');



// To do list
// 2. Image CRUD for Project DONE
// 3. Service CRUD
// 4. Notification CRUD
