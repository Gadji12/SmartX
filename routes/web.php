<?php

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth')->group(function (){
    Route::group(['middleware' => ['role:admin']],function (){

        Route::get('/dashboard',function (){
            return view('admin.dashboard');
        })->name('admin_dashboard');

        Route::get('/conversions',function (){
            return view('admin.editing.сonversions');
        })->name('conversions');

        Route::get('/users',function (){
            return view('admin.editing.users');
        })->name('table-users');

        Route::resources([
            'offers' => \App\Http\Controllers\OfferController::class,
        ]);

        Route::get('/userlist',function (){
            return view('admin.users.userslist');
        })->name('admin-userlist');

        Route::resources([
            'offers' =>\App\Http\Controllers\OfferController::class
        ]);

    });
});


Route::prefix('user')->middleware('auth')->group(function (){
    Route::group(['middleware' => ['role:user']],function (){

        Route::get('/profile',function (){
            return view('user.profile');
        })->name('user-profile');

        Route::get('/dashboard',function (){
            return view('user.userdashboard');
        })->name('user-dashboard');

        Route::get('/portfolio',function (){
            return view('user.portfolio');
        })->name('user-portfolio');

        Route::get('/referals',function (){
            return view('user.referals');
        })->name('user-referals');

        Route::get('/financial',function (){
            return view('user.financial');
        })->name('user-financial');

        Route::resources([
            'product' =>\App\Http\Controllers\UserProductController::class
        ]);
    });
});
