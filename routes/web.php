<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::post('/partials', function() {
    // get new data
    // get component class
    // merge new data into old data and re-create component object
    // render new html and respond
    $data = request()->get('data');
    $component = request()->get('component');
    $aliases = \Illuminate\Support\Facades\Blade::getClassComponentAliases();

    return response()->json([
        'dom' => '',
        'aliases' => $aliases,
    ]);
});
