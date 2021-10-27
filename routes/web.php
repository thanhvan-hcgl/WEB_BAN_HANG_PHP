<?php

use app\Http\Controllers\Admin\Users\LoginController;
use app\Http\Controllers\cartController;
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

Route::get('admin/users/login','Admin\Users\LoginController@index')->name('login');
Route::post('admin/users/login/store','Admin\Users\LoginController@store');
Route::get('admin/users/abc','cartController@index');

//middleware có chức năng trước khi muốn vào url thì middleware kiểm tra các yếu tố tiên quyết khi vào trang web đó
Route::middleware(['auth'])->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('/main','Admin\Users\MainController@index')->name('admin');
        Route::get('/','Admin\Users\MainController@test');
        //prefix là xét những router có gốc chung vào một nhóm
        //Menu in Admin
        Route::prefix('menus')->group(function () {
            Route::get('/add', 'Admin\MenuController@create');
            Route::post('/add', 'Admin\MenuController@store');
            Route::get('/list','Admin\MenuController@index');
            Route::DELETE('/destroy','Admin\MenuController@destroy');
            Route::get('edit/{menu}','Admin\MenuController@show');
            Route::post('edit/{menu}','Admin\MenuController@update');

        });
        //Product in Admin
        Route::prefix('product')->group(function () {
            Route::get('/add', 'Admin\ProductController@create');
            Route::post('/add', 'Admin\ProductController@store');
            Route::get('/list', 'Admin\ProductController@index');
            //Route Model Binding
            Route::get('/edit/{product}', 'Admin\ProductController@show');
            Route::post('/edit/{product}', 'Admin\ProductController@update');
            Route::DELETE('/destroy','Admin\ProductController@destroy');
        });
        //Upload of picture
        Route::post('/upload/services','Admin\UploadController@store');
        //Slider in Admin
        Route::prefix('sliders')->group(function () {
            Route::get('/add', 'Admin\SliderController@create');
            Route::post('/add', 'Admin\SliderController@store');
            Route::get('/list', 'Admin\SliderController@index');
            //Route Model Binding
            Route::get('/edit/{slider}', 'Admin\SliderController@show');
            Route::post('/edit/{slider}', 'Admin\SliderController@update');
            Route::DELETE('/destroy','Admin\SliderController@destroy');
        });
    });
    //Home in Client
    Route::get('/','MainController@index');
    Route::post('/navs-pro','MainController@navs_pro');
    
    //Product in Client
    Route::get('/product','ProductController@index');
    Route::post('/product-tabs','ProductController@product_tabs');
    

});
//middleware đơn giản
//Route::get('admin/main','Admin\Users\MainController@index')->name('admin')->middleware('auth');;