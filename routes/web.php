<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/home', function () {
    return redirect('/');
    //return view('welcome');
});

Route::get('/', function() {
	return 'All cats';
});

Route::get('about', function() {
return view('about')->with('number_of_cats', 9000);
});

Route::get('user/{name}', function ($name) {
    //
	$msg = 'Route with Regular Expression Constraints ....';
	$msg .= '<br />';
	$msg .= $name.' [A-Za-z]';

    return $msg;
})->where('name', '[A-Za-z]+');
