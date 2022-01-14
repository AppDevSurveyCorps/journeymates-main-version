<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;
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


//Route::get('index', [HomeController::class, 'index']);

Route::get('login', [UserController::class, 'index'])->name('login'); 
Route::post('login', [UserController::class, 'login']); 

Route::get('register',[UserController::class, 'register']); 
Route::post('register',[UserController::class, 'store'])->name('test.store'); 

Route::get('index', [HomeController::class, 'index']);





Route::get('dashboard','App\Http\Controllers\UserController@dashboard'); 








Route::group(['middleware' => 'auth'], function(){
    Route::get('profile', [UserController::class, 'profile']);

    Route::get('bookmarks', [UserController::class, 'bookmarks']);

    Route::get('reviewhome', [UserController::class, 'reviewhome']);

    Route::get('/signout','App\Http\Controllers\UserController@logout'); 

    
    if (Auth::check()) {
        $roles = Auth::user()->role;
        print_r($roles);
    
    
    
    if($roles == 'ADMIN'){
        
    
    }
   }
}
);

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('admin', [AdminController::class, 'admin']); 
    Route::get('manage', [UserController::class, 'manage']); 
    Route::get('update', [UserController::class, 'update']); 

    Route::get('delete/{id}',[UserController::class,'delete']);
    
  });
