<?php

use App\Http\Controllers\LoginController;
use App\Models\Nilai_Siswa;
use App\Models\User;
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
    return view('dashboard.index', [
        'users' => User::all(),
        'nilai' => Nilai_Siswa::all()
    ]);
});

// admin routes
Route::middleware(['admin'])->prefix('/admin')->group(function(){
    Route::get('/dashboard', function(){
        return 'hi';
    });
});

// guru routes
Route::middleware(['guru'])->prefix('/guru')->group(function(){
    Route::get('/dashboard', function(){
        return 'hi';
    });
});

// siswa routes
Route::middleware(['siswa'])->prefix('/siswa')->group(function(){
    Route::get('/dashboard', function(){
        return 'hi';
    });
});

// auth route
Route::get('/login', function(){
    return view('auth.login');
});
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);
