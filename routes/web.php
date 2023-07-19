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
    $navLinks = config('db.navLinks');
    $cards = config('db.cards');
    $icon_shop = config('db.icons_shop');
    return view('welcome', compact('navLinks', 'cards', 'icon_shop'));
})->name('Homepage');
