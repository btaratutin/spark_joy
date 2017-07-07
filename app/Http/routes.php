<?php

use App\Joy;
use Illuminate\Http\Request;

/**
 * Display All Items
 */
Route::get('/', function () {
    //
    return view('joys');
});

/**
 * Add A New Item
 */
Route::post('/joy', function (Request $request) {
    //
});

/**
 * Delete An Existing Item
 */
Route::delete('/joy/{id}', function ($id) {
    //
});