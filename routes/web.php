<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Auth::routes();

/*<!--BACKEND QI_SMI */



Route::namespace('Back\Login')->prefix('/admin/login')->group(function (){
    Route::get('/','Controller@index');
    Route::post('/check','Controller@login')->name('check');
});

Route::namespace('Back')->middleware(['admin'])->prefix('admin')->group(function (){
    Route::get('/','Controller@index')->name('admin');
    Route::namespace('Users')->middleware('permission:Super_Admin')->prefix('/users')->group(function (){
        Route::get('/','Controller@index')->name('users');
        Route::get('/create','Controller@create')->name('users.create');
        Route::get('/edit/{user}','Controller@edit')->name('users.edit');
        Route::put('/update','Controller@update')->name('users.update');
        Route::get('/delete/{user}','Controller@destroy')->name('users.delete');
        Route::post('/store','Controller@store')->name('users.store');
    });
     Route::namespace('Article')->middleware('permission:Super_Admin')->prefix('/article')->group(function (){
        Route::get('/','Controller@index')->name('articles');
        Route::get('/delete/{article}','Controller@destroy')->name('articles.delete');
    });
   Route::namespace('News')->middleware('permission:moderator uchun|Super_Admin')->prefix('/news')->group(function (){
       Route::get('/','Controller@index')->name('news');
       Route::get('/create','Controller@create')->name('news.create');
       Route::post('/store','Controller@store')->name('news.store');
       Route::get('/edit/{id}','Controller@edit')->name('news.edit');
       Route::put('/update','Controller@update')->name('news.update');
       Route::get('/destroy/{news}','Controller@destroy')->name('news.delete');
       Route::post('ckeditor/image_upload', 'Controller@upload')->name('news.upload');
    });
    Route::namespace('Slider')->prefix('/slider')->group(function (){
        Route::get('/','Controller@index')->name('slider');
        Route::get('/create','Controller@create')->name('slider.create');
        Route::post('/store','Controller@store')->name('slider.store');
        Route::get('/edit/{sliders}','Controller@edit')->name('slider.edit');
        Route::put('/update','Controller@update')->name('slider.update');
        Route::get('/destroy/{sliders}','Controller@destroy')->name('slider.delete');
        Route::post('ckeditor/image_upload', 'Controller@upload')->name('slider.upload');
    });
    Route::namespace('Ad')->prefix('/ad')->group(function (){
        Route::get('/','Controller@index')->name('ad');
        Route::get('/create','Controller@create')->name('ad.create');
        Route::post('/store','Controller@store')->name('ad.store');
        Route::get('/edit/{ad}','Controller@edit')->name('ad.edit');
        Route::put('/update','Controller@update')->name('ad.update');
        Route::get('/destroy/{ad}','Controller@destroy')->name('ad.delete');
    });
    Route::namespace('Categories')->middleware('permission:Super_Admin')->prefix('/categories')->group(function (){
        Route::get('/','Controller@index')->name('categories');
        Route::get('/create','Controller@create')->name('categories.create');
        Route::post('/store','Controller@store')->name('categories.store');
        Route::get('/edit/{categories}','Controller@edit')->name('categories.edit');
        Route::put('/update','Controller@update')->name('categories.update');
        Route::get('/destroy/{categories}','Controller@destroy')->name('categories.delete');
    });
    /*Role permission*/
    Route::namespace('Permission')->middleware('permission:Super_Admin')->prefix('/permission')->group(function (){
        Route::get('/','Controller@index')->name('permission');
        Route::get('/create','Controller@create')->name('permission.create');
        Route::post('/store','Controller@store')->name('permission.store');
        Route::get('/edit/{permissions}','Controller@edit')->name('permission.edit');
        Route::put('/update','Controller@update')->name('permission.update');
        Route::get('/destroy/{permissions}','Controller@destroy')->name('permission.delete');
    });
    Route::namespace('Role')->middleware('permission:Super_Admin')->prefix('/role')->group(function (){
        Route::get('/','Controller@index')->name('role');
        Route::get('/create','Controller@create')->name('role.create');
        Route::post('/store','Controller@store')->name('role.store');
        Route::get('/edit/{roles}','Controller@edit')->name('role.edit');
        Route::put('/update','Controller@update')->name('role.update');
        Route::get('/destroy/{roles}','Controller@destroy')->name('role.delete');
    });
    Route::namespace('ModelHasRoles')->middleware('permission:Super_Admin')->prefix('/user_role')->group(function (){
        Route::get('/','Controller@index')->name('user_role');
        Route::get('/create','Controller@create')->name('user_role.create');
        Route::post('/store','Controller@store')->name('user_role.store');
        Route::get('/edit','Controller@edit')->name('user_role.edit');
        Route::put('/update','Controller@update')->name('user_role.update');
        Route::get('/destroy','Controller@destroy')->name('user_role.delete');
    });
    Route::namespace('ModelHasPermissions')->middleware('permission:Super_Admin')->prefix('/permission_user')->group(function (){
        Route::get('/','Controller@index')->name('permission_user');
        Route::get('/create','Controller@create')->name('permission_user.create');
        Route::post('/store','Controller@store')->name('permission_user.store');
        Route::get('/edit','Controller@edit')->name('permission_user.edit');
        Route::put('/update','Controller@update')->name('permission_user.update');
        Route::get('/destroy','Controller@destroy')->name('permission_user.delete');
    });

});

  Route::get('/clear', function() {

   Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');

   return "Cleared!";
  });


//FRONT
Route::get('/locale/{locale}',function ($locale){
    Session::put('locale',$locale);
    return redirect()->back();
});
/*Route::namespace('Front\Login')->prefix('/login')->group(function (){
    Route::get('/','Controller@index')->name('login');
    Route::post('/check','Controller@login')->name('login.check');
});*/
Route::namespace('Front')->prefix('/')->group(function (){

    Route::get('/','Controller@index')->name('index');
    Route::get('/about','Controller@about')->name('about');
    Route::get('/slider/{sliders}','Controller@slider')->name('sliders');
    Route::get('/store','Controller@update')->name('index.update');
    Route::post('/ajax','Controller@ajax')->name('ajax');
    Route::get('/search','Controller@filter')->name('index.filter');
    Route::namespace('Categories')->prefix('/categories')->group(function (){
        Route::get('/{name}','Controller@index')->name('category');
        Route::get('/view/{id}-{url}','Controller@show')->name('categories.single');
    });
   /* Route::namespace('Register')->prefix('/register')->group(function (){
        Route::get('/','Controller@create')->name('register');
        Route::post('/store','Controller@store')->name('register.store');
    });*/
    Route::namespace('Tag')->prefix('/tags')->group(function (){
        Route::get('/filter/{name}','Controller@filter')->name('tags.filter');
    });

    Route::get('/{user}/{id}-{url}','Blog\Controller@show')->name('blog.show');

    Route::namespace('Likes')->prefix('/likes')->group(function (){
        Route::get('/store','Controller@store')->name('likes.store');
    });
     Route::namespace('Article')->prefix('/article')->group(function (){
        Route::get('/','Controller@create')->name('article.create');
        Route::post('/store','Controller@store')->name('article.store');
    });
    Route::namespace('Tests')->prefix('/tests')->group(function (){
        Route::get('/show/{url}-{slug}','Controller@show')->name('tests.show');
    });


});
/*
Route::get('/home', 'HomeController@index')->name('home');*/
