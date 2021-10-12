<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\publicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [publicController::class, 'home']);

Route::get('/projects', [publicController::class, 'projects']);
Route::get('/projects/{projectId}', [publicController::class, 'projectInfo'])->where('projectId', '[0-9]+');

Route::get('/contact', [publicController::class, 'contact']);
Route::post('/contact', [publicController::class, 'contactConfirm']);

Route::get('/auth/login', [publicController::class, 'login']);

Route::get('/admin', [adminController::class, 'dashboard']);
Route::get('/admin/projects', [adminController::class, 'projects']);
Route::get('/admin/projects/add', [adminController::class, 'addProjects']);
Route::get('/admin/projects/{projectId}', [adminController::class, 'projectInfo'])->where('projectId', '[0-9]+');
Route::get('/admin/projects/{projectId}/update', [adminController::class, 'updateProject'])->where('projectId', '[0-9]+');
Route::post('/admin/projects/{projectId}/update', [adminController::class, 'projectUpdated'])->where('projectId', '[0-9]+');
Route::get('/admin/projects/{projectId}/delete', [adminController::class, 'deleteProject'])->where('projectId', '[0-9]+');
Route::post('/admin/projects/{projectId}/delete', [adminController::class, 'projectDeleted'])->where('projectId', '[0-9]+');