<?php

use App\Http\Controllers\Admin\ChecklistController;
use App\Http\Controllers\Admin\ChecklistGroupController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\TaskController;
use Illuminate\Support\Facades\Auth;
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
Route::group(['middleware'=>'auth'], function(){
    Route::group(['prefix'=>'admin','as' => 'admin.','middleware'=>'is_admin'], function(){
    Route::resource('pages',PageController::class)->only(['edit','update']);
    Route::resource('checklist_groups',ChecklistGroupController::class);
    Route::resource('checklist_groups.checklists',ChecklistController::class);
    Route::resource('checklists.tasks',TaskController::class);
    });
});