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

Route::get('/', 'SiteController@index')->name('home');
Route::get('/league/{play_all?}', 'LeagueController@index')->name('league');
Route::get('/matches/', 'LeagueController@updateMatches')->name('update-matches');
Route::get('/predictions/', 'LeagueController@updatePredictions')->name('update-predictions');
Route::get('/standings/', 'LeagueController@updateStandings')->name('update-standings');
Route::get('/next-week/', 'LeagueController@nextWeek')->name('next-week');
