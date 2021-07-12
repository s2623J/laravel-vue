<?php

require __DIR__.'/auth.php';

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Must be added to make Laravel 8 happy
use App\Http\Controllers\TestController; // Must be added to make Laravel 8 happy
use App\Http\Controllers\ContactUsController; // Must be added to make Laravel 8 happy
use App\Http\Controllers\SpecialsController; // Must be added to make Laravel 8 happy
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard'); // Any request for downloads must also pass through "auth

// Route::get(
//     '/specials',
//     [SpecialsController::class, 'index']
// )->middleware(['auth'])->name('specials');

Route::get('/page/{id}', [HomeController::class, 'page']);

// Route::get('/test1', [TestController::class, 'test1']);

// Route::get('/contact-us', [ContactUsController::class, 'index']);

// Route::post('/contact-us/sendMsg', [ContactUsController::class, 'sendMsg']);

// Route::post('/contact-us/sendMessage/ajax', [ContactUsController::class, 'sendMsgAjax']);

/////////////////////////////////////////////////////////////////////////////////////////////////


Route::group(['middleware' => 'auth'], function() { // Group nav links by wrapping them in 'auth' middlewear
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard'); // Any request for downloads must also pass through "auth

    Route::get('admin/specials', [SpecialsController::class, 'index']
    )->name('specials');
});