<?php


use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
], function (){
   Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');












    Route::post('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('adm.login');
    Route::group(['middleware' => ['auth:web','change-lang:oz'], 'prefix' => 'admin'], function (){
        Route::get('/', [\App\Http\Controllers\admin\DashboardController::class, 'index'])->name('dashboard');
        Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('adm.logout');

        Route::resource('menu', \App\Http\Controllers\Admin\MenuController::class);
    });
});



