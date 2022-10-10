<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Route::group([
//    'middleware' => 'api',
//    'prefix' => 'auth'
//], function ($router) {

    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::post('blogs', [BlogController::class, 'store'])->name('store');
    Route::post('blog', [BlogController::class, 'index'])->name('index');
    Route::post('blogs/{id}', [BlogController::class, 'show'])->name('show');
    Route::put('blogs/{id}', [BlogController::class, 'update'])->name('update');
    Route::delete('blogs/{id}', [BlogController::class, 'destroy'])->name('destroy');

//Route::middleware('auth:sanctum')->group( function () {
//    Route::resource('blogs', BlogController::class);
//});
//    Route::post('refresh', 'Api\AuthController@refresh')->name('refresh');
//    Route::get('me', 'Api\AuthController@me')->name('me');
//});

//Route::controller(AuthController::class)->group(function(){
//    Route::get('register', 'register');
//    Route::post('login', 'login');
//});
//Route::post('/register', [AuthController::class, 'ingia'])->name('ingia');
//Route::post('/login', [AuthController::class, 'toka'])->name('toka');
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
