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


Route::get('/movies', function () {

    $data = [
        'movies' => [
            [
                'title' => 'The producers',
                'year' => '1967'
            ],
            [
                'title' => 'Willy Wonka and the chocolate factory',
                'year' => '1971'
            ],
            [
                'title' => 'Young Frankenstain',
                'year' => '1974'
            ],

            [
                'title' => 'The World\'s Greatest Lover',
                'year' => '1977'
            ],

        ]
    ];

    return view('movies', $data);
})->name('movies');


Route::get('/series', function () {
    $data = [
        'series' => [
            [
                'title' => 'Sense8',
                'year' => '2015'
            ],
            [
                'title' => 'Sherlock',
                'year' => '2010'
            ],
            [
                'title' => 'Community',
                'year' => '2011'
            ],
            [
                'title' => 'Firefly',
                'year' => '2002'
            ]
        ]
    ];

    return view('series', $data);
})->name('series');
