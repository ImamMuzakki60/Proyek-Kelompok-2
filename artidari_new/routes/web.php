<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KataController;
use App\Http\Controllers\UserController;

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

// Homepage
Route::get('/', [KataController::class, 'index'])
->middleware('auth')
->name('home');

// Show Search Results
Route::get('/search', [KataController::class, 'search']);

// Istilah Regional
Route::get('/istilah', [KataController::class, 'istilah'])
->middleware('auth');

// Budaya Internet
Route::get('/budaya', [KataController::class, 'budaya'])
->middleware('auth');

// Teknologi dan Gadget
Route::get('/teknologi', [KataController::class, 'teknologi'])
->middleware('auth');

// Akronim
Route::get('/akronim', [KataController::class, 'akronim'])
->middleware('auth');

// Show Create Form
Route::get('/kata/create', [kataController::class, 'create'])
->middleware('auth');

// Store Kata
Route::post('/kata', [KataController::class, 'store'])
->middleware('auth');

Route::post('/kata/like/{id}', [KataController::class, 'like'])->name('kata.like');
Route::post('/kata/dislike/{id}', [KataController::class, 'dislike'])->name('kata.dislike');

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])
->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])
->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])
->name('login')
->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);