<?php

use App\Joy;
use App\Http\Controllers\JoyController;

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
	$joys = Joy::orderBy('created_at', 'asc')->get();

    return view('joys', [
        'joys' => $joys
    ]);

});

// Route::get('post/create', 'PostController@create');

Route::post('/joy', 'JoyController@create');


/** TODO: Move these to APIs **/


/**
 * Delete An Existing Item
 */
Route::delete('/joy/{id}', 'JoyController@delete');