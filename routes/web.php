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
    $comics_array = config('comics');

    $info_arr = [];

    foreach ($comics_array as $item) {
        if ($item['id'] === $id ) {
            $info_arr[] = $item;
        }
    }

    $menu = config('menu');
    
    $data = [
        'info' => $info_arr,
        'menu_info' => $menu
    ];
    return view('info-comics', $data);
})->name('info-comics');