<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

Route::get('/', [TestController::class, 'index']);
Route::post('/login', [TestController::class, 'login']);
Route::post('/confirm', [TestController::class, 'confirm']);
Route::post('/admin', [TestController::class, 'admin']);
Route::post('/register', [TestController::class, 'register']);
Route::post('/thanks', [TestController::class, 'thanks']);

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