<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'Site\HomeController@index');
Route::get('home', 'Site\HomeController@home');
Route::get('acercade', 'Site\BioController@index');

Route::get('user_resume', 'Site\ResumeController@index');
Route::get('contacto', 'Site\PagesController@contacto');

Route::get('productos-y-servicios', 'Site\SaleableController@index');
//Route::get('servicios', 'Site\SaleableController@index');
Route::get('producto/{saleable}', 'Site\SaleableController@detail');
Route::get('servicio/{saleable}', 'Site\SaleableController@detail');

Route::get('portafolio', 'Site\PortfolioController@index');
Route::get('project/{projectname}', 'Site\PortfolioController@detail');

Route::post('lead', 'Site\GuestController@storeLead');