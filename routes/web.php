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

    $icons = [
        [
            'nome' => 'Digital Comics',
            'img' => '../resources/img/buy-comics-digital-comics.png'
        ],
        [
            'nome' => 'DC Merchandise',
            'img' => '../resources/img/buy-comics-merchandise.png'
        ],
        [
            'nome' => 'Subscription',
            'img' => '../resources/img/buy-comics-subscriptions.png'
        ],
        [
            'nome' => 'Comic Shop Locator',
            'img' => '../resources/img/buy-comics-shop-locator.png'
        ],
        [
            'nome' => 'CD Power Visa',
            'img' => '../resources/img/buy-dc-power-visa.svg'
        ]
    ];

    $socials = [
        'facebook' => '../resources/img/footer-facebook.png',
        'twitter' => '../resources/img/footer-twitter.png',
        'youtube' => '../resources/img/footer-youtube.png',
        'pinterest' => '../resources/img/footer-pinterest.png',
        'periscope' => '../resources/img/footer-periscope.png',
    ];

    return view('fumetti', compact('cards', 'menu', 'icons', 'socials'));
})->name('fumetti');

Route::get('footer', function () {



    return view('footer',);
});
