<?php
Route::get('/', function () {
  return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/module/{mod}',function($mod) {
  return view('module', ['mod' => $mod]);
});

Route::get('/lecture68', function() {
  return view('lecture68');
});

Route::get('/lecture70', function() {
  return view('lecture70');
});

Route::get('/lecture76', function() {
  return view('lecture76');
});
