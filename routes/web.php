<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Must be added to make Laravel 8 happy
use App\Http\Controllers\TestController; // Must be added to make Laravel 8 happy
use App\Http\Controllers\ContactUsController; // Must be added to make Laravel 8 happy
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

// Route::get('/', function () {
//     return view('welcome');

//     try {
//         DB::connection()->getPDO();
//         echo 'Yay, it worked!';
//     } catch (\Throwable $th) {
//         die('Could not connect to the database. Please check your configuration. Error: ' . $th);
//     }
// });

// Route::get('/page/about-us', [ContactUsController::class, 'sendMessage']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/page/{id}', [HomeController::class, 'page']);

Route::get('/test1', [TestController::class, 'test1']);

Route::get('/contact-us', [ContactUsController::class, 'index']);

Route::post('/contact-us/sendMsg', [ContactUsController::class, 'sendMsg']);

Route::post('/contact-us/sendMessage/ajax', [ContactUsController::class, 'sendMsgAjax']);