<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models;
use App\Models\Listing;
use GuzzleHttp\Psr7\Response;

/*
|-----------0---------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ListingController::class, 'index']);

// create listing
Route::get('/listings/create',[ListingController::class, 'create'])->middleware('auth');

// store Listing data
Route::post('/listings', [ListingController::class, 'store']);

// show edit form
Route::get('/listing/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');


// edit Submit to update

Route::put('/listing/{listing}', [ListingController::class, 'update'])->middleware('auth');


// delete Listing
Route::delete('/listing/{listing}', [ListingController::class, 'destroy'])->middleware('auth');
Route::get('/listing/manage', [ListingController::class, 'manage']);

// Single Listing
Route::get('/listing/{listing}',[ListingController::class, 'show']);


// show register/Create form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

##### UserController #####

// create new user 

Route::post('/users', [UserController::class, 'store']);


// logout user

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// show user login page 

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');


Route::post('/users/authenticate', [UserController::class, 'authenticate']);










