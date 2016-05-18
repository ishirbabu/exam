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

Route::get('/', 'external_form_controller@combine_external_form');

Route::get('/create',[
'middleware' => 'password_match',
'uses' => 'external_database_controller@insert_account_data',
]);    

Route::get('/validating',[
'middleware' => 'password_check',
'uses' => 'mygroup_page_controller@mygroup_page',
]);    
