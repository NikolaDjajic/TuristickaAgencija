<?php

use App\Http\Controllers\packageController;
use App\Http\Controllers\commentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [packageController::class, 'index']);

Route::get('/ponuda/{package}', [packageController::class, 'packageDetails']);

//Za dodavanje komentara
Route::post('/ponuda/{package}', [commentController::class, 'store']);

Route::get('/oNama', function () {
    return view('about');
});
Route::get('/kontakt', function () {
    return view('contact');
});
Route::get('/ponude', [packageController::class, 'packages']);

Route::get('/ljetovanja', [packageController::class, 'ljetovanja']);

Route::get('/zimovanja', [packageController::class, 'zimovanja']);

Route::get('/izleti', [packageController::class, 'izleti']);

Route::post('/ds', [commentController::class, 'store']);


Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/authenticate', [UserController::class, 'authenticate']);
Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware('auth');

Route::get('/register', [UserController::class, 'create']);

Route::get('/dashboard/addAdmin', [UserController::class, 'showAddAdmin'])->middleware('auth');
Route::post('/dashboard/addAdmin', [UserController::class, 'storeAdmin'])->middleware('auth');

Route::get('/dashboard/packages', [UserController::class, 'showPackages'])->middleware('auth');
Route::post('/dashboard/packages', [UserController::class, 'storePackage'])->middleware('auth');


Route::get('dashboard/ponuda/{package}', [UserController::class, 'packageDetails'])->middleware('auth');
Route::delete('/dashboard/ponuda/{package}', [UserController::class, 'deletePackage'])->middleware('auth');

Route::get('/dashboard/comments', [UserController::class, 'showComments'])->middleware('auth');

Route::get('/dashboard/comment/{comment}', [UserController::class, 'showComment'])->middleware('auth');
Route::post('/dashboard/comment/{comment}', [UserController::class, 'storeComment'])->middleware('auth');
Route::delete('/dashboard/comment/{comment}', [UserController::class, 'deleteComment'])->middleware('auth');

