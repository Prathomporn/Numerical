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

Route::get('/', function () { return view('welcome'); });
//Root
Route::resource('Bisection', 'BisectionController');
Route::get('show/Bisection', 'ShowBisectionController@index');

Route::get('FalsePosition', 'FalsePositionController@index');
Route::get('show/FalsePosition', 'ShowFalsePositionController@index');

Route::get('OnePointIteration', 'OnePointIterationController@index');
Route::get('show/OnePointIteration', 'ShowOnePointIterationController@index');

Route::get('NewtonRarpson', 'NewtonRaspsonController@index');
Route::get('show/NewtonRarpson', 'ShowNewtonRarpsoncontroller@index');

Route::get('Secant', 'SecantController@index');
Route::get('show/Secant', 'ShowSecantControlle@index');
//Linear