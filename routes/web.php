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

Route::get('Hotels', [UserController::class, 'hotels']);
Route::get('Restaurants', [UserController::class, 'restaurants']);
Route::get('Cities', [UserController::class, 'cities']);
Route::get('Landmarks', [UserController::class, 'landmarks']);
Route::get('Trending', [UserController::class, 'trending']);

Route::get('/place',[UserController::class, 'index']);
Route::get('/search', [UserController::class, 'search'])->name('web.search');



Route::get('dashboard','App\Http\Controllers\UserController@dashboard'); 








Route::group(['middleware' => 'auth'], function(){ //user needs to login to do the operation below
    Route::get('profile', [UserController::class, 'profile']);

    Route::get('bookmarks', [UserController::class, 'bookmarks']);

    Route::get('reviewhome', [UserController::class, 'reviewhome']);

    Route::get('placedetails', [UserController::class, 'placedetails']);

    Route::get('/signout','App\Http\Controllers\UserController@logout'); 

    Route::get('places/{id}', [UserController::class, 'reviewhome']);
    Route::post('places', [UserController::class, 'reviewpost']);
    Route::post('addbookmark', [UserController::class, 'addbookmark']);
    Route::post('addcomment', [UserController::class, 'addcomment']);

    Route::get('add_place',[UserController::class, 'add_place']); 
    Route::post('add_place',[UserController::class, 'store_place'])->name('place.store');
    
    Route::get('/admin_edit_user/{id}', [UserController::class, 'edit_user']); 
    Route::post('/admin_update_user', [UserController::class, 'update_user'])->name('test.update_user');

    
    if (Auth::check()) {
        $roles = Auth::user()->role;
        print_r($roles);
    
    
    
    if($roles == 'ADMIN'){
        
    
    }
   }
}
);

Route::middleware(['auth', 'isAdmin'])->group(function () { //only admin can operates the operation below
    Route::get('admin', [AdminController::class, 'admin']); 
    Route::get('manage_user', [UserController::class, 'manage_user']); 

   

    Route::get('manage_place', [UserController::class, 'manage_place']);

    Route::get('delete_user/{id}',[UserController::class,'delete_user']);

     Route::get('delete_place/{id}',[UserController::class,'delete_place']);

    Route::get('/admin_editplace/{id}', [UserController::class, 'edit_place']); 
    Route::post('/admin_update_place', [UserController::class, 'update_place'])->name('test.update_place');
    
    Route::get('manage_category', [UserController::class, 'manage_category']);

    Route::get('add_category',[UserController::class, 'add_category']); 
    Route::post('add_category',[UserController::class, 'store_category'])->name('category.store'); 

    Route::get('delete_category/{id}',[UserController::class,'delete_category']);

    Route::get('/admin_editcategory/{id}', [UserController::class, 'edit_category']); 
    Route::post('/admin_updatecategory', [UserController::class, 'update_category'])->name('test.update_category');
    
  });
