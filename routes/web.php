<?php

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
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Start Manage Member
Route::get('/member/active/{id}','ManageMemberController@MemberActivity')->name('active');
Route::resource('/member','ManageMemberController');
// End Manage Member route

// Start Store Money For meal and others
Route::resource('/store','StoreMoneyController');
// End Store Money For meal and others

// Start Add your bazr date
Route::resource('/bazar','AddBazarController');
// End Add your bazr date

// Start Add your meal date wise
Route::resource('/meal','AddMealController');
// End Add your bmeal

// Start Add your meal date wise
Route::resource('/rent','AddRentController');
// End Add your bmeal