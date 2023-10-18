<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProductController;

//models path 
use App\Models\DataForm;

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
Route::get('/', [PagesController::class, 'home']);
Route::get('Pages/dataForm', [PagesController::class, 'dataForm']);
Route::post('Pages/store', [FormController::class, 'store']);

Route::get('Pages/insert', [ProductController::class, 'index']);
Route::post('Pages/insert', [ProductController::class, 'store']);
