<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**
 * React Routes accept {*} exept "api" prefix.
 *
 * @note: Do not modify.
 */
Route::get('/{path?}', function () {
    return view('welcome');
})->where('path', '^((?!api).)*$')->name('react');
