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
}) -> name('home-page');

Route::get('/prodotti', function () {
    $pasta = config('pasta');

    $lunghe = array_filter($pasta, function($item){
        if ($item['tipo'] == 'lunga') {
            return $item;
        }
    });
    
    $corte = array_filter($pasta, function($item){
        if ($item['tipo'] == 'corta') {
            return $item;
        }
    });

    $cortissime = array_filter($pasta, function($item){
        if ($item['tipo'] == 'cortissima') {
            return $item;
        }
    });

    $data = [
        'formati' => [
            'lunga' => $lunghe,
            'corta' => $corte,
            'cortissima' => $cortissime
        ]
    ];
    
    return view('products', $data);
}) -> name('products-page');

Route::get('/dettaglio/{id}', function ($id) {
    $pasta = config('pasta');

    if($id >= 0 && $id < count($pasta) && is_numeric($id)){
        $specifiche = $pasta[$id];
        $data = ['formati' => $specifiche];
        return view('specifics', $data);
    } else {
        abort('404');
    }

}) -> name('specifics-page');

Route::get('/notizie', function () {
    return view('news');
}) -> name('news-page');

