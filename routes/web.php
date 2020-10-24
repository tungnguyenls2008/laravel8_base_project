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

//Route::get('/', function () {
//    return view('landing-page');
//});
Route::get('/', function () {
    return view('pages/landing');
})->name('landing');
Route::get('/logo', function () {
    return redirect('/');
})->name('landing');
Route::get('/gallery', function () {
    return view('pages/gallery');
})->name('gallery');
Route::get('/photo', function () {
    return view('pages/photo');
})->name('photo');
Route::get('/bio', function () {
    return view('pages/bio');
})->name('bio');
Route::get('/blog', function () {
    return view('pages/blog');
})->name('blog');
Route::get('/contact', function () {
    return view('pages/contact');
})->name('contact');
Route::get('/single', function () {
    return view('pages/single');
})->name('single');
Route::get('/form', function () {
    return view('pages/form');
})->name('form');
Route::post('form-post', 'App\Http\Controllers\FormController@postHandle')->name('form-post');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
