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
    $comics_array = config('comics');
    $menu = config('menu');

    $data = [
        'comics' => $comics_array,
        'menu_info' => $menu
    ];
    return view('home', $data);
});

Route::get('/comics/{id}', function ($id){

    $comics_array = collect(config('comics'));
    
    $comic = $comics_array->where('id', $id)->first();
    $menu = config('menu');


    $data = [
        'comic' => $comic,
        'menu_info' => $menu
    ];

    // dd($info_arr);

    return view('info-comics', $data);
})->name('info-comics');