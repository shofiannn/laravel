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

Route::get('/', function () {
    return view('web1');
});

Route::get('/web1', function () {
    return view('web1');
});

Route::get('/web2/{id}', function ($id) {
    return 'Halo '.$id;
});

Route::get('/web3', function () {
    return view('web3');
});

Route::get('/web4', function () {
    return view('web4');
});

Route::get('/web5', function () {
    return view('web5');
});

Route::get('/master', function () {
    return view('master');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/service', function () {
    return view('service');
});