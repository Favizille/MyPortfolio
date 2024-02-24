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

// User Routes
Route::get('/', [PortfolioController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio', [PortfolioController::class, 'getPortfolioDetails'])->name('portfolio.details');
Route::get('/portfolio/update', [PortfolioController::class, 'updateDetails'])->name('update.details');
Route::get('/projects', [ProjectController::class, 'getProjects'])->name('projects.all');

// Admin Routes
Route::get('/login', [PortfolioController::class, 'login'])->name('login');
Route::get('/project', [ProjectController::class, 'addProject'])->name('project.add');
Route::post('/project/create', [ProjectController::class, 'createProject'])->name('project.create');
Route::get('/admindashboard', [ProjectController::class, 'adminDashboard'])->name('dashbaord.admin');
Route::put('/project/update/{projectID}', [ProjectController::class, 'updateProject'])->name('project.update');
Route::delete('/project/delete/{projectID}', [ProjectController::class, 'deleteProject'])->name('project.delete');


// To do list
// 1. UPDATE PROJECT
// 2. Delete project
// 3. Service CRUD
// 4. Notification CRUD
// 5. Display projects on the admin dashboard blade
