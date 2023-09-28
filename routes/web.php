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
    $name = 'Felipe';
    $age = '24';

    $arr = [11, 24, 38, 42, 56];

    $names = ['Felipe', 'João', 'Maria'];

    return view(
        'welcome',
        [
            'name' => $name,
            'age' => $age,
            'arr' => $arr,
            'names' => $names
        ]
    );
});

Route::get('/produtos', function () {
    return view('products');
});
