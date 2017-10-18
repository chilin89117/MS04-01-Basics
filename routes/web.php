<?php
Route::get('/', function () {
  return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/lec24',function() {
  return view('lecture24');
});

Route::get('/lec28',function() {
  return view('lecture28');
});

Route::get('/lec29',function() {
  return view('lecture29');
});

Route::get('/lec43',function() {
  return view('lecture43');
});

Route::get('/module/{mod}',function($mod) {
  return view('module', ['mod' => $mod]);
});

Route::get('/lec68',function() {
  return view('lecture68');
});

Route::get('/lec70',function() {
  return view('lecture70');
});

Route::get('/lec76',function() {
  return view('lecture76');
});

Route::get('/new',function() {
  return view('new');
});
