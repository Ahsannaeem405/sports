<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\optionController;

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

Route::get('/', function () {
    return view('auth/login');
});
Route::get('/page1', function () {
    return view('user.home');
});
Route::get('/print', function () {
    return view('user.home2');
});
Route::get('/rosters/{id}',[UserController::class,'rosters'])->name('roster');
Route::get('/', function () {

    return view('auth.login');
});
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);
Route::prefix('/admin')->middleware(['SessionCheck', 'auth'])->group(function () {
    Route::get('/admin_index', [UserController::class, 'index']);


    Route::get('/index', [AdminController::class, 'index']);
    Route::get('/users', [AdminController::class, 'users']);
    Route::get('/sports', [AdminController::class, 'sports']);
    Route::get('/products', [AdminController::class, 'Products']);
    Route::get('/edit_product/{id}', [AdminController::class, 'edit_product']);
    Route::get('/edit_sports/{id}', [AdminController::class, 'edit_sports']);
    Route::get('/edit_user/{id}', [AdminController::class, 'edit_user']);
    Route::get('/options', [AdminController::class, 'options']);
    Route::get('/profile', [AdminController::class, 'edit_profile']);
    Route::post('update/profile',[AdminController::class,'update_profile']);
    Route::post('update/password',[AdminController::class,'update_password']);
    Route::get('/edit_option', [AdminController::class, 'edit_option']);
    Route::post('/adduser',[AdminController::class,'adduser']);
    Route::get('delete_user/{id}',[AdminController::class,'delete_user']);
    Route::post('/update_user', [AdminController::class, 'update_user']);
    Route::post('add_sports',[AdminController::class,'add_sports']);
    Route::get('delete_sports/{id}',[AdminController::class,'delete_sports']);
    Route::post('update_sports',[AdminController::class,'update_sports']);
    Route::post('add_product',[AdminController::class,'add_product']);
    Route::post('update_product',[AdminController::class,'update_product']);
    Route::get('delete_product/{id}',[AdminController::class,'delete_product']);
    Route::get('get_product',[AdminController::class,'get_product']);
    route::post('add_option',[AdminController::class,'add_option']);
    Route::get('delete_option/{id}',[AdminController::class,'delete_option']);
    Route::get('edit_option/{id}',[AdminController::class,'edit_option']);
    Route::post('update_option',[AdminController::class,'update_option']);
    Route::get('orders',[AdminController::class,'orders']);
    Route::get('order_detail/{id}',[AdminController::class,'product_detail']);
    Route::get('get_product_option',[AdminController::class,'get_product_option']);
    Route::post('/save_product_option',[optionController::class,'save_product_option']);
    Route::get('/get_edit_product',[optionController::class,'get_edit_product']);
    Route::post('/update_product_option',[optionController::class,'update_product_option']);
    // Route::get('/product_detail',[AdminController::class,'product_detail']);
  











});
Route::prefix('/user')->middleware(['UserCheck', 'auth'])->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('product/{id}',[UserController::class,'product']);
    Route::get('option/{id}',[UserController::class,'option']);
    Route::post('add/roaster',[UserController::class,'add_roaster']);
    Route::post('add/order',[UserController::class,'add_order']);
    Route::post('add/updat_order/{id}',[UserController::class,'updat_order']);
    
    Route::get('get_previous',[UserController::class,'get_previous']);
    Route::get('pre_option/{idd}',[UserController::class,'pre_option']);
    

    
    


});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
