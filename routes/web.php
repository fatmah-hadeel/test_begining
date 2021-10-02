<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
Route::get('/', function () {

    return view('welcome');
});


Route::get('/testDetails',[UserController::class, 'test_details']);
Route::get('/payments',[UserController::class, 'payment']);
Route::get('/test',[UserController::class, 'test']);
Route::get('/test-next',[UserController::class, 'test_next']);
Route::get('/test-result',[UserController::class, 'test_result']);
//Route::get('/upload/{id}',[UserController::class, 'uploadAvatar']);
Route::patch('/upload/{id}',[UserController::class, 'update']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
