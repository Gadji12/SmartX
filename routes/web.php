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

Route::redirect('/','register');


Route::post('/logout',[\App\Http\Controllers\Auth\LogoutController::class,'perform'])->name('logout');

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

        Route::get('/userlist',function (){
            return view('admin.users.userslist');
        })->name('admin-userlist');

        Route::resources([
            'projects' =>\App\Http\Controllers\OfferController::class
        ]);

    });
});


Route::prefix('user')->middleware('auth')->group(function (){
    Route::group(['middleware' => ['role:user']],function (){

        Route::get('/profile',function (){
            return view('user.profile.myprofile');
        })->name('user-profile');

        Route::get('/requisites',function (){
            return view('user.profile.requisites');
        })->name('user-requisites');

        Route::get('/dashboard',function (){
            return view('user.userdashboard');
        })->name('user-dashboard');

        Route::get('/portfolio',function (){
            return view('user.portfolio');
        })->name('user-portfolio');

        Route::get('/referrals',    [\App\Http\Controllers\ReferralController::class, 'showReferral'])->name('user-referrals');

        Route::get('/financial',    [\App\Http\Controllers\TransactionController::class, 'indexTransactions'])->name('user-financial');

        Route::get('/affiliate',   [\App\Http\Controllers\ReferralController::class, 'showAffiliate'])->name('user-affiliate');

        Route::post('/financial/balance',   [\App\Http\Controllers\TransactionController::class,'storeTransactions'])->name('postbalance');

        Route::get('/financial/balance',function (){
            return view('user.financial.upbalance');
        })->name('user-up-balance');

        Route::get('/financial/withdrawal',function (){
            return view('user.financial.withdrawal');
        })->name('user-withdrawal');

        Route::get('/translation',function (){
            return view('user.financial.translation');
        })->name('user-translation');

        Route::get('/project',function (){
            return view('user.myproject');
        })->name('user-project');

        Route::resources([
            'offers' =>\App\Http\Controllers\UserProductController::class

        ]);

//        Route::post('/addproject',[\App\Http\Controllers\UserProjectController::class, 'addProject'])->name('addproject');
    });

});
