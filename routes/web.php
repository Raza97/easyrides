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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index2', function () {
    return view('index2');

});
Route::get('/index3', function () {
    return view('index3');

});
Route::get('/index4', function () {
    return view('index4');

});
Route::get('/index5', function () {
    return view('index5');

});
Route::get('/listingsearch2', function () {
    return view('listingsearch2');

});
Route::get('/listingsearch3', function () {
    return view('listingsearch3');

});
Route::get('/listingsearch4', function () {
    return view('listingsearch4');

});
Route::get('/listingeatsearch', function () {
    return view('listingeatsearch');

});
Route::get('/listingridesearch', function () {
    return view('listingridesearch');

});
Route::get('/listinghotelsearch', function () {
    return view('listinghotelsearch');

});




