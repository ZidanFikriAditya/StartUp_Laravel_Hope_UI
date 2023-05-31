<?php

use App\Http\Controllers\Auth\AuthenticateController;
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
    return view('welcome', [
        'text' => 'Welcome to your application',
        'show' => true,
    ]);
});

Route::get('/login', [AuthenticateController::class, 'indexLogin'])->name('login');
Route::post('/login', [AuthenticateController::class, 'authenticate'])->name('login');

