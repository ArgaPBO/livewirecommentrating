<?php

use Illuminate\Support\Facades\Route;
	
use App\Livewire\Home;
use App\Livewire\Input;
use App\Livewire\Crud;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', Input::class)->name('Input');
Route::get('/input', Input::class)->name('Input');
Route::get('/crud', Crud::class)->name('Crud');
