<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MineController;
use App\Http\Controllers\CategoryController;



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
//     return view('home.index');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/dash',[MineController::class,'dashboard']);

Route::get('/',[MineController::class,'dashboard']);

Route::get('category-index',[CategoryController::class,'categoryIndex'])->name('categoryIndex');


Route::get('category-add',[CategoryController::class,'categoryAdd'])->name('categoryAdd');

Route::get('category-edito',[CategoryController::class,'categoryEdit'])->name('categoryEdit');


Route::post('category-store',[CategoryController::class,'categoryStore'])->name('categoryStore');

