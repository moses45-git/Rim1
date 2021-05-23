<?php

use App\Http\Controllers\ProductController;
use Illuminate\Database\Schema\Blueprint;
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

Route::get('/', [ProductController::class, "welcome"])->name("welcome");
// Route::resource("products", ProductController::class);
Route::resource("products", ProductController::class);
