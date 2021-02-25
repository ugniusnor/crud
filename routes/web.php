<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//custom routes

Route::group(['prefix' => 'projects'], function(){
    Route::get('', [ProjectController::class, 'index'])->name('project.index');
    Route::get('create', [ProjectController::class, 'create'])->name('project.create');
    Route::post('store', [ProjectController::class, 'store'])->name('project.store');
    Route::get('edit/{project}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::post('update/{project}', [ProjectController::class, 'update'])->name('project.update');
    Route::post('delete/{project}', [ProjectController::class, 'destroy'])->name('project.destroy');
    Route::get('show/{project}', [ProjectController::class, 'show'])->name('project.show');
 });

 //groups
 Route::get('/groups', [GroupController::class, 'index'])->name('group.index');



 //sutdents
 Route::post('/groups/store', [StudentController::class, 'store'])->name('student.store');


