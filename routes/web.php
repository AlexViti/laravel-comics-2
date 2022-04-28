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
  return view('guest.home');
})->name('home');

$nav = ['characters', 'comics', 'movies', 'tv', 'games', 'collectables', 'videos', 'fans', 'news', 'shop'];
foreach ($nav as $item) {
  Route::get('/' . $item, function () use ($item) {
    $data = [];
    if ($item == 'comics')
      $data['comics'] = config('comics');
    return view('guest.pages.' . $item, $data);
  })->name($item);
}

$comics = config('comics');
foreach ($comics as $comic) {
  Route::get('/comics/' . $comic['id'], function () use ($comic) {
    return view('guest.pages.comic', $comic);
  })->name('comic');
}

Route::get('/comics/comic', function () {
  return view('guest.pages.comics/comic');
})->name('comic');
