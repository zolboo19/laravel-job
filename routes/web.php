<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
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
Route::get('/album/create', 'ImageController@create')->name('album.create')->middleware('admin');
Route::post('/album/create', 'ImageController@store')->name('album.store')->middleware('admin');
Route::post('/album/image', 'ImageController@image')->name('album.image');
Route::get('/album/{id}', 'ImageController@show')->name('album.show');
Route::post('/album/destroy/{id}', 'ImageController@destroy')->name('album.destroy');
Route::post('/album/add/image', 'ImageController@albumImage')->name('album.add.image');
Route::get('/album/image/upload', 'AlbumController@storeUpdateIndex')->name('album.image.index');
Route::post('/album/image/upload', 'AlbumController@storeUpdate')->name('album.image.upload');
