<?php

use App\Http\Controllers\todlistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;

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
    return view('index');
});


route::get('list',[TodolistController::class,'list']);

route::get('delete/{id}',[TodolistController::class,'delete']);

route::view('add', 'list');

route::POST('add',[TodolistController::class,'Addtodolist']);

route::get('edit/{id}',[TodolistController::class,'showdata']);

route::POST('edit',[TodolistController::class,'edit']);



