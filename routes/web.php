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
    return view('home');
});

Route::get('/', function () {

    $cards = config('comics');
    $menu = [

        'Index1' => 'Characters',
        'Index2' => 'Comics',
        'Index3' => 'Movies',
        'Index4' => 'TV',
        'Index5' => 'GAMES',
        'Index6' => 'Collectibles',
        'Index7' => 'Videos',
        'Index8' => 'Fans',
        'Index9' => 'News',
        'Index10' => 'Shop'
    ];


    return view('films', compact('cards', 'menu'));
})->name('films');

Route::get('header', function () {


    return view('header');
});
