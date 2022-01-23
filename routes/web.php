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
    Route::get('manage_user', [UserController::class, 'manage_user']); 

    Route::get('/admin_edit_user/{id}', [UserController::class, 'edit_user']); 
    Route::post('/admin_update_user', [UserController::class, 'update_user'])->name('test.update_user');

    Route::get('manage_place', [UserController::class, 'manage_place']);


    Route::get('delete/{id}',[UserController::class,'delete_user']);

    Route::get('add_place',[UserController::class, 'add_place']); 
    Route::post('add_place',[UserController::class, 'store_place'])->name('place.store'); 

    Route::get('delete/{id}',[UserController::class,'delete_place']);

    Route::get('/admin_editplace/{id}', [UserController::class, 'edit_place']); 
    Route::post('/admin_update_place', [UserController::class, 'update_place'])->name('test.update_place');
    // Route::put('admin_update_place/{id}' , [UserController::class, 'edit_place']);
    
    
  });
