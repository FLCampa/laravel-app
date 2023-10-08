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

// age entre a acao de clicar no link e a view ser entregue
// rota só pode ser acessada por um usuario logado
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');

Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);
Route::delete('/events/{id}', [EventController::class, 'destroy']);

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

// Route::middleware([
//   'auth:sanctum',
//   config('jetstream.auth_session'),
//   'verified',
// ])->group(function () {
//   Route::get('/dashboard', function () {
//     return view('dashboard');
//   })->name('dashboard');
// });
