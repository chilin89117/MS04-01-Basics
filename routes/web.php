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

Route::get('/lec68',function() {
  return view('lecture68');
});

Route::get('/exercise3',function() {
  return view('exercise3');
});

Route::get('/exercise4',function() {
  return view('exercise4');
});

Route::get('/exercise5',function() {
  return view('exercise5');
});

Route::get('/new',function() {
  return view('new');
});
