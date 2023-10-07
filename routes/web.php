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

use App\Http\Controllers\EventController;
/*
// query parameters
Route::get('/produtos', function () {

  $busca = request('search');

  return view('products', ['busca' => $busca]);
});

// Route::get('/produtos/{id}', function ($id) {
//     return view('product', ['id' => $id]);
// });

// optional parameter
Route::get('/produtos_info/{id?}', function ($id = null) {
  return view('product', ['id' => $id]);
});
*/

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);
