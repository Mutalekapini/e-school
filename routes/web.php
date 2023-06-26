<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;

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

Route::view('/', 'e-school.layouts.index');
Route::view('/login', 'e-school.layouts.login');
Route::view('/about', 'e-school.layouts.about');
Route::view('/contact', 'e-school.layouts.contact');
Route::view('/register', 'e-school.layouts.register');

Route::post("/login", [SchoolController::class,'login']);
Route::post("/register", [SchoolController::class,'register']);
Route::post("/contact", [SchoolController::class,'contact']);
