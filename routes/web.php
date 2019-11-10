<?php
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
//contact

Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::get('/contact/create', 'ContactController@create')->name('contact.create');
Route::post('/contact/create', 'ContactController@store')->name('contact.store');
Route::get('/contact/{contact}/edit', 'ContactController@edit')->name('contact.edit');
Route::post('/contact/{contact}/update', 'ContactController@update')->name('contact.update');
Route::get('/contact/{contact}/show', 'ContactController@show')->name('contact.show');
Route::post('/contact/{contact}/destroy', 'ContactController@destroy')->name('contact.destroy');

//Album

Route::get('/album', 'ImageController@index')->name('album.index');
Route::get('/album/create', 'ImageController@create')->name('album.create');
Route::post('/album/create', 'ImageController@store')->name('album.store');
Route::get('/album/{id}', 'ImageController@show')->name('album.show');
Route::post('/album/destroy/{id}', 'ImageController@destroy')->name('album.destroy');
