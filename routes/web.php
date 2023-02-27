<?php

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

Route::get('/', [\App\Http\Controllers\UsersController::class , 'index']);

Route::prefix('files')->group(function () {
    Route::get('/', [\App\Http\Controllers\FilesController::class , 'index']);
    Route::get('/{id}', [\App\Http\Controllers\FilesController::class , 'show']);
    Route::get('/edit/{id}', [\App\Http\Controllers\FilesController::class , 'edit']);
    Route::put('/{id}', [\App\Http\Controllers\FilesController::class , 'update']);
    Route::delete('/{id}', [\App\Http\Controllers\FilesController::class , 'destroy']);
});

Route::prefix('users')->group(function () {
    Route::get('/', [\App\Http\Controllers\UsersController::class , 'index']);
    Route::get('/{id}', [\App\Http\Controllers\UsersController::class , 'show']);
    Route::get('/edit/{id}', [\App\Http\Controllers\UsersController::class , 'edit']);
    Route::put('/{id}', [\App\Http\Controllers\UsersController::class , 'update']);
    Route::delete('/{id}', [\App\Http\Controllers\UsersController::class , 'destroy']);
});


Route::prefix('user_group')->group(function () {
    Route::get('/', [\App\Http\Controllers\user_groupController::class , 'index']);
    Route::get('/{id}', [\App\Http\Controllers\user_groupController::class , 'show']);
    Route::get('/edit/{id}', [\App\Http\Controllers\user_groupController::class , 'edit']);
    Route::put('/{id}', [\App\Http\Controllers\user_groupController::class , 'update']);
    Route::delete('/{id}', [\App\Http\Controllers\user_groupController::class , 'destroy']);
});


Route::group(['prefix' => 'fileArchive'], function () {
    Route::get('/', [\App\Http\Controllers\file_archiveController::class , 'index']);
    Route::get('/{id}', [\App\Http\Controllers\file_archiveController::class , 'show']);
    Route::get('/edit/{id}', [\App\Http\Controllers\file_archiveController::class , 'edit']);
    Route::put('/{id}', [\App\Http\Controllers\file_archiveController::class , 'update']);
    Route::delete('/{id}', [\App\Http\Controllers\file_archiveController::class , 'destroy']);
});


Route::prefix('groups')->group(function () {
    Route::get('/', [\App\Http\Controllers\GroupsController::class, 'index']);
    Route::get('/{id}', [\App\Http\Controllers\GroupsController::class, 'show']);
    Route::get('/edit/{id}', [\App\Http\Controllers\GroupsController::class, 'edit']);
    Route::put('/{id}', [\App\Http\Controllers\GroupsController::class, 'update']);
    Route::delete('/{id}', [\App\Http\Controllers\GroupsController::class, 'destroy']);
});
