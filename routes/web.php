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

Route::group(['prefix'=> 'latihan'], function(){
    route::get('/', 'Crud\CrudController@index')->name('latihan');
    route::get('/create', 'Crud\CrudController@create')->name('latihan.create');
    route::post('/store', 'Crud\CrudController@store')->name('latihan.store');
    route::get('/edit/{crud}', 'Crud\CrudController@edit')->name('latihan.edit');
    route::put('/update/{crud}', 'Crud\CrudController@update')->name('latihan.update');
    route::delete('/destroy/{crud}', 'Crud\CrudController@destroy')->name('latihan.destroy');


    route::get('2','Latihan2\MultipleController@index')->name('latihan.2');
    route::get('create/multiple','Latihan2\MultipleController@create')->name('latihan.create.multiple');
    route::post('store/multiple','Latihan2\MultipleController@store')->name('latihan.store.multiple');
    route::get('edit/multiple/{book}','Latihan2\MultipleController@edit')->name('latihan.edit.multiple');
});